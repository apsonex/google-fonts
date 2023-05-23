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
});
