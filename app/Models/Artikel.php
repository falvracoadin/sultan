<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    public static function getNewArtikel($size){
        return self::orderBy('created_at')
            ->limit($size)
            ->get()
            ->toArray();
    }

    public static function showArtikel($limit, $offset = null, $category = 'all'){
        $q = self::limit($limit)
            ->orderBy('tanggal_terbit');
        if($offset) $q = $q->offset($offset);
        if($category !== 'all') $q = $q->where('kategori', $category);
        return $q->get()
            ->toArray();
    }
}
