<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;
    protected $table = 'customers';
   
    // protected $table = 'customers';
    // protected $casts = [
    //     'created_at' => 'datetime:Y-m-d H:i:s',
    //     'updated_at' => 'datetime:Y-m-d H:i:s',
    //     'ischecked' => 'boolean',
    //     'saldo' => 'float',
    // ];

    // protected $fillable =[
    //     'customer_id',
    //     'nama',
    //     'type',
    //     'jenjang',
    //     'tingkatan',
    //     'ischecked',
    //     'kelas',
    //     'email',
    //     'alamat',
    //     'kota',
    //     'provinsi',
    //     'negara',
    //     'kontak',
    //     'saldo',
    //     'telephone',
    //     'kode_pos',
    // ];
}
