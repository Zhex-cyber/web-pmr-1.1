<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;

   // Tentukan tabel yang digunakan
   protected $table = 'anggota';

   // Tentukan kolom-kolom yang boleh diisi (mass assignable)
   protected $fillable = [
       'nama',
       'email',
       'alamat',
   ];
}
