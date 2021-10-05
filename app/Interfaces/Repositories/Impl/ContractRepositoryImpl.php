<?php

namespace App\Interfaces\Repositories\Impl;

use App\Interfaces\Repositories\ContractRepository;
use Illuminate\Support\Collection;
use App\Models\Contract;

class ContractRepositoryImpl implements ContractRepository {

	private $modelClass;

	public function __construct(Contract $modelClass) {
		$this->modelClass = $modelClass;
	}

	public function findById(string $id): object {
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

	public function destroy(string $id): void {
		$this->modelClass->find($id)->delete();
	}
}