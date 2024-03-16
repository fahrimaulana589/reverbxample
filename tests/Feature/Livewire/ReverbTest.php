<?php

namespace Tests\Feature\Livewire;

use App\Livewire\Reverb;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class ReverbTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(Reverb::class)
            ->assertStatus(200);
    }
}
