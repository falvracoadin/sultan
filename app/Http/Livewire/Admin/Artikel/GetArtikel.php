<?php

namespace App\Http\Livewire\Admin\Artikel;
use App\Models\Artikel;
use Livewire\Component;

 
class GetArtikel extends Component
{
    public $artikels;
    public $delete = 0;
    public $kategori = 'all';
    public $currentPage;
    public function mount()
    {
        //auth

        //get artikels
        $this->artikels = Artikel::showArtikel(9,$this->currentPage * 9, $this->kategori);
    } 

    public function confirmDelete()
    {
        $deleted_artikel = Artikel::find($this->delete);
        if(!empty($deleted_artikel)){
            $deleted_artikel->delete();
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
        return view('livewire.admin.artikel.get-artikel')
            ->extends('layouts.admin')
            ->slot('slot');
    }
}
