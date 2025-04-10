<?php

namespace App\Services;

use App\Repositories\QuestionRepositoryInterface;

class QuestionService
{
    protected $questionRepository;

    public function __construct(QuestionRepositoryInterface $questionRepository)
    {
        $this->questionRepository = $questionRepository;
    }

    public function getAllQuestions()
    {
        return $this->questionRepository->all();
    }
    public function paginateQuestions($perPage = 10)
    {
        return $this->questionRepository->paginate($perPage);
    }
    public function getQuestionById($id)
    {
        return $this->questionRepository->find($id);
    }

    public function createQuestion(array $data)
    {
        return $this->questionRepository->create($data);
    }

    public function updateQuestion($id, array $data)
    {
        return $this->questionRepository->update($id, $data);
    }

    public function deleteQuestion($id)
    {
        return $this->questionRepository->delete($id);
    }
}
