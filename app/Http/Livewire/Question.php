<?php

namespace App\Http\Livewire;

use App\Models\Answer;
use App\Models\Question as QuestionModel;
use Livewire\Component;

class Question extends Component
{
    public $answerNum = 1;
    public $questionNum = 1;

    public function answer()
    {
        
        if ($this->questionNum < $this->getQuestionsCount()) {
            $this->questionNum += 1;
        } else {
            view('livewire.result-page', [
                'answerNum' => $this->answerNum
            ]);
        }
        
    }

    public function getQuestionsCount()
    {
        return QuestionModel::count();
    }

    public function render()
    {
        return view('livewire.question', [
            'question' => QuestionModel::find($this->questionNum),
            'answers' => Answer::where('question_id', '=', $this->questionNum)->get(),
        ]);
    }
}
