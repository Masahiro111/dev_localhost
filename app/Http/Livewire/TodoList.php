<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TodoList extends Component
{
    public $tasks = [];
    public $newTask = '';

    public function render()
    {
        return view('livewire.todo-list');
    }

    public function addTask()
    {
        array_push($this->tasks, $this->newTask);
        $this->newTask = '';
    }

    public function deleteTask($index)
    {
        unset($this->tasks[$index]);
        $this->tasks = array_values($this->tasks);
    }
}
