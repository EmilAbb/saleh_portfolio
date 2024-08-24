<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Video extends Model
{
    use HasFactory;
    protected $table = 'videos';
    protected $fillable = ['video_name','video_link','cover_photo','category_id'];

    public function category() :BelongsTo
    {
      return  $this->belongsTo(Category::class, 'category_id','id');
    }
}
