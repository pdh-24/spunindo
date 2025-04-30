<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $employees = [
            [
                'FIRSTNAME' => 'Marcel',
                'LASTNAME' => 'Sturm',
                'GENDER' => 'Male',
                'ADDRESS' => 'Room 198',
                'DOB' => '2000-02-19',
                'DEPT_ID' => 4,
                'STATUS' => 'emp',
            ],
            [
                'FIRSTNAME' => 'Conney',
                'LASTNAME' => 'Matsyik',
                'GENDER' => 'Male',
                'ADDRESS' => 'PO Box 75969',
                'DOB' => '1992-08-02',
                'DEPT_ID' => 8,
                'STATUS' => 'cont',
            ],
            [
                'FIRSTNAME' => 'Kelci',
                'LASTNAME' => 'Martinson',
                'GENDER' => 'Female',
                'ADDRESS' => 'Suite 32',
                'DOB' => '1995-05-22',
                'DEPT_ID' => 8,
                'STATUS' => 'cont',
            ],
            [
                'FIRSTNAME' => 'Rodina',
                'LASTNAME' => 'Stanistreet',
                'GENDER' => 'Male',
                'ADDRESS' => 'PO BOX 98249',
                'DOB' => '1990-04-06',
                'DEPT_ID' => 5,
                'STATUS' => 'not_act', 
            ],
            [
                'FIRSTNAME' => 'Aloisia',
                'LASTNAME' => 'Kedie',
                'GENDER' => 'Female',
                'ADDRESS' => 'PO BOX 25525',
                'DOB' => '1993-05-14',
                'DEPT_ID' => 4,
                'STATUS' => 'cont', 
            ],
            [
                'FIRSTNAME' => 'Thomasa',
                'LASTNAME' => 'Lutz',
                'GENDER' => 'Female',
                'ADDRESS' => 'Room 1423',
                'DOB' => '1993-09-14',
                'DEPT_ID' => 2,
                'STATUS' => 'emp', 
            ],
            [
                'FIRSTNAME' => 'Carlen',
                'LASTNAME' => 'Pinfold',
                'GENDER' => 'Female',
                'ADDRESS' => 'Room 1988',
                'DOB' => '1993-02-22',
                'DEPT_ID' => 2,
                'STATUS' => 'emp', 
            ],
            [
                'FIRSTNAME' => 'Andonis',
                'LASTNAME' => 'Cellone',
                'GENDER' => 'Male',
                'ADDRESS' => 'Room 138',
                'DOB' => '1994-01-26',
                'DEPT_ID' => 8,
                'STATUS' => 'cont', 
            ],
            [
                'FIRSTNAME' => 'Tonie',
                'LASTNAME' => 'Hurling',
                'GENDER' => 'Female',
                'ADDRESS' => '1st Floor',
                'DOB' => '1993-09-25',
                'DEPT_ID' => 7,
                'STATUS' => 'emp', 
            ],
            [
                'FIRSTNAME' => 'Ashia',
                'LASTNAME' => 'Danser',
                'GENDER' => 'Female',
                'ADDRESS' => 'Suite 74',
                'DOB' => '1993-05-31',
                'DEPT_ID' => 3,
                'STATUS' => 'cont', 
            ],
            [
                'FIRSTNAME' => 'Torrey',
                'LASTNAME' => 'Saltern',
                'GENDER' => 'Male',
                'ADDRESS' => '9th Floor',
                'DOB' => '1993-09-01',
                'DEPT_ID' => 9,
                'STATUS' => 'emp', 
            ],
            [
                'FIRSTNAME' => 'Aggi',
                'LASTNAME' => 'O\'meara',
                'GENDER' => 'Female',
                'ADDRESS' => 'Suite 62',
                'DOB' => '1993-12-19',
                'DEPT_ID' => 5,
                'STATUS' => 'cont', 
            ],
            [
                'FIRSTNAME' => 'Leupold',
                'LASTNAME' => 'Somerton',
                'GENDER' => 'Male',
                'ADDRESS' => 'PO BOX 29254',
                'DOB' => '1990-06-08',
                'DEPT_ID' => 6,
                'STATUS' => 'cont', 
            ],
            [
                'FIRSTNAME' => 'Donall',
                'LASTNAME' => 'Pavelin',
                'GENDER' => 'Male',
                'ADDRESS' => 'Apt 1864',
                'DOB' => '1993-06-10',
                'DEPT_ID' => 8,
                'STATUS' => 'emp', 
            ],
            [
                'FIRSTNAME' => 'Britt',
                'LASTNAME' => 'Ault',
                'GENDER' => 'Male',
                'ADDRESS' => 'Room 609',
                'DOB' => '1993-08-15',
                'DEPT_ID' => 9,
                'STATUS' => 'cont', 
            ],
        ];

        // Insert data ke tabel employees
        foreach ($employees as $employee) {
            Employee::create($employee);
        }
    }
}
