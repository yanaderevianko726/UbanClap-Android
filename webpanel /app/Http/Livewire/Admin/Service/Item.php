<?php

namespace App\Http\Livewire\Admin\Service;

use Livewire\Component;

class Item extends Component
{
    public $services;
    public $id;
    public $child = 1;
    
    public function mount($services)
    {
        $this->services = $services->all();
    }

    public function render()
    {
        return view('livewire.admin.service.item');
    }
    public function getchild($id)
    {
        
            $this->id = $id;
            $this->services = ServiceType::where('status','=','1')->where('parent_id','=',$id)->with('childrenRecursive')->get();
            \Log::alert('message'.$this->services);
            if(empty($this->services->children_recursive))
                $this->child = 0;
    }
}
