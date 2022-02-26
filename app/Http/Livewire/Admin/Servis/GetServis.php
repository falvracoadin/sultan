<?php

namespace App\Http\Livewire\Admin\Servis;
use App\Models\KelolaServis;
use Livewire\Component;

class GetServis extends Component
{ 
    public $servis;
    public $delete = 0;

    public function mount()
    {
        //auth

        $this->servis = KelolaServis::all();
    }

    public function confirmDelete()
    {
        $deleted = KelolaServis::find($this->delete);
        if(!empty($deleted)){
            $deleted->delete();
        }

        $this->delete = 0;
    }

    public function delete($id)
    {
        $this->delete = $id;
        //set alert
    }

    public function render()
    {
        return view('livewire.admin.servis.get-servis');
    }
}
