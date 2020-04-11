<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Toko extends Model
{
    //
    protected $table='penjual';
    protected $primaryKey='id_penjual';
    protected $fillabe=['id_penjual','nama','alamat','no_hp'];
}
