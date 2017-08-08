<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    //
    protected $public = 'supplier';
    protected $fillable = ['nama','alamat','no_hp'];
    protected $visible = ['nama','alamat','no_hp'];
    public $timestamps = true;
}
