<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgresTitle extends Model
{
    use HasFactory;
    protected $table='progress_titles';
    protected $fillable=['title','text'];
}
