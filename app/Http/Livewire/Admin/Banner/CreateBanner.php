<?php

namespace App\Http\Livewire\Admin\Banner;
use App\Models\KelolaBanner;
use Livewire\Component;
 
class CreateBanner extends Component
{
    public $nama_app, $deskripsi, $file;
    public function mount()
    {
        
    } 

    public function create()
    {
        //validasi

        //upload file section

        $banner = KelolaBanner::create(
            [
                'nama_app' => $this->nama_app,
                'deskripsi' => $this->deskripsi,
                'file' => $this->file, // ganti
            ]
        );
 
        if($banner){
            //redirect
        }
    }

    public function render()
    {
        return view('livewire.admin.banner.create-banner');
    }
}
