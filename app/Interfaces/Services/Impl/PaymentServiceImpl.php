<?php

namespace App\Interfaces\Services;

use App\Interfaces\Services\PaymentService;
use App\Interfaces\Repositories\PaymentRepository;

class PaymentServiceImpl implements PaymentService {

	private $repository;

	public function __construct(PaymentRepository $repository) {
		$this->repository = $repository;
	}

	public function createPayment(array $attributes): void {
		$this->repository->insert($attributes);
	}

	public function updateById(string $id, array $attributes): void {
		$this->repository->update($id, $attributes);
	}

	public function deleteById(string $id): void {
		$this->repository->destroy($id);
	}
}