<?php

namespace App\Http\Livewire;

use App\Models\Artikel;
use App\Models\KategoriArtikel;
use Livewire\Component;

class ContactUsController extends Component
{
    public $recentArticles;
    public $allCategories;
    public $message;

    public function mount(){
        $this->recentArticles = Artikel::getNewArtikel(3);
        $this->allCategories = KategoriArtikel::all()->toArray();
    }

    public function render()
    {
        return view('livewire.contact-us-controller')
            ->extends('layouts.app')
            ->section('slot');
    }
}
