<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LygDestination extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $table = 'lygDestination';
    protected $fillable = [
        'destination_code', 'destination_name',
    ];
}

