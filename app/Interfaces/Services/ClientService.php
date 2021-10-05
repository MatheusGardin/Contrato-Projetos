<?php

namespace App\Interfaces\Services;

interface ClientService {

	public function createClient(array $attributes): void;

	public function updateById(string $id, array $attributes): void;

	public function deleteById(string $id): void;
}