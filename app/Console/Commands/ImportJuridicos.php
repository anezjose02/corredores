<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;


class ImportJuridicos extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:juridicos';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import the .sql file with the corredores juridicos';

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
     * @return mixed
     */
    public function handle()
    {
        //
        \DB::unprepared(file_get_contents('database/migrations/juridicos.sql'));
    }
}
