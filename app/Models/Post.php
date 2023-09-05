<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
           // Tablo adı belirtmek (varsayılan olarak "anket" tablosu kullanılacak)
           protected $table = 'anket_yanit';

           // İzin verilen sütunlar
           protected $fillable = ['id', 'yanit', 'timestamps'];
}
