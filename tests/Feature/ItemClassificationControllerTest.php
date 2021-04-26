<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ItemClassificationControllerTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->user = \App\Models\User::factory()->create();
    }

    /**
     * @test
     * @covers \App\Http\Controllers\ItemClassification::destroy
     */
    public function destroy()
    {
        $classification = \App\Models\ItemClassification::factory()->create();

        $this->actingAs($this->user)
            ->delete(route('item-classification.destroy', $classification));

        $this->assertSoftDeleted($classification);
    }

    /**
     * @test
     * @covers \App\Http\Controllers\ItemClassification::restore
     */
    public function restore()
    {
        $gender = \App\Models\Gender::factory()->create();

        $classification = \App\Models\ItemClassification::factory()->create(['gender_id' => $gender->id]);

        $classification->delete();

        $this->actingAs($this->user)
            ->patch(route('item-classification.restore', $gender->id));

        $this->assertDatabaseHas('item_classifications', [
            'id'         => $classification->id,
            'deleted_at' => null
        ]);
    }
}
