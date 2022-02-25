<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelolaStaff extends Model
{
    use HasFactory;

    public static function showStaff($limit = null){
        $q = self::where('show', true);
        if($limit) $q = $q->limit($limit);
        return $q->get()
            ->toArray();
    }
}
