<?php

namespace App\Interfaces\Services;

use App\Interfaces\Services\ClientService;
use App\Interfaces\Repositories\ClientRepository;

class ClientServiceImpl implements ClientService {

	private $repository;

	public function __construct(ClientRepository $repository) {
		$this->repository = $repository;
	}

	public function createClient(array $attributes): void {
		$this->repository->insert($attributes);
	}

	public function updateById(string $id, array $attributes): void {
		$this->repository->update($id, $attributes);
	}

	public function deleteById(string $id): void {
		$this->repository->destroy($id);
	}
}