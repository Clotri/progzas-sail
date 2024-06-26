<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subjects = [
            'Matematyka', 'Język polski', 'Historia', 'W-f', 'Geografia', 'Język angielski',
            'Biologia', 'Chemia', 'Informatyka', 'Język niemiecki',
        ];

        foreach ($subjects as $subject) {
            Subject::create([
                'name' => $subject
            ]);
        }
    }
}
