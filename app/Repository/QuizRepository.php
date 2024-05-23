<?php

namespace App\Repository;

use App\Models\Quiz;
use Illuminate\Database\Eloquent\Collection;

class QuizRepository extends \App\Interfaces\Repository\QuizRepository {

    public function getAll(): Collection
    {
        return Quiz::all();
    }

    public function getById($id): Quiz
    {
        // TODO: Implement getById() method.
        return Quiz::find($id);
    }

    public function create(array $details) : Quiz
    {
        return Quiz::create($details);
    }

    public function update(string $id, array $updated)
    {
        Quiz::query()
            ->where('id', $id)
            ->update($updated);
    }

    public function delete(string $id)
    {
        Quiz::query()
            ->where('id', $id)
            ->delete();
    }
}
