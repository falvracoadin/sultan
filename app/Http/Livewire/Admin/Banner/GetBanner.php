<?php

namespace App\Http\Livewire\Admin\Banner;
use App\Models\KelolaBanner;
use Livewire\Component;
  
class GetBanner extends Component
{
    public $banners;
    public $delete = 0;

    public function mount()
    {
        $this->banners = KelolaBanner::all()->toArray();
    }
 
    public function confirmDelete()
    {
        $deleted_banner = KelolaBanner::find($this->delete);
        if(!empty($deleted_banner)){
            $deleted_banner->delete();
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
        return view('livewire.admin.banner.get-banner')
            ->extends('layouts.admin',[
                'banner' => 'active'
            ])
            ->slot('slot');
    }
}
