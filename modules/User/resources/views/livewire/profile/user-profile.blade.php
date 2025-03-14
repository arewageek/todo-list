<div class="max-w-4xl mx-auto p-6 bg-white shadow-md rounded-lg">
    <h1 class="text-2xl font-bold mb-6">User Profile</h1>

    <!-- Success Message -->
    @if (session()->has('success'))
        <div class="p-4 mb-4 text-green-700 bg-green-100 border border-green-200 rounded">
            {{ session('success') }}
        </div>
    @endif

    <!-- Profile Form -->
    <form wire:submit.prevent="updateProfile" class="space-y-4">

        <!-- First Name -->
        <div>
            <label for="first_name" class="block text-sm font-medium text-gray-700">First Name</label>
            <input type="text" id="first_name" wire:model="first_name"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            @error('first_name') 
                <span class="text-sm text-red-600">{{ $message }}</span> 
            @enderror
        </div>

        <!-- Last Name -->
        <div>
            <label for="last_name" class="block text-sm font-medium text-gray-700">Last Name</label>
            <input type="text" id="last_name" wire:model="last_name"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            @error('last_name') 
                <span class="text-sm text-red-600">{{ $message }}</span> 
            @enderror
        </div>

        <!-- Username -->
        <div>
            <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
            <input type="text" id="username" wire:model="username"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            @error('username') 
                <span class="text-sm text-red-600">{{ $message }}</span> 
            @enderror
        </div>

        <!-- Email -->
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" id="email" wire:model="email"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            @error('email') 
                <span class="text-sm text-red-600">{{ $message }}</span> 
            @enderror
        </div>

        <!-- Submit Button -->
        <div class="flex justify-end">
            <button type="submit"
                class="px-4 py-2 bg-indigo-600 text-white font-semibold rounded-md shadow hover:bg-indigo-500 focus:ring focus:ring-indigo-300">
                Update Profile
            </button>
        </div>
    </form>
</div>