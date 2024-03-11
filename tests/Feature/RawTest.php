<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RawTest extends TestCase
{
    public function testRawPHP()
    {
        $this->view("raw", [])
            ->assertSeeText("Jabal")
            ->assertSeeText("Nagan Raya");
    }

}
