<?php

namespace App\Repositories;

use App\Models\Question;
use App\Repositories\QuestionRepositoryInterface;

class QuestionRepository implements QuestionRepositoryInterface
{
    public function all()
    {
        return Question::all();
    }

    public function find($id)
    {
        return Question::findOrFail($id);
    }

    public function create(array $data)
    {
        return Question::create($data);
    }

    public function update($id, array $data)
    {
        $question = $this->find($id);
        $question->update($data);
        return $question;
    }

    public function delete($id)
    {
        return Question::destroy($id);
    }
}
