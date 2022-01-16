<?php

namespace Tests\Feature;

use App\Helper\WorkProgram;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WorkProgramTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $workProgram    = new WorkProgram();
        $developers     = User::get();
        $control        = json_encode($workProgram->workProgram([
            ["title"    => "Test job 1", "diffuculty"   => 3, "time"    => 6]
        ],$developers));
        // Algoritamamızın istediğimiz gibi çalışıp çalışmadığını kontrol ediyoruz.
        $this->assertEquals('[{"title":"Test job 1","dev_id":3,"time":6}]',$control);

        // Yanlış bir veri tipi geldiğinde alacağımız hata
        $this->assertEquals("Beklenmeyen Veri Tipi",$workProgram->workProgram([
            ["title"    => "Test job 1", "diffuculty"   => 3, "time"    => "abc"]
        ],$developers));
    }
}

