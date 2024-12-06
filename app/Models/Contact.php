<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $table = 'contacts';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'address', 'mobile'];
    public $timestamps = true;
    protected $casts = [
        'mobile' => 'string',
        'address' => 'string',
    ];
}
