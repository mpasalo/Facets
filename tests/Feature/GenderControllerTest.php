<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class GenderControllerTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->user = \App\Models\User::factory()->create();
    }

    /**
     * @test
     * @covers \App\Http\Controllers\GenderController::destroy
     */
    public function destroy()
    {
        $gender = \App\Models\Gender::factory()->create();

        $this->actingAs($this->user)
            ->delete(route('gender.destroy', $gender));

        $this->assertSoftDeleted($gender);
    }

    /**
     * @test
     * @covers \App\Http\Controllers\GenderController::restore
     */
    public function restore()
    {
        $gender = \App\Models\Gender::factory()->create();

        $gender->delete();

        $this->actingAs($this->user)
            ->patch(route('gender.restore'));

        $this->assertDatabaseHas('genders', [
            'id'         => $gender->id,
            'deleted_at' => null
        ]);
    }
}
