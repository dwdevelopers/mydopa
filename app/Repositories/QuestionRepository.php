<?php

namespace App\Repositories;

use App\Models\Question;
use App\Repositories\QuestionRepositoryInterface;

class QuestionRepository implements QuestionRepositoryInterface
{
    public function all()
    {
        return Question::get();
    }
    public function paginate($perPage = 10)
    {
        return Question::where('status', 1)->paginate($perPage);
    }
    public function find($id)
    {
        return Question::findOrFail($id);
    }

    public function create(array $data)
    {

        try{
        return Question::create($data);
    } catch (\Exception $e) {
        dd($e->getMessage());
    }
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
