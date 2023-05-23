<?php

use Apsonex\GoogleFonts\GoogleFonts;
use Dotenv\Dotenv;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\File;

use function Pest\Laravel\withoutExceptionHandling;

beforeAll(function () {
    $dotenv = Dotenv::createImmutable(basePath());
    $dotenv->load();
});

it('it can fetch fonts from google server via api', function () {

    Cache::shouldReceive('remember')->once()->andReturn(File::json(basePath() . '/stubs/google-fonts.json')['items']);

    $res = GoogleFonts::make()->all();

    expect($res)->toBeArray();

    // https://fonts.googleapis.com/css2?
    // family=Playfair+Display:wght@400;500;600;700;800;900
    // &
    // family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900
    // &
    // display=swap
    // <link rel="preconnect" href="https://fonts.googleapis.com">
    // <link href="https://fonts.googleapis.com/css2?family=Roboto:ital@0;1&display=swap" rel="stylesheet">

    // $data = [];

    // dd(collect(File::json(basePath() . '/stubs/google-fonts.json')['items'])->groupBy('category'));

    // <link rel="preconnect" href="https://fonts.googleapis.com">
    // <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    // <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    // dd(Arr::undot($data));

    // withoutExceptionHandling();

    // $res = GoogleFonts::make()->all();


});
