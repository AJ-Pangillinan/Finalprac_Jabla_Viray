<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class finalprac_jabla_viray extends Model
{
    Use HasFactory;
    protected $table = '3a_tbl';
    protected $primaryKey = 'id';
    protected $fillable = [
        'fname',
        'lname', 
        'mname', 
        'add', 
        'dob'
        ];
}
