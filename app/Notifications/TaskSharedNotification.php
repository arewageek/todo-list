<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class TaskSharedNotification extends Notification
{
    use Queueable;

    public $task, $sharedBy;

    public function __construct($task, $sharedBy)
    {
        $this->task = $task;
        $this->sharedBy = $sharedBy;
    }

    public function via($notifiable)
    {
        return ['mail', 'database'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject('Task Shared with You')
                    ->greeting('Hello!')
                    ->line("{$this->sharedBy->name} has shared a task with you.")
                    ->action('View Task', url('/tasks/' . $this->task->id));
    }

    public function toArray($notifiable)
    {
        return [
            'message' => "{$this->sharedBy->name} shared a task with you.",
            'task_id' => $this->task->id,
        ];
    }
}
