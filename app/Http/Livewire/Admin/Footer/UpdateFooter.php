<?php

use App\Models\Footer;
use Livewire\Component;

class UpdateFooter extends Component
{
    use WithFileUploads;
    public $updated_footer;
    public $konten;
    public $listeners = [];

    public function mount()
    {
        $this->updated_footer = Footer::where("id",">",0)->first();
    }

    public function update()
    {
        $this->validate([
            'konten' => 'required|string|max:255',
        ]);
        
        $this->updated_footer->update([
            'konten' => $this->konten
        ]);
    }

    public function render()
    {
        return view('livewire.admin.staff.update-staff');
    }
}
