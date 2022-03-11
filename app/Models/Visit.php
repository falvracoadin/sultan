<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Visit extends Model
{
    use HasFactory;

    public $fillable = [
        'ip_address',
        'tahun',
        'bulan',
        'tanggal'
    ];

    public $timestamps = false;

    public static function visit($ip){
        DB::beginTransaction();
        $visit = self::where('ip_address', $ip)->first();
        if(empty($visit)){
            $visit = new Visit([
                'ip_address' => $ip,
                'tahun' => now()->year,
                'bulan' => now()->month,
                'tanggal' => now()->day
            ]);
        }else{
            $visit->tahun = now()->year;
            $visit->bulan = now()->month;
            $visit->tanggal = now()->day;
        }
        $status = $visit->save();
        DB::commit();
        return $status;
    }

    public static function countVisitor(){
        $data = array();
        $query = self::where('bulan', now()->month)
            ->where('tahun', now()->year);
        $data['day'] = $query->where('tanggal', now()->day)
            ->count();
        $data['month'] = $query->count();
        return $data;
    }
}
