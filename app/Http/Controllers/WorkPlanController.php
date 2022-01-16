<?php

namespace App\Http\Controllers;

use App\Models\Works\Work;
use Illuminate\Http\Request;
use App\Helper\WorkProgram;
use App\Models\User;

class WorkPlanController extends Controller
{
    public function index(){
        $workProgram    = new WorkProgram();
        $developers     = User::get();
        $jobs           = Work::get();
        $totalTime      = 0;
  
        $workProgramData      = $workProgram->workProgram($jobs,$developers)->groupBy('dev_id') ;
        $averageFinish      = $workProgram->getaverage() ;

        return view('workplan',compact('workProgramData','averageFinish'));
    }
}
