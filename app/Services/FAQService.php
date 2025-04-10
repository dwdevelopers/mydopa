<?php
namespace App\Services;

use App\Repositories\FAQRepositoryInterface;

class FAQService
{
    protected $faqRepository;

    public function __construct(FAQRepositoryInterface $faqRepository)
    {
        $this->faqRepository = $faqRepository;
    }
    public function paginateFaqs($perPage = 10)
    {
        return $this->faqRepository->paginate($perPage);
    }
    public function getAllFaqs()
    {
        return $this->faqRepository->all();
    }

    public function getFaqById($id)
    {
        return $this->faqRepository->find($id);
    }

    public function createFaq(array $data)
    {
        return $this->faqRepository->create($data);
    }

    public function updateFaq($id, array $data)
    {
        return $this->faqRepository->update($id, $data);
    }

    public function deleteFaq($id)
    {
        return $this->faqRepository->delete($id);
    }
}
