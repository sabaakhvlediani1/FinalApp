<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Quiz;
use App\Models\Question;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Quiz::create([
            'name' => 'Quiz 1',
            'description' => 'Description for Quiz 1',
            'image' => 'quiz.jpg',
        ]);

        Quiz::create([
            'name' => 'Quiz 2',
            'description' => 'Description for Quiz 2',
            'image' => 'quiz.jpg',
        ]);

        Quiz::create([
            'name' => 'Quiz 3',
            'description' => 'Description for Quiz 3',
            'image' => 'quiz.jpg',
        ]);

        Quiz::create([
            'name' => 'Quiz 4',
            'description' => 'Description for Quiz 4',
            'image' => 'quiz.jpg',
        ]);

        // Associate questions with the quiz
        // Question::create([
        //     'quiz_id' => $quiz->id,
        //     'text' => 'Question 1',
        // ]);
    }
}
