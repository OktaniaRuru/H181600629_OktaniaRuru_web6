<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriGaleri extends Model
{
 protected $table='kategori_galeri';

 protected $fillable=[
     'nama','user_id'
 ];

 protected $casts=[

 ];
}
