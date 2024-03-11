<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IncludeTest extends TestCase
{
    public function testInclude()
    {
        $this->view("include",[])
            ->assertSeeText("Moorden Creative")
            ->assertSeeText("Selamat Datang di Website Kami")
            ->assertSeeText("Selamat Datang di Web");

        $this->view("include",["title" => "Jabal"])
            ->assertSeeText("Jabal")
            ->assertSeeText("Selamat Datang di Website Kami")
            ->assertSeeText("Selamat Datang di Web");
    }

}
