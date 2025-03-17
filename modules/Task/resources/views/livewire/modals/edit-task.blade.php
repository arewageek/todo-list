<div>
    @if($showModal)
    <div>
        @if($showModal)
        <div class="modal fade show d-block row" tabindex="-1" style="background: rgba(0, 0, 0, 0.6); color:">
            <div class="d-flex align-items-center justify-content-center vh-100 w-100">
                <div class="col-sm-12 col-md-8 col-lg-5 mx-auto">
                    <div class="modal-content bg-teal-light text-white shadow-lg rounded-4">
                        <!-- Header -->
                        <div class="modal-header border-0">
                            <h5 class="modal-title fw-bold text-uppercase">Edit Task</h5>
                            <button type="button" class="btn-close btn-close-white" wire:click="closeModal"></button>
                        </div>
        
                        <!-- Body -->
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Title</label>
                                <input type="text" wire:model="title" class="form-control bg-light-transparent text-black border-0 rounded-3 shadow-sm">
                                @error('title') <span class="text-danger small">{{ $message }}</span> @enderror
                            </div>
        
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Description</label>
                                <textarea wire:model="description" rows="4" class="form-control bg-light-transparent text-black border-0 rounded-3 shadow-sm"></textarea>
                                @error('description') <span class="text-danger small">{{ $message }}</span> @enderror
                            </div>
                        </div>
        
                        <!-- Footer -->
                        <div class="modal-footer border-0 d-flex justify-content-between">
                            <button type="button" class="btn btn-outline-light fw-semibold px-4 py-2 rounded-3" wire:click="closeModal">
                                Cancel
                            </button>
                            <button type="button" class="btn btn-success fw-semibold px-4 py-2 rounded-3 shadow-sm" wire:click="updateTask">
                                Save Changes
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        @endif
    </div>
    
    @endif
</div>
