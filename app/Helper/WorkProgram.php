<?php
namespace App\Helper;

use Exception;
use Throwable;

class WorkProgram{
    protected $averageTime;
    public function workProgram($jobs,$developers){
        try{
            $plan           = collect();
            $this->averageTime    = $this->averageFinish($jobs,$developers);
            foreach($jobs as $job){ 
                $jobDevelopers          = $developers->where('skill_level','>=',$job['difficulty'])->sortBy('skill_level');
                $assignment             = null;
                $totalTime              = null;
                foreach($jobDevelopers as $dev){
                    if($this->averageTime > $plan->where('dev_id', $dev->id)->sum('time')){
                        if(!is_null($totalTime) ){
                            if($plan->where('dev_id', $dev->id)->sum('time') < $totalTime){
                                $totalTime              = $plan->where('dev_id', $dev->id)->sum('time');
                                $assignment             = $dev;
                            }
                        }else{
                            $totalTime                      = $plan->where('dev_id', $dev->id)->sum('time');
                            $assignment                    = $dev;
                        }
                    }
                }
                if(!isset($assignment->id)){
                    $jobDevelopers          = $developers->where('skill_level','<',$job['difficulty'])->sortByDESC('skill_level');
                    foreach($jobDevelopers as $dev){
                        if($this->averageTime > $plan->where('dev_id', $dev->id)->sum('time')){
                            if(!is_null($totalTime) ){
                                if($plan->where('dev_id', $dev->id)->sum('time') < $totalTime){
                                    $totalTime              = $plan->where('dev_id', $dev->id)->sum('time');
                                    $assignment             = $dev;
                                }
                            }else{
                                $totalTime                      = $plan->where('dev_id', $dev->id)->sum('time');
                                $assignment                    = $dev;
                            }
                        }
                    }
                }
                $week           = $plan->where('dev_id', $assignment->id)->sum('time') > 1 ? (ceil($plan->where('dev_id', $assignment->id)->sum('time') / 45)) : 1; 
                if( $plan->where('dev_id', $dev->id)->sum('time')){

                }
                $plan->push(["title" => $job['title'] ,"dev_id" => $assignment->id,"dev" => $assignment, "time"    => round(($job['difficulty'] * $job['time'] / $assignment->skill_level),1), "week" => $week ]);

            }
            return $plan;
        }catch(Throwable $e){
            return 'Beklenmeyen Veri Tipi';
        }
    }

    public function averageFinish($jobs,$developers){
        $everageTime      = 0;
        foreach($jobs as $row){
            $everageTime      += $row->difficulty * $row->time;
        }

        return $everageTime / $developers->sum('skill_level');
    }

    public function getaverage(){
        return $this->averageTime;
    }
}
