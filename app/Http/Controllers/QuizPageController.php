<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\Question;

class QuizPageController extends Controller
{
    //
    public function show(Quiz $quiz)
    {
        $questions = $quiz->questions;

        return view('quizzes.show', compact('quiz', 'questions'));
    }

    public function submitAnswer(Request $request, Quiz $quiz, Question $question)
    {
        // Validate the answer and update user progress
        // Add your validation logic here

        return response()->json(['correct' => true]); // Example response, adjust accordingly
    }
}
