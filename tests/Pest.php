<?php

use Apsonex\GoogleFonts\Tests\TestCase;

uses(TestCase::class)->in(__DIR__);


/**
 * @return string
 */
function basePath(): string
{
    return realpath(__DIR__ . '/../');
}