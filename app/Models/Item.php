<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $fillable = [
        'registryDate', 'completionDate', 'content', 'priority', 'status'
    ];
    
    protected $primaryKey = 'id';
}
