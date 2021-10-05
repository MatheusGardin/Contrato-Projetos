<?php

namespace App\Interfaces\Services;

interface PaymentService {

	public function createPayment(array $attributes): void;

	public function updateById(string $id, array $attributes): void;

	public function deleteById(string $id): void;
}