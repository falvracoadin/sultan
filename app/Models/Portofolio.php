<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    use HasFactory;

    public static function showPortofolio($limit = null, $offset = null, $category = 'all', $tipe = null){
        $q = self::where('show', true);
        if($limit) $q = $q->limit($limit);
        if($offset) $q = $q->offset($offset);
        if($tipe) $q = $q->where('tipe', $tipe);
        if($category !== 'all') $q = $q->where('kategori', $category);
        return $q->get()
            ->toArray();
    }

}
