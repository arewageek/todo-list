<div class="">
    <div class="flex justify-between items-center text-white p-2">
        <div class="flex gap-2">
            <h1 class="font-bold">My lists</h1>
            <i class="fa-solid fa-lock "></i>
        </div>
        <button wire:click='show_create_new_list_modal'>
            <i class="fa-solid fa-plus"></i>
        </button>
    </div>

    <div class="flex flex-col mt-2">
        <a href="list/personal" class="p-0 text-md">
            <div class="flex gap-2 hover:bg-black/30 px-3 py-2 text-white items-center">
                <div>
                    Personal
                </div>
                <div class="rounded-full h-[25px] w-[25px] text-[12px] bg-teal-200/30 flex items-center justify-center">
                    2
                </div>
            </div>
        </a>
        
    </div>
</div>