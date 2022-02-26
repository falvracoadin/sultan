<?php

namespace App\Http\Livewire\Admin\Servis;
use App\Models\KelolaServis;
use Livewire\Component;

class CreateServis extends Component
{
    public $nama_servis, $deskripsi;

    public function mount()
    {
        //auth
    }
    
    public function create()
    {
        //validasi

       
        $servis = KelolaServis::create(
            [
                'nama_servis' => $this->nama_servis,
                'deskripsi' => $this->deskripsi
            ]
        );
 
        if($servis){
            //redirect
        }
    }
    
    public function render()
    {
        return view('livewire.admin.servis.create-servis');
    }
}
