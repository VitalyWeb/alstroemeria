<?php

namespace app\Console\Commands;

use engine\Modules\Console\Command;

class UserCreate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:create {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creating user';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        var_dump('1111');
        return 0;
    }
}