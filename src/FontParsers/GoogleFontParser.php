<?php

namespace Apsonex\GoogleFonts\FontParsers;

class GoogleFontParser extends FontParser
{

    public function parse(array $fontData): array
    {
        $this->fontData($fontData);

        return [
            'key' => $this->fontData['key'],
            'provider' => 'google_font',
            'category' => $this->fontData['category'],
            'family' => $this->fontData['familyName'],
            'css' => '' . $this->fallbackFont($this->fontData['category']),
            'urlString' => $this->fontData['key'] . ':' . implode(',', array_filter([
                in_array('normal', $this->fontData['styles']) ? implode(',', $this->fontData['weights']) : null,
                in_array('italic', $this->fontData['styles']) ? collect($this->fontData['weights'])->map(fn ($item) => $item . 'i')->implode(',') : null,
            ])),
        ];
    }

    public function preconnectLinks(): string
    {
        return '<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
    }

    public function urlString(array $fontUrlString)
    {
        return 'https://fonts.bunny.net/css?family=' . implode('|', [
            $fontUrlString
        ]);
    }

    protected function fallbackFont($category): string
    {
        return match ($category) {
            'sans-serif' => 'sans-serif',
            'serif' => 'serif',
            'display' => 'display',
            'handwriting' => 'handwriting',
            'monospace' => 'monospace',
            default => 'serif',
        };
    }
}
