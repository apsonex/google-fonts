<?php

namespace Apsonex\GoogleFonts\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Apsonex\GoogleFonts\GoogleFonts
 */
class GoogleFonts extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Apsonex\GoogleFonts\GoogleFonts::class;
    }
}
