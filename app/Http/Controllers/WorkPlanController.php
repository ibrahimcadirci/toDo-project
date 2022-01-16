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
        $workProgram      = $workProgram->workProgram($jobs,$developers)->groupBy('dev_id') ;
        /* foreach($workProgram as $key =>  $row){
            echo $key . ' --> '. $row->sum('time') . '<br>';
        }*/

        return view('workplan',compact('workProgram'));
    }
}
