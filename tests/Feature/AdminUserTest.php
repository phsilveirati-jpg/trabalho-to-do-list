<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminUserTest extends TestCase
{
    use RefreshDatabase;

    public function test_pending_user_cannot_access_tasks(): void
    {
        $user = User::factory()->create(['status' => 'pending']);

        $response = $this->actingAs($user)->get('/tasks');

        $response->assertRedirect(route('pending'));
    }

    public function test_active_user_can_access_tasks(): void
    {
        $user = User::factory()->create(['status' => 'active']);

        $response = $this->actingAs($user)->get('/tasks');

        $response->assertOk();
        $response->assertSee('Minhas tarefas');
    }

    public function test_admin_can_activate_user(): void
    {
        $admin = User::factory()->create(['is_admin' => true, 'status' => 'active']);
        $pendingUser = User::factory()->create(['status' => 'pending']);

        $response = $this->actingAs($admin)->patch(route('admin.users.activate', $pendingUser));

        $response->assertRedirect(route('admin.users.index'));
        $this->assertSame('active', $pendingUser->fresh()->status);
    }
}
