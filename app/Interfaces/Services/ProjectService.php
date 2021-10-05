<?php

namespace App\Interfaces\Services;

interface ProjectService {

	public function createProject(array $attributes): void;

	public function updateById(string $id, array $attributes): void;

	public function deleteById(string $id): void;
}