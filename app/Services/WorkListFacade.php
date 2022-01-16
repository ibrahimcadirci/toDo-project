<?php
namespace App\Services;

use Illuminate\Support\Facades\Facade;

class WorkListFacade extends Facade {
    protected static function getFacadeAccessor(){
        return 'worklist';
    }
}