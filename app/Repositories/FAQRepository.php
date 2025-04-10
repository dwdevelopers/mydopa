<?php
namespace App\Repositories;

use App\Models\FAQ;
use App\Repositories\FAQRepositoryInterface;

class FAQRepository implements FAQRepositoryInterface
{
    public function all()
    {
        return FAQ::orderByDesc('id')->get();
    }
    public function paginate($perPage = 10)
    {
        return FAQ::where('is_active', 1)->paginate($perPage);
    }
    public function find($id)
    {
        return FAQ::findOrFail($id);
    }

    public function create(array $data)
    {

        return FAQ::create($data);
    }

    public function update($id, array $data)
    {
        $faq = $this->find($id);
        $faq->update($data);
        return $faq;
    }

    public function delete($id)
    {
        return FAQ::destroy($id);
    }
}
