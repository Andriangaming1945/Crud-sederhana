<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wakasek extends Model
{
    use HasFactory;

    protected $table ="_wakasek";
    protected $fillable = ['nomor_induk', 'nama', 'alamat'];
}
