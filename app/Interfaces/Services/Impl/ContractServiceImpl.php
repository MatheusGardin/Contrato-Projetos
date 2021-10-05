<?php

namespace App\Interfaces\Services;

use App\Interfaces\Services\ContractService;
use App\Interfaces\Repositories\ContractRepository;

class ContractServiceImpl implements ContractService {

	private $repository;

	public function __construct(ContractRepository $repository) {
		$this->repository = $repository;
	}

	public function createContract(array $attributes): void {
		$this->repository->insert($attributes);
	}

	public function updateById(string $id, array $attributes): void {
		$this->repository->update($id, $attributes);
	}

	public function deleteById(string $id): void {
		$this->repository->destroy($id);
	}
}