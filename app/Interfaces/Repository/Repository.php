<?php

namespace App\Interfaces\Repository;

interface Repository {
    public function getAll();
    public function getById(string $id);
    public function create(array $details);
    public function update(string $id, array $updated);
    public function delete(string $id);
}
