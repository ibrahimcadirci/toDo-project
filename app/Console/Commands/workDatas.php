<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class workDatas extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:workDatas';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get and save Works.';

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
        $WorkList           = \WorkList::getApiServices();
        foreach($WorkList as $class){
            $data =  new $class;
        }
        return true;
    }
}
