<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class contact extends Model
{
    use HasFactory;
    
    public $timestamps = true;

    protected $table = 'contact';

    protected $fillable = [
        'contact_name',
        'contact_company',
        'contact_email',
        'contact_phone',
       'contact_service',
        'contact_budget',
        'contact_Description',
            
    ];
}
