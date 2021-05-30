<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class FirstCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Generate:Invoices';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate Invoices';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        User::create([
            'name' => \Str::random(5),
            'email' => \Str::random(5).'@gmail.com',
            'password' => '123456789'
        ]);

        $this->info('Successfully User Create');

    }
}
