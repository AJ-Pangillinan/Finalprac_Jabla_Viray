<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class finalprac_jabla_viray extends Model
{
    use HasFactory;
    protected $table = '3a_tbl';
    protected $primaryKey = 'id';
    protected $fillable = ['fname', 'lname', 'mname', 'add', 'dobirth'];
}
