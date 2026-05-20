<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class finalprac_jabla_viray extends Model
{
    use Hasfactory;
    protected $table = '3a_tbl';
    protected $fillable = [
        'id',
        'fname',
        'lname',
        'mname',
        'add',
        'dobirth',
    ]; 
}
