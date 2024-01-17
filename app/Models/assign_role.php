<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class assign_role extends Model
{
    use HasFactory;
    protected $table = 'assign_roles';
    protected $fillable = ['user_id','user_role_id'];
}
