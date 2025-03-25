<?php

namespace Modules\Task\App\Livewire;

use Livewire\Component;

class ListPage extends Component
{
    public $title;

    public function mount()
    {
        $this->title = "Personal";
    }
    
    public function render()
    {
        return view('task::livewire.list-page');
    }
}
