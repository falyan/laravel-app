<?php

namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;



class SirtModel extends Model
{
    use Sortable;
    protected $table = "pengajuan";
    protected $primaryKey = "id";
    public $timestamps=true;
    public $sortable =[
                'id',
                'nama',
                'nip',
                'alat',
                'lokasi',
                'tanggal',
                'kendala',
                'evidence',
                'catatan1',
                'catatan2',
                'catatan3',
                'tanggal1',
                'tanggal2',
                'tanggal3',
    ];
    protected $fillable = [
                'id',
                'nama',
                'nip',
                'alat',
                'lokasi',
                'tanggal',
                'kendala',
                'evidence',
                'catatan1',
                'catatan2',
                'catatan3',
                'tanggal1',
                'tanggal2',
                'tanggal3',    
    ];

    public function allData()
    {
        return DB::table('pengajuan')->get();
    }

    

}
