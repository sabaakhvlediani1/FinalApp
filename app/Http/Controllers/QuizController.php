<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;

class QuizController extends Controller
{
    public function index()
    {
        $quizzes = Quiz::all();

        return view('quizzes.index', compact('quizzes'));
    }
    public function edit($id = null)
    {
        if ($id) {
            $quiz = Quiz::findOrFail($id);
        } else {
            $quiz = new Quiz();
        }
        return view('quizzes.edit', compact('quiz'));
    }
    public function show(Quiz $quiz)
    {
        return view('quizzes.show', ['quiz' => $quiz]);
    }

    public function store(Request $request, $id = null)
    {
        $data = $request->validate([
            'name' => 'required',
            'description' => 'required',

        ]);

        if ($id) {

            $quiz = Quiz::findOrFail($id);
            $quiz->update($data);
        } else {
            Quiz::create($data);
        }

        return redirect('/quizzes');
    }
}
