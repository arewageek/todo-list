<x-app-layout>
    <div class="overflow-y-hidden h-screen flex flex-col justify-between">
        <div class="px-5 mt-12 lg:px-16 flex flex-col overflow-y-auto gap-y-4">
            <livewire:task::single-task />
            <livewire:task::single-task />
            <livewire:task::single-task />
            <livewire:task::single-task />
        </div>

        <div class="w-full px-5 lg:px-16 py-5">
            <form method="post" class="bg-white/30 px-4 py-3 text-white flex items-center">
                <button type="submit" class="bg-transparent border-0">
                    <i class="fa-solid fa-square-plus text-3xl"></i>
                </button>
                <input type="text" name="task" class="bg-transparent border-0 w-full" />
            </form>
        </div>
    </div>
</x-app-layout>