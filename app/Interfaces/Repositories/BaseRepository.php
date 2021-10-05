<?php

namespace App\Interfaces\Repositories;

use Illuminate\Support\Collection;

interface BaseRepository {

	public function findAll(): Collection;

	public function findById(string $id): object;

	public function findByAttributes(array $attributes): Collection;

	public function update(string $id, array $attributes): void;

	public function insert(array $attributes): void;

	public function destroy(string $id): void;
}