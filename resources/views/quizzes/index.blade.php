<!-- resources/views/main/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Main Page</title>
    <style>
        .container {
        max-width: 800px;
        margin: 0 auto;
        }

        img{
            size:50px;
        }
        li{
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            overflow: hidden;
        }

        .quiz-item img {
        width: 50%;
        height: auto;
        }
    </style>
</head>
<body>
    <div class='container'>
    
    <h1>Quizzes</h1>
    <ul class="quiz-item">
        @foreach($quizzes as $quiz)
            <li>
                <strong>{{ $quiz->name }}</strong>
                <p>{{ $quiz->description }}</p>
                <img src="{{ URL('images/quiz.jpg') }}">
                <a href="{{ route('quizzes.show', ['quiz' => $quiz]) }}">Start Quiz</a>
            </li>
        @endforeach
    </ul>
    </div>

    <form method="POST" action="/quizzes/{{ $quiz->id ? $quiz->id : '' }}">
    @csrf
    @if($quiz->id)
        @method('PUT')
    @endif
    <input type="text" name="name" value="{{ old('name', $quiz->name) }}">
    <textarea name="description">{{ old('description', $quiz->description) }}</textarea>
    <button type="submit">Save</button>
</form>
</body>
</html>
