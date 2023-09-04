<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anket extends Model
{
    use HasFactory;
      // Tablo adı belirtmek (varsayılan olarak "anket" tablosu kullanılacak)
      protected $table = 'anket';

      // İzin verilen sütunlar
      protected $fillable = ['id', 'sorular', 'timestamps'];
}
