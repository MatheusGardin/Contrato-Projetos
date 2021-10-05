<?php

namespace App\Interfaces\Services;

use Illuminate\Database\Eloquent\Collection;

interface ProjectService {

	public function getAll(): Collection;

	public function deleteById(string $id): void;

	public function getProject(string $id): object;

	public function createProject(array $attributes): void;

	public function updateById(string $id, array $attributes): void;
}