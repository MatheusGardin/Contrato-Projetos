<?php

namespace App\Interfaces\Repositories\Impl;

use App\Interfaces\Repositories\ContractRepository;
use App\Models\Contract;
use Illuminate\Support\Collection;

class ContractRepositoryImpl implements ContractRepository {

	private $modelClass;

	public function __construct(Contract $modelClass) {
		$this->modelClass = $modelClass;
	}

	public function findById(string $id): \stdClass {
		return $this->modelClass->find($id);
	}

	public function findAll(): Collection {
		return $this->modelClass->all();
	}

	public function findByAttributes(array $attributes): Collection {
		return $this->modelClass->get($attributes);
	}

	public function insert(array $attributes): void {
		$this->modelClass->create($attributes);
	}

	public function update(string $id, array $attributes): void {
		$this->modelClass->find($id)->update($attributes);
	}

	public function delete(string $id): void {
		$this->modelClass->find($id)->delete();
	}
}