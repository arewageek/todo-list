<?php

namespace Modules\Task\App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Modules\Task\App\Models\Task;

class TaskSearch extends Component
{


    public $search = '';
    public $tasks = [];
    public $showSearchModal = false;

    public function openModal()
    {
        $this->showSearchModal = true;
        $this->fetchAuthTasks(); // Load tasks immediately when opening modal
    }

    // Hide the search modal
    public function closeModal()
    {
        $this->showSearchModal = false;
        $this->search = ''; // Clear search input
        $this->tasks = []; // Clear search results
    }


    public function fetchAuthTasks()
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
