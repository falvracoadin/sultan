<?php

namespace App\Http\Livewire\Admin\Artikel;
use App\Models\Artikel;
use App\Models\KategoriArtikel;
use App\Models\KelolaStaff;
use Livewire\Component;

class CreateArtikel extends Component
{
    public $nama_artikel, $deskripsi, $tanggal_terbit, $id_staff, $kategori, $gambar; 
    public $kategoris,$staff;
    public function mount()
    {
        //auth

        //get kategori
        $this->kategoris = KategoriArtikel::all();

        //get staff
        $this->staff = KelolaStaff::all();
    }

    public function create()
    {
        //validasi

        //upload file section
        
        $artikel = Artikel::create(
            [
                'nama_artikel' => $this->nama_artikel,
                'deskripsi' => $this->deskripsi,
                'tanggal_terbit' => $this->tanggal_terbit,
                'id_staff' => $this->id_staff,
                'kategori' => $this->kategori,
                'gambar' => $this->gambar // ganti 
            ]
        );

        if($artikel){
            //redirect
        }
    }

    public function render()
    {
        return view('livewire.admin.artikel.create-artikel');
    }
}
