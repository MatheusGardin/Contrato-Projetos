<?php

namespace App\Interfaces\Services;

use App\Interfaces\Services\ProjectService;
use App\Interfaces\Repositories\ProjectRepository;

class ProjectServiceImpl implements ProjectService {

	private $repository;

	public function __construct(ProjectRepository $repository) {
		$this->repository = $repository;
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