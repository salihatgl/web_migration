<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnketSecenek extends Model
{
    use HasFactory;
       // Tablo adı belirtmek (varsayılan olarak "anket" tablosu kullanılacak)
       protected $table = 'anket_secenek';

       // İzin verilen sütunlar
       protected $fillable = ['id', 'secenek','anket_id','timestamps'];
       

     
}
