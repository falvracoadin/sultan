<?php

namespace App\Http\Livewire\Admin\Servis;
use App\Models\KelolaServis;
use Livewire\Component;

class UpdateServis extends Component
{
    public $updated_servis;
    public $nama_servis, $deskripsi;

    public function mount($id)
    {
        //auth

        //get servis
        $servis = KelolaServis::find($id);
        if(empty($servis)){
            return;
        }
        else{
            $this->updated_servis = $servis;
            $this->nama_servis = $banner->nama_servis;
            $this->deskripsi = $banner->deskripsi;
        }

    }

    public function update()
    {
        //validasi 

        $this->updated_servis->update(
            [
                'nama_servis' => $this->nama_servis,
                'deskripsi' => $this->deskripsi
            ]
        );

        //redirect
    }


    public function render()
    {
        return view('livewire.admin.servis.update-servis');
    }
}
 