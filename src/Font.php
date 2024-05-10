<?php

namespace Apsonex\GoogleFonts;

use Apsonex\GoogleFonts\FontParsers\BunnyFontParser;
use Apsonex\GoogleFonts\FontParsers\GoogleFontParser;

class Font
{
    protected array $fontData = [];

    protected string $provider;

    public function provider(string $provider): static
    {
        $this->provider = $provider;
        return $this;
    }

    public function fontData(array $fontData): static
    {
        $this->fontData = $fontData;
        return $this;
    }

    public function bunny(): static
    {
        $this->provider('bunny');
        return $this;
    }

    public function google(): static
    {
        $this->provider('google');
        return $this;
    }

    public static function make(): static
    {
        return new static();
    }

    public function parse(): array
    {
        return match($this->provider) {
            'google' => GoogleFontParser::make()->parse($this->fontData),
            default => BunnyFontParser::make()->parse($this->fontData),
        };
    }

    public function urlString($provider, $fontData)
    {
        return match($this->provider) {
            'google' => GoogleFontParser::make()->urlString($this->fontData),
            default => BunnyFontParser::make()->urlString($this->fontData),
        };
    }

    public function preconnectLinks($provider)
    {
        return match($this->provider) {
            'google' => GoogleFontParser::make()->preconnectLinks($this->fontData),
            default => BunnyFontParser::make()->preconnectLinks($this->fontData),
        };
    }

    public function searchFont($keyword): array
    {
        return match($this->provider) {
            'google' => GoogleFontParser::make()->searchFont($keyword),
            default => BunnyFontParser::make()->searchFont($keyword),
        };
    }
}
