<?php

namespace App\Interfaces;

use Illuminate\Http\Request;

interface TaskRepositoryInterface 
{
    public function getTasks(Request $request);
    public function getTaskById($id);
    public function deleteTask($id);
    public function createTask(array $taskDetails);
    public function updateTask($id, array $newDetails);
}