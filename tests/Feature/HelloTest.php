<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HelloTest extends TestCase
{
    public function testHello()
    {
        $this->get("/hello")
            ->assertSeeText("Jabal");
    }

    public function testWorld()
    {
        $this->get("/world")
                ->assertSeeText("Abdul");
    }

    public function testHelloView()
    {
        $this->view("hello", ["name" => "Jabal"])
            ->assertSeeText("Jabal");
    }

    public function testWorldView()
    {
        $this->view("hello.world", ["name" => "Abdul"])
            ->assertSeeText("Abdul");
    }


}
