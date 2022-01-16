<?php
namespace App\Helper;

use Exception;
use Throwable;

class WorkProgram{

    public function workProgram($jobs,$developers){
        try{
            $plan           = collect();
            foreach($jobs as $job){ 
                $jobDevelopers          = $developers->where('skill_level','>=',$job['difficulty'])->sortBy('skill_level');
                $assignment             = null;
                $totalTime              = null;
                foreach($jobDevelopers as $dev){
                    if(!is_null($totalTime)){
                        if($plan->where('dev_id', $dev->id)->sum('time') < $totalTime){
                            $totalTime              = $plan->where('dev_id', $dev->id)->sum('time');
                            $assignment             = $dev;
                        }
                    }else{
                        $totalTime                      = $plan->where('dev_id', $dev->id)->sum('time');
                        $assignment                    = $dev;
                    }
                }
                $plan->push(["title" => $job['title'] ,"dev_id" => $assignment->id,"dev" => $assignment, "time"    => round(($job['difficulty'] * $job['time'] / $assignment->skill_level),1) ]);
            }
            return $plan;
        }catch(Throwable $e){
            return 'Beklenmeyen Veri Tipi';
        }
        

    }
}
