<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $table ='tb_kopi';
    public $timestamps = false;
    protected $fillable =['menu','harga'];

}