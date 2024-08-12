<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubContent extends Model
{
    use HasFactory;
    protected $fillable = ['content_id', 'subheading', 'description', 'sub_image'];

    public function blog()
    {
        return $this->belongsTo(Blog::class, 'content_id');
    }
}
