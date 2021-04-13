<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\ServiceType;

class ServiceChildren extends Component
{
    public $services;
    public $id;
    public $child = 1;
    
    public function mount($services)
    {
        $this->services = ServiceType::where('parent_id','=',0)->get();
    }

    public function render()
    {
        return view('livewire.service-children');
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
