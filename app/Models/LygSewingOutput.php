<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LygSewingOutput extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $table = 'lygSewingOutput';
    protected $fillable = [
        'TrnDate', 'OperatorName', 'StyleCode', 'SizeName', 'DestinationCode', 'QtyOutput',
    ];
}
