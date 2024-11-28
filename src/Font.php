<?php

namespace Apsonex\GoogleFonts;

use Illuminate\Support\Arr;
use Apsonex\GoogleFonts\FontParsers\BunnyFont;
use Apsonex\GoogleFonts\FontParsers\GoogleFont;

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
            'google' => GoogleFont::make()->parse($this->fontData),
            default => BunnyFont::make()->parse($this->fontData),
        };
    }

    public function urlString($provider, $fontData)
    {
        return match($this->provider) {
            'google' => GoogleFont::make()->urlString($this->fontData),
            default => BunnyFont::make()->urlString($this->fontData),
        };
    }

    public function preconnectLinks($provider)
    {
        return match($this->provider) {
            'google' => GoogleFont::make()->preconnectLinks($this->fontData),
            default => BunnyFont::make()->preconnectLinks($this->fontData),
        };
    }

    public function searchFont($keyword): array
    {
        return match($this->provider) {
            'google' => GoogleFont::make()->searchFont($keyword),
            default => BunnyFont::make()->searchFont($keyword),
        };
    }

    public function fontsByKey(array $keys = []): array
    {
        return match($this->provider) {
            'google' => GoogleFont::make()->fontsByKey($keyword),
            default => BunnyFont::make()->fontsByKey($keys),
        };
    }

    public function fontsByFamily(string|array $familiies): array
    {
        return match($this->provider) {
            'google' => GoogleFont::make()->fontsByFamily($keyword),
            default => BunnyFont::make()->fontsByFamily(Arr::wrap($familiies)),
        };
    }
}
