<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EachTest extends TestCase
{
    public function testEach()
    {
        $this->view("each", ["users" =>[

            [
                "name" => "Jabal",
                "hobbies" => ["Coding", "Gaming"]
            ],
            [
                "name" => "Abdul",
                "hobbies" => ["Coding", "Gaming"]
            ],
        ]
        ])
            ->assertSeeInOrder([
                ".red",
                "Jabal",
                "Coding",
                "Gaming",
                "Abdul",
                "Coding",
                "Gaming"]);
    }
}
