<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserEnquiry extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'number', 'email', 'message']; 
     protected $table = 'user_enquiries';
}
