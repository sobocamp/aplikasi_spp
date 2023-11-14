<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SppModel extends Model
{
    use HasFactory;

    protected $table = 'spp';
    protected $primaryKey = 'id_spp';
    protected $fillable = ['tahun', 'nominal'];

    public $timestamps = false;
}
