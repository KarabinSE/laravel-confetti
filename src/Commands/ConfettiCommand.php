<?php

namespace Karabin\Confetti\Commands;

use Illuminate\Console\Command;

class ConfettiCommand extends Command
{
    public $signature = 'laravel-confetti';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
