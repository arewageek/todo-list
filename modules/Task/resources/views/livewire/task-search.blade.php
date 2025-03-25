<div>
    <!-- Search Icon to Open Modal -->
    <button class="btn btn-primary" wire:click="openModal">
    <i class="fa-solid fa-search"></i> Search Tasks
    </button>

    @if($showSearchModal)
    <div class="modal fade show d-block" tabindex="-1" style="background: rgba(0, 0, 0, 0.6);">
        <div class="d-flex align-items-center justify-content-center vh-100 w-100">
            <div class="col-sm-12 col-md-8 col-lg-5 mx-auto rounded-5">
                <div class="modal-content bg-teal-light text-white shadow-lg rounded-4">
                    <!-- Header -->
                    <div class="modal-header border-0">
                        <h5 class="modal-title fw-bold text-uppercase">Search Task</h5>
                        <button type="button" class="btn-close btn-close-white" wire:click="closeModal"></button>
                    </div>

                    <!-- Search Input -->
                    <div class="modal-body">
                        <input type="text" wire:model.debounce.500ms="search" wire:keyup="fetchAuthTasks" placeholder="Search tasks..." class="form-control mb-3 rounded-4 py-2">

                        @forelse ($tasks as $task)
                            <div class="mb-3">
                                <strong>{{ $task->title }}</strong>
                                <p>{{ $task->description }}</p>
                            </div>
                        @empty
                            <div>No tasks found.</div>
                        @endforelse
                    </div>

                    <!-- Footer -->
                    <div class="modal-footer border-0 d-flex justify-content-between">
                        <!--<button type="button" class="btn btn-outline-light fw-semibold px-4 py-2 rounded-3" wire:click="closeModal">
                            Close
                        </button>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
