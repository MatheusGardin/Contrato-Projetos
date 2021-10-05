<?php

namespace App\Http\Controllers;

use App\Interfaces\Services\ProjectService;
use App\Http\Requests\ProjectRequest;
use App\Models\Project;

class ProjectController extends Controller {

    private $service;

    public function __construct(ProjectService $service) {
        $this->service = $service;
    }

    public function index() {
        return $this->service->getAll();
    }

    public function store(ProjectRequest $request) {
        $this->service->createProject($request->validate());
    }

    public function show($id) {
        return $this->service->getProject($id);
    }

    public function update(ProjectRequest $request, $id) {
        $this->service->updateById($id, $request->validate());
    }

    public function destroy($id) {
        $this->service->deleteById($id);
    }
}