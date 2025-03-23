<div class="flex">
    <x-side-bar />

    <div class="text-white p-4 w-full">
        <div class="w-fit px-3 py-1 rounded-full bg-teal-2 divide-x-2 divide-white/20 flex gap-x-4">
            <div>
                {{ $title }}
            </div>

            <div class="pl-2 text-xs flex gap-x-2 items-center">
                <button>
                    <i class="fa-solid fa-pen text-white/50"></i>
                </button>
                <button>
                    <i class="fa-solid fa-trash text-white/50"></i>
                </button>
            </div>
        </div>

        <div class="mt-4 flex gap-4 flex-col lg:flex-row w-full">
            <div class="w-full lg:w-2/5 bg-teal-2 shadow rounded-xl p-3 flex flex-col justify-between">
                <div class="flex flex-col mb-4">
                    <livewire:task::single-list-task /> 
                    <livewire:task::single-list-task /> 
                    <livewire:task::single-list-task /> 
                    <livewire:task::single-list-task /> 
                    <livewire:task::single-list-task /> 
                    <livewire:task::single-list-task /> 
                </div>

                <form  class="bg-black/20 flex">
                    <button type="submit" class="px-3 font-bold">
                        +
                    </button>
                    <input class="bg-transparent w-full placeholder:text-white/40" placeholder="Add Task" />
                </form>
            </div>
            
            <div class="w-full lg:w-1/2 bg-teal-2 shadow rounded-xl p-3 flex flex-col gap-3">
                <div class="flex justify-between text-sm">
                    <div class="flex gap-2">
                        <i class="fa-solid fa-lock text-white/50"></i>
                        <h1>My List > Personal</h1>
                    </div>
                    <button>
                        <i class="fa-solid fa-trash text-white/50"></i>
                    </button>
                </div>
                <div>
                    <h1 class="text-3xl font-bold">Never compliment her</h1>
                </div>
                <div class="flex items-center gap-2 w-fit bg-black/20 rounded-full px-4 py-2 text-sm font-bold shadow-md cursor-pointer">
                    <i class="fa-regular fa-file-lines"></i> Personal
                </div>
                <div>
                    <h2 class="font-medium my-2">NOTES</h2>
                    <p class="text-sm font-light text-gray-300">
                        Insert your notes here
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
