<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $primaryKey = 'no';
    protected $fillable = [
        'no',
        'ad',
        'soyad'
      ];
}
