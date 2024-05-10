<?php

namespace Apsonex\GoogleFonts;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;

class GoogleFonts
{

    public static function make(): static
    {
        return new static;
    }

    public function all()
    {
        return File::json(__DIR__ . '/../stubs/google-fonts-with-preview.json');

        // return Cache::remember('google_fonts', now()->addDay(), function () {
            // return Arr::get(
            //     File::json(__DIR__ . '/../stubs/google-fonts-with-preview.json'),
            //     'items'
            // );


            // if (!config('google-fonts.api_key')) {
            //     return Arr::get(
            //         File::json(__DIR__ . '/../stubs/google-fonts-with-preview.json.json'),
            //         'items'
            //     );
            // }

            // $res = Http::get("https://www.googleapis.com/webfonts/v1/webfonts?key=" . config('google-fonts.api-key'));

            // return Arr::get(
            //     $res->ok() ? $res->json() : File::json(__DIR__ . '/../stubs/google-fonts.json'),
            //     'items'
            // );
        // });
    }
}
