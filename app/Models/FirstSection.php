<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FirstSection extends Model
{
    use HasFactory;
    protected  $table = 'first_sections';
    protected  $guarded = [];
    protected $fillable = ['title','text','image'];
}
