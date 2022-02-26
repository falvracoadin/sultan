<?php

namespace App\Http\Livewire\Admin\Portofolio;
use App\Models\Portofolio;
use App\Models\KategoriPortofolio;
use Livewire\Component; 
 
class UpdatePortofolio extends Component
{
    public $updated_portofolio;
    public $nama_portofolio, $deskripsi, $date, $kategori, $file, $tipe;
    public $kategoris;

    public function mount($id)
    {
        //auth

        //get portofolio
        $portofolio = Portofolio::find($id);
        if(empty($portofolio)){
            return;
        }
        else{
            $this->updated_portofolio = $portofolio;
            $this->nama_portofolio = $portofolio->nama_portofolio;
            $this->deskripsi = $portofolio->deskripsi;
            $this->date = $portofolio->date;
            $this->kategori = $portofolio->kategori;
            $this->file = $portofolio->file;
            $this->tipe = $portofolio->tipe;
        }
 
        $this->kategoris = KategoriPortofolio::all();
    }

    public function update()
    {
        //validasi

        //upload file section

        $this->updated_portofolio->update(
            [
                'nama_portofolio' => $this->nama_portofolio,
                'deskripsi' => $this->deskripsi,
                'date' => $this->date,
                'kategori' => $this->kategori,
                'file' => $this->file, // ganti,
                'tipe' => $this->tipe
            ]
        );

        //redirect

    }

    public function render()
    {
        return view('livewire.admin.portofolio.update-portofolio');
    }
}
