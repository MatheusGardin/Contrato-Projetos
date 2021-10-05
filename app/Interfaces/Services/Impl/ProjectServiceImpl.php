<?php

namespace App\Interfaces\Services;

use App\Interfaces\Repositories\ProjectRepository;
use Illuminate\Database\Eloquent\Collection;
use App\Interfaces\Services\ProjectService;

class ProjectServiceImpl implements ProjectService {

	private $repository;

	public function __construct(ProjectRepository $repository) {
		$this->repository = $repository;
	}

	public function getAll(): Collection {
		return $this->repository->findAll();
	}

	public function getProject(string $id): object {
		return $this->repository->findById($id);
	}

	public function createProject(array $attributes): void {
		$this->repository->insert($attributes);
	}

	public function updateById(string $id, array $attributes): void {
		$this->repository->update($id, $attributes);
	}

	public function deleteById(string $id): void {
		$this->repository->destroy($id);
	}
}