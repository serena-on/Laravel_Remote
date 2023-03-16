<?php

namespace Serenaon\User\Commands;

use Illuminate\Console\Command;

class UserCommand extends Command
{
    public $signature = 'user-management';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
