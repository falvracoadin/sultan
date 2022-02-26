<?php

namespace App\Http\Livewire\Admin\Artikel;
use App\Models\KategoriArtikel;
use Livewire\Component;

class CreateKategoriArtikel extends Component
{
    public $kategori;
    public function mount()
    {
        //auth
    }

    public function create()
    {
        //validasi

        $new_kategori = KategoriArtikel::create(
            [
                'kategori' => $this->kategori
            ]
        );
        if($new_kategori){
            //redirect
        }
    }

    public function render()
    {
        return view('livewire.admin.artikel.create-kategori-artikel');
    }
}
