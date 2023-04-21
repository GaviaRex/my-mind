<?php

namespace App\Http\Livewire;

use App\Models\Answer;
use App\Models\Question as QuestionModel;
use Livewire\Component;

class Question extends Component
{
    public $userAnswers = [1 => 0, 2 => 0, 3 => 0, 4 => 0];
    public $questionNum = 1; // quiz starts from 1

    public function answer(int $answerNum)
    {
        $this->questionNum += 1;
        $this->userAnswers[$answerNum] ++;
    }

    public function getAnswerTypes()
    {
        return Answer::get()->unique('type')->pluck('type');
    }

    public function getQuestionsCount()
    {
        return QuestionModel::count();
    }

    public function render()
    {
        if($this->questionNum < $this->getQuestionsCount()) {
            return view('livewire.question', [
                'question' => QuestionModel::find($this->questionNum),
                'answers' => Answer::where('question_id', '=', $this->questionNum)->get(),
            ]);
        }
        else {
            return view('livewire.result-page', [
                'userAnswers' => $this->userAnswers
            ]);
        }
    }
}
