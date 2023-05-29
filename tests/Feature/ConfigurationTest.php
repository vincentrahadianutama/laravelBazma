<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\support\Facades\Config;

class ConfigurationTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        //helper
        $seni = config("mapel.mataPelajaran_x.x.seni");
        $webDev = config("mapel.mataPelajaran_xi.xi.webDev");
        //facades
        //import ctrl+alt+i
        $seniConfig= config::get("mapel.mataPelajaran_x.x.seni");
        $webDev=config::get(
            //namafile.namaarray.nestedarray.childnestedarray
            "mapel.mataPelajaran_xi.xi.webDev"
        );

        self::assertEquals($seni, "kelasX");
        self::assertEquals($webDev, "kelasXI");
        self::assertEquals($seniConfig,$webDev);
    }
}
