<?php
namespace App\Services;


class WorkList{
    protected static $apiServices     = [
        ItDepartment::class,
        BusinessDepartment::class
    ];

    public static function getApiServices(){
        return self::$apiServices;
    }

    public function apiRequest($baseUrl){
        $works          = file_get_contents($baseUrl);
        return json_decode($works);
    }

}