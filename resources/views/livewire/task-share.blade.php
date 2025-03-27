<div>
    @if(session()->has('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if(session()->has('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <form wire:submit.prevent="shareTask">
        <input type="email" wire:model="email" placeholder="User Email" required>
        <select wire:model="role">
            <option value="viewer">Viewer</option>
            <option value="editor">Editor</option>
        </select>
        <button type="submit">Share Task</button>
    </form>

    <h3>Shared With:</h3>
    <ul>
        @foreach($sharedUsers as $user)
            <li>{{ $user->name }} ({{ $user->pivot->role }})</li>
        @endforeach
    </ul>

     <!-- Push JavaScript to the layout -->
     @push('scripts')
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                Livewire.on('taskShared', () => {
                    alert('Task shared successfully!');
                });
            });
        </script>
    @endpush

    <script>
        Livewire.on('taskShared', () => {
            alert('Task shared successfully!');
        });
   </script>

</div>

