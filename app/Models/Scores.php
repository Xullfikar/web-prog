<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Scores extends Model
{
// 1. nama tablenya apa
    protected $table = 'scores';

    // 2. field apa saja yang bisa diisi
    protected $fillable = ['score'];
}
