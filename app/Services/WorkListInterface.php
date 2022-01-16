<?php
namespace App\Services;


abstract class WorkListInterface {
    abstract  public function getData();

    public function apiRequest($baseUrl){
        $works          = file_get_contents($this->baseUrl);
        return json_decode($works);
    }

    public function dataFormat(){
        
    }
}