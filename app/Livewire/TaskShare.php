<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use App\Notifications\TaskSharedNotification;
use App\Models\TaskShare as ModelsTaskShare;
use Modules\Task\App\Models\Task;
use Modules\User\App\Models\User;
class TaskShare extends Component
{
    public $task, $email, $role = 'viewer';

    protected $rules = [
        'email' => 'required|email|exists:users,email',
        'role' => 'required|in:viewer,editor',
    ];

    public function mount(Task $task)
    {
        $this->task = $task;
    }

    public function shareTask()
    {
        $this->validate();

        $user = User::where('email', $this->email)->first();
        
        if ($this->task->sharedUsers()->where('user_id', $user->id)->exists()) {
            session()->flash('error', 'User already has access to this task.');
            return;
        }

        // Store in task_shares table
        ModelsTaskShare::create([
            'task_id' => $this->task->id,
            'user_id' => $user->id,
            'role' => $this->role,
        ]);

        // Send notification
        Notification::send($user, new TaskSharedNotification($this->task, Auth::user()));
        
        $this->emit('taskShared');
        $this->reset('email');
        session()->flash('success', 'Task shared successfully.');
    }

    public function render()
    {
        return view('livewire.task-share', [
            'sharedUsers' => $this->task->sharedUsers,
        ]);
    }

}
