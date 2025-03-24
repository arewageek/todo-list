<?php

namespace Modules\Task\App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Modules\Task\App\Models\Task;

class TaskSearch extends Component
{


    public $search = '';
    public $tasks = [];

    public function mount(){
        $this->fetchAuthTasks();
    }

    public function updated($propertyName)
    {
        
        if ($propertyName === 'search') {
            dd('searching');
            $this->fetchAuthTasks(); 
        }
    }

    private function fetchAuthTasks()
    {
        if (Auth::check()) {
            $query = Task::where('user_id', Auth::id());

            if (!empty($this->search)) {
                $query->where(function ($q) {
                    $q->where('title', 'like', "%{$this->search}%")
                      ->orWhere('description', 'like', "%{$this->search}%");
                });
            }

            $this->tasks = $query->get();
        } else {
            $this->tasks = [];
        }
    }

    public function render()
    {
        return view('task::livewire.task-search', ['tasks'=> $this->tasks]);
    }
}
