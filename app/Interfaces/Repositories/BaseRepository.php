<?php

namespace App\Interfaces\Repositories;

use Illuminate\Support\Collection;

interface BaseRepository {

	public function findById(string $id): \stdClass;

	public function findAll(): Collection;

	public function findByAttributes(array $attributes): Collection;

	public function insert(array $attributes): void;

	public function update(string $id, array $attributes): void;

	public function delete(string $id): void;
}