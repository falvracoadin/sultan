<?php

namespace App\Http\Livewire\Admin\Portofolio;
use App\Models\KategoriPortofolio;
use App\Models\Portofolio;
use Livewire\Component;

class CreatePortofolio extends Component
{
    public $nama_portofolio, $deskripsi, $date, $kategori, $file, $tipe;
    public $kategoris;
    public function mount()
    {
        //auth
 
        $this->kategoris = KategoriPortofolio::all();
    }

    public function create()
    {
        //validasi

        //upload file section

        $portofolio = Portofolio::create(
            [
                'nama_portofolio' => $this->nama_portofolio,
                'deskripsi' => $this->deskripsi,
                'date' => $this->date,
                'kategori' => $this->kategori,
                'file' => $this->file, // ganti,
                'tipe' => $this->tipe
            ]
        );

        if($portofolio){
            //redirect
        }
    }

    public function render()
    {
        return view('livewire.admin.portofolio.create-portofolio');
    }
}
