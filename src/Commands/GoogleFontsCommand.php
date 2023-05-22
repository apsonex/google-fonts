<?php

namespace Apsonex\GoogleFonts\Commands;

use Illuminate\Console\Command;

class GoogleFontsCommand extends Command
{
    public $signature = 'google-fonts';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
