<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    protected $fillable = ['main_heading', 'main_image', 'category'];
    
    public function subContents()
    {
        return $this->hasMany(SubContent::class);
    }

}
class SubContent extends Model
{
    protected $fillable = ['content_id', 'subheading', 'description', 'sub_image'];
    
    public function content()
    {
        return $this->belongsTo(Content::class);
    }
}
