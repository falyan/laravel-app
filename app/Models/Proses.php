<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proses extends Model
{
    use Sortable;
    protected $table = "proses";
    protected $primaryKey = "id";
    public $timestamps=true;
    public $sortable =[
                'id',
                'nama2',
                'catatan1',
                'catatan2',
                'catatan3',
                'tanggal1',
                'tanggal2',
                'tanggal3',
                
    ];
    protected $fillable = [
        'id',
        'nama2',
        'catatan1',
        'catatan2',
        'catatan3',
        'tanggal1',
        'tanggal2',
        'tanggal3',  
    ];

    public function allData()
    {
        return DB::table('proses')->get();
    }

}
