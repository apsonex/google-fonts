<?php

namespace Apsonex\GoogleFonts\FontParsers;

abstract class FontParser
{
    protected array $fontData = [];

    public function fontData(array $fontData): static
    {
        $this->fontData = $fontData;
        return $this;
    }

    public static function make(): static
    {
        return new static();
    }

    abstract public function parse(array $fontData): array;
}
