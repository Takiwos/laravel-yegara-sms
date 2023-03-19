<?php

namespace Takiwos\YegaraSms\Commands;

use Illuminate\Console\Command;

class YegaraSmsCommand extends Command
{
    public $signature = 'laravel-yegara-sms';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
