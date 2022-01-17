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
        
        // Yanlış bir veri tipi geldiğinde alacağımız hata
        $this->assertEquals("Beklenmeyen Veri Tipi",$workProgram->workProgram([
            ["title"    => "Test job 1", "difficulty"   => 3, "time"    => "abc"]
        ],$developers));
    }
}

