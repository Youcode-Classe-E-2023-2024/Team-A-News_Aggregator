<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionsSeeder extends Seeder
{
    private $roles = [
        'Admin',
        'Member'
    ];

    private $permissions = [
        'view-dashboard',
        'role-list',
        'role-create',
        'role-edit',
        'role-delete',
        'feed-create',
        'feed-delete',
        'update-user-role',
        'delete-user',
        'category-list',
        'category-create',
        'category-delete',
        'news-list',
        'news-delete',
        'favorite-list',
        'favorite-liking',
        'comment-create',
        'comment-edit',
        'comment-delete',
    ];

    public function run(): void
    {
        foreach ($this->permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        foreach ($this->roles as $role) {
            Role::create(['name' => $role]);
        }

        Role::findByName('Admin')->givePermissionTo($this->permissions);
        Role::findByName('Member')->givePermissionTo(['favorite-list', 'favorite-like', 'comment-create', 'comment-edit', 'comment-delete']);
    }
}
