<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Department;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departments = [
            [
                'ID' => 1,
                'NAME' => 'Accounting',
            ],
            [
                'ID' => 2,
                'NAME' => 'Business Development',
            ],
            [
                'ID' => 3,
                'NAME' => 'Engineering',
            ],
            [
                'ID' => 4,
                'NAME' => 'Human Resources',
            ],
            [
                'ID' => 5,
                'NAME' => 'Legal',
            ],
            [
                'ID' => 6,
                'NAME' => 'Marketing',
            ],
            [
                'ID' => 7,
                'NAME' => 'Product Management',
            ],
            [
                'ID' => 8,
                'NAME' => 'Sales',
            ],
            [
                'ID' => 9,
                'NAME' => 'Training',
            ],
        ];

        // Insert data ke tabel employees
        foreach ($departments as $department) {
            Department::create($department);
        }
    }
}
