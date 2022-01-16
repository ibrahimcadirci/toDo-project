<?php
namespace App\Services;

use Exception;

class BusinessDepartment extends WorkList implements  WorkListInterface {
    protected $baseUrl          = "http://www.mocky.io/v2/5d47f235330000623fa3ebf7";
    protected $works;
    public function getData(){
        try
        {
            $works          = $this->apiRequest($this->baseUrl);
            $this->works    = collect();
            foreach($works as  $row){    
                $row        = (Array) $row;
                $key        = array_key_first($row);
                $this->works->push(["title" => $key, "difficulty" => $row[$key]->level, "time"   => $row[$key]->estimated_duration]);
            }
            return $this->works;
        }catch(Exception $e){
            return "Veri bulunamadı. Lütfen api servislerini kontrol edin. Error : ". $e->getMessage();
        }
    }

}