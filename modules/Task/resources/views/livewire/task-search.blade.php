<div>
    <input type="text" wire:model.debounce.500ms="search" placeholder="Search tasks..."
        class="border p-2 rounded w-full">

    <ul>
        @forelse ($tasks as $task)
            <li class="border-b py-2">{{ $task->title }} - {{ $task->description }}</li>
        @empty
            <li>No tasks found.</li>
        @endforelse
    </ul>
</div>
