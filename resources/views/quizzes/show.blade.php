<h2>{{ $quiz->name }}</h2>
<p>{{ $quiz->description }}</p>

<div id="quiz-container">
    <form id="quiz-form">
        @csrf
        @foreach ($questions as $question)
            <div class="question">
                <h3>{{ $question->text }}</h3>
                
                <ul>
                    @foreach ($question->options as $option)
                        <li>
                            <label>
                                <input type="radio" name="answers[{{ $question->id }}]" value="{{ $option->id }}">
                                {{ $option->text }}
                            </label>
                        </li>
                    @endforeach
                </ul>
                
                <div class="answer-feedback" style="display: none;"></div>
            </div>
        @endforeach
        <button type="button" id="start-quiz">Start Quiz</button>
        <button type="submit" id="submit-quiz" style="display: none;">Submit</button>
    </form>
</div>