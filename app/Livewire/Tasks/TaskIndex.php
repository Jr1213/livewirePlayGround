<?php

namespace App\Livewire\Tasks;

use App\Models\Task;
use Livewire\Component;

class TaskIndex extends Component
{



    public $tasks = [];


    protected $rules = [
        'name' => ['required', 'string', 'max:3'],
    ];

    public $name = '';

    public function mount()
    {
        $this->tasks = Task::where('user_id', 1)->get();
    }

    public function store()
    {
        $this->validate();
        Task::create([
            'user_id' => 1,
            'name' => $this->name
        ]);
        $this->redirect(route('task.index'));
    }

    public function render()
    {
        return view('livewire.tasks.task-index')->title('your tasks');
    }
}
