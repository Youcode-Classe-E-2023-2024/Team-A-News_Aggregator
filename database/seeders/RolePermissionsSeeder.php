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
        'favorite-list',
        'favorite-liking',
        'comment-create',
        'comment-edit',
        'comment-delete',
        'role-list',
        'role-create',
        'role-edit',
        'role-delete',
        'news-list',
        'news-create',
        'news-edit',
        'news-delete',
        'category-list',
        'category-create',
        'category-delete',
        'update-user-role',
        'delete-user',
        'view-dashboard',
        'feed-create',
        'feed-delete'
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
        Role::findByName('Member')->givePermissionTo(['favorite-list', 'favorite-liking', 'comment-create', 'comment-edit', 'comment-delete']);
    }
}
