<?php

namespace Modules\Task\App\Livewire\Modals;

use Livewire\Component;
use Modules\Task\App\Livewire\TaskList;
use Modules\Task\App\Models\Task;

class EditTask extends Component
{
    public $taskId;
    public $title;
    public $description;
    public $showModal = false;

    protected $rules = [
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
    ];

    public function render()
    {
        return view('task::livewire.modals.edit-task');
    }
    
    protected $listeners = ['loadTask'];
    
    public function loadTask($taskId)
    {
        $task = Task::findOrFail($taskId);
        $this->taskId = $task->id;
        $this->title = $task->title;
        $this->description = $task->description;
        $this->showModal = true;
    }

    public function updateTask()
    {
        $this->validate();

        $task = Task::findOrFail($this->taskId);
        $task->update([
            'title' => $this->title,
            'description' => $this->description,
        ]);
        
        $this->dispatch('taskUpdated');
        $this->closeModal();
    }

    public function closeModal()
    {
        $this->reset(['taskId', 'title', 'description', 'showModal']);
    }
}
