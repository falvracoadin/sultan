<?php

namespace App\Http\Livewire\Admin\Portofolio;
use App\Models\Portofolio;
use Livewire\Component;
 
class GetPortofolio extends Component
{
    public $portofolios;
    public $delete = 0;
    public $kategori = 'all'; 
    public $currentPage;

    public function mount()
    {
        //auth
  
        //get artikels
        $this->portofolios = Portofolio::showPortofolio(9,$this->currentPage * 9, $this->kategori,null);
    } 

    public function confirmDelete()
    {
        $deleted = Portofolio::find($this->delete);
        if(!empty($deleted)){
            $deleted->delete();
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
        return view('livewire.admin.portofolio.get-portofolio');
    }
}
  