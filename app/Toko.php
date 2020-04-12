<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Toko extends Model
{
    //
    protected $table='db_kelontong';
    protected $primaryKey='kode_penjual';
    protected $fillable=['db_kelontong','id_penjual','nama','alamat','no_hp'];
}
