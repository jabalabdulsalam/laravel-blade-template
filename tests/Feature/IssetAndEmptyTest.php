<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IssetAndEmptyTest extends TestCase
{
    public function testIssetAndEmpty()
    {
        $this->view("isset-empty",[])
            ->assertDontSeeText("Hello")
            ->assertSeeText("I don't have any hobbies!", false);

        $this->view("isset-empty", ["name" => "Jabal"])
            ->assertSeeText("Hello my name is Jabal")
            ->assertSeeText("I don't have any hobbies!", false);

        $this->view("isset-empty", ["name" => "Jabal", "hobbies" => ["Coding"]])
            ->assertSeeText("Hello my name is Jabal")
            ->assertDontSeeText("I don't have any hobbies!", false);
    }
}
