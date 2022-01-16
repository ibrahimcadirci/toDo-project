<?php
namespace App\Services;

class BusinessDepartment implements WorkListInterface {
    protected $baseUrl          = "http://www.mocky.io/v2/5d47f24c330000623fa3ebfa";
    public function getData(){
        return "İşler";
    }

}