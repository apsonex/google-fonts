<?php

use Dotenv\Dotenv;
use Illuminate\Support\Arr;
use Apsonex\GoogleFonts\Font;
use Apsonex\GoogleFonts\GoogleFonts;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Process;

use function Pest\Laravel\withoutExceptionHandling;

beforeAll(function () {
    $dotenv = Dotenv::createImmutable(basePath());
    $dotenv->load();
});

it('it can fetch fonts from bunny server via api', function () {

    $fonts = collect(File::json(__DIR__ . '/../stubs/bunny-fonts.json'))
        ->mapWithKeys(function ($fontData, $key) {
            return [
                $key => Font::make()->fontData([...$fontData, 'key' => $key ])->bunny()->parse(),
            ];
        })->toJson();

    // $response = Http::get('https://fonts.bunny.net/list')->json();

    // File::put(__DIR__ . '/../stubs/bunny-fonts-2.json', $fonts);

    // Cache::shouldReceive('remember')->once()->andReturn(File::json(basePath() . '/stubs/google-fonts.json')['items']);

    // $res = GoogleFonts::make()->all();

    // expect($res)->toBeArray();
});

it('can_convert_bunny_font_svg', function() {
    $result = Process::path(__DIR__ . '/../scripts')->run('node ./font-to-svg.js');

    $result  = $result->output();

    dd($result);
});

it('can_search_bunny_font', function() {

    dd(
        Font::make()->bunny()->searchFont('rob')
    );

});