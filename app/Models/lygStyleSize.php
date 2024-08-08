<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lygStyleSize extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $table = 'lygStyleSize';
    protected $fillable = [
        'date', 'name', 'product', 'size', 'location', 'quantity',
    ];
    
}
