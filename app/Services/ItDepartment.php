<?php
namespace App\Services;

use Exception;

class ItDepartment extends WorkListInterface {
    protected $baseUrl          = "http://www.mocky.io/v2/5d47f235330000623fa3ebf7";
    
    public function getData(){
        try
        {
            return $this->apiRequest($this->baseUrl);
        }catch(Exception $e){
            return "Veri bulunamadı. Lütfen api servislerini kontrol edin. Error : ". $e->getMessage();
        }
    }

}