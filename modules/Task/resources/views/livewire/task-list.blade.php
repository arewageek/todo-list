<div>
    @if (session()->has('message'))
        <div style="color: green;">{{ session('message') }}</div>
    @endif

    @if (session()->has('error'))
        <div style="color: red;">{{ session('error') }}</div>
    @endif

    <form wire:submit="createTask" method="post">
        <input type="text" name="title" wire:model="title" placeholder="Enter task title">
        <textarea type="text" rows="4" name="description" wire:model="description" placeholder="Enter task description"></textarea>
        <button wire:click="createTask">Add Task</button>
    </form>

    <ul>
        @foreach ($tasks as $task)
            <li>
                {{ $task->title }} - {{ $task->description }}
                <button wire:click="deleteTask({{ $task->id }})">Delete</button>
            </li>
        @endforeach
    </ul>
</div>
