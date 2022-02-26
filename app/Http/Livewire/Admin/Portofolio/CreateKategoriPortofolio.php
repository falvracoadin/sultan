<?php

namespace App\Http\Livewire\Admin\Portofolio;
use App\Models\KategoriPortofolio;
use Livewire\Component;

class CreateKategoriPortofolio extends Component
{
    public $kategori;
    public function mount()
    {
        //auth
    }

    public function create()
    {
        //validasi

        $kategori = KategoriPortofolio::create(
            [
                'kategori' => $this->kategori
            ]
        );

        if($kategori){
            //redirect
        }
    }

    public function render()
    {
        return view('livewire.admin.portofolio.create-kategori-portofolio');
    }
}
