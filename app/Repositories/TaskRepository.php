<?php

namespace App\Repositories;

use App\Interfaces\TaskRepositoryInterface;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskRepository implements TaskRepositoryInterface 
{
    public function getTasks(Request $request) 
    {
        $task = Task::query();
        if (!is_null($request->title)) {
            $task->orWhere('title','like','%'.$request->title.'%');
        }
        if (!is_null($request->status)) {
            $task->orWhere('status','like','%'.$request->status.'%');
        }
        if (!is_null($request->type)) {
            $task->orWhere('type','like','%'.$request->type.'%');
        }
        if (!is_null($request->user_id)) {
            $task->where('assignee',$request->user_id);
        }
        return $task->get();
    }

    public function getTaskById($id) 
    {
        return Task::findOrFail($id);
    }

    public function deleteTask($id) 
    {
        Task::destroy($id);
    }

    public function createTask(array $userDetails) 
    {
        return Task::create($userDetails);
    }

    public function updateTask($id, array $newDetails) 
    {
        return Task::whereId($id)->update($newDetails);
    }
}