<?php

namespace NoahWilderom\LaravelMollieSubscriptions\Commands;

use Illuminate\Console\Command;

class LaravelMollieSubscriptionsCommand extends Command
{
    public $signature = 'laravel-mollie-subscriptions';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
