<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $table = 'settings';
    protected $fillable = ['phone','email','address','phone_label','phone_image','email_label','email_image','address_label','address_image','logo_second','logo','cv'];
}
