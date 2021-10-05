<?php

namespace App\Interfaces\Services;

interface ContractService {

	public function createContract(array $attributes): void;

	public function updateById(string $id, array $attributes): void;

	public function deleteById(string $id): void;
}