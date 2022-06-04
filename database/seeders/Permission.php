<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission as ModelsPermission;

class Permission extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $permissions = [
      
        'المستخدمين',
        'قائمة المستخدمين',
        'صلاحيات المستخدمين',
        'الاعدادات',
        'المنتجات',
        'الاقسام',
        'اضافة مستخدم',
        'تعديل مستخدم',
        'حذف مستخدم',

        'عرض صلاحية',
        'اضافة صلاحية',
        'تعديل صلاحية',
        'حذف صلاحية',
        'addproduct',
        'تعديل منتج',
        'deleteproduct',
        'اضافة قسم',
        'تعديل قسم',
        'حذف قسم',
      
        ];

        foreach ($permissions as $permission) {
             ModelsPermission::create(['name' => $permission]);
        }
    }
}
