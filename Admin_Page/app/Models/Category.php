<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'email', 'contact_number'];
    protected $primaryKey = 'id';
    protected $table = 'tbl_category';
    use HasFactory;
}
