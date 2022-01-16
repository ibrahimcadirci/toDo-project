<?php

namespace App\Console\Commands;

use App\Models\Works\Work;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

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
            DB::transaction(function () use ($data){ 
                // Transaction kullanarak olası bir hata durumunda işlemlerin geri alınmasını sağlıyoruz
                DB::table('works')->insert($data->getData()->toArray());

            });
        }
        return true;
    }
}
