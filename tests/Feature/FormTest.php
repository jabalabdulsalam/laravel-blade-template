<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FormTest extends TestCase
{
    public function testForm()
    {
        $this->view("form",["user"=>[
            "premium" => true,
            "name" => "Jabal",
            "admin" => true
        ]])
            ->assertSee("checked")
            ->assertSee("Jabal")
            ->assertDontSee("readonly");

        $this->view("form",["user"=>[
            "premium" => false,
            "name" => "Jabal",
            "admin" => false
        ]])
            ->assertDontSee("checked")
            ->assertSee("Jabal")
            ->assertSee("readonly");
    }

}
