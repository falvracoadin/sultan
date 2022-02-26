<?php

namespace App\Http\Livewire\Admin\Artikel;
use App\Models\Artikel;
use App\Models\KategoriArtikel;
use App\Models\KelolaStaff;
use Livewire\Component;

class UpdateArtikel extends Component
{
    public $updated_artikel;
    public $nama_artikel, $deskripsi, $tanggal_terbit, $id_staff, $kategori, $gambar; 
    public $kategoris,$staff;
    public function mount($id)
    {
        //auth

        //get data artikel
        $artikel = Artikel::find($id);
        if(empty($artikel)){
            return;
        }
        else{
            $this->updated_artikel = $artikel;
            $this->nama_artikel = $artikel->nama_artikel;
            $this->deskripsi = $artikel->deskripsi;
            $this->tanggal_terbit = $artikel->tanggal_terbit;
            $this->id_staff = $artikel->id_staff;
            $this->kategori = $artikel->kategori;
            $this->gambar = $artikel->gambar;
        }

        //get kategori
        $this->kategoris = KategoriArtikel::all();

        //get staff
        $this->staff = KelolaStaff::all();
    }

    public function update()
    {
        //validasi

        //upload file section

        $this->updated_artikel->update(
            [
                'nama_artikel' => $this->nama_artikel,
                'deskripsi' => $this->deskripsi,
                'tanggal_terbit' => $this->tanggal_terbit,
                'id_staff' => $this->id_staff,
                'kategori' => $this->kategori,
                'gambar' => $this->gambar // ganti 
            ]
        );

        //redirect
    }

    public function render()
    {
        return view('livewire.admin.artikel.update-artikel');
    }
}
