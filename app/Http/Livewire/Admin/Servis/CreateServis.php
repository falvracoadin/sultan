<?php

namespace App\Http\Livewire\Admin\Servis;
use App\Models\KelolaServis;
use Livewire\Component;

class CreateServis extends Component
{
    public $nama_servis, $deskripsi;

    public $servis;
    public $show;
    public $idDelete;

    public $listeners = [
        'showCreateServisPanel'
    ];

    public function mount()
    {
        $this->show = false;
        $this->servis = KelolaServis::all()->toArray();
    }

    public function showCreateServisPanel(){
        $this->show = true;
    }
     
    public function create()
    {
        //validasi
        $this->validate([
            'nama_servis' => 'required|string|max:50',
            'deskripsi' => 'required|string',
        ]);
       
        $servis = KelolaServis::create(
            [
                'nama_servis' => $this->nama_servis,
                'deskripsi' => $this->deskripsi
            ]
        );
 
        if($servis){
            $this->servis = KelolaServis::all()->toArray();
            $this->nama_servis = '';
            $this->deskripsi = '';
        }
    }

    public function close(){
        $this->show = false;
    }

    public function cancel(){
        $this->idDelete = null;
    }

    public function delete($id){
        if($id < 0 or $id > sizeof($this->servis)) return;
        $this->idDelete = $id;
    }

    public function confirmDelete(){
        $id = $this->servis[$this->idDelete]['id'];
        $status = KelolaServis::find($id)->delete();
        if($status){
            $this->servis = KelolaServis::all()->toArray();
        }
        $this->idDelete = null;
        $this->servis = KelolaServis::all()->toArray();
    }
    
    public function render()
    {
        return view('livewire.admin.servis.create-servis');
    }
}
