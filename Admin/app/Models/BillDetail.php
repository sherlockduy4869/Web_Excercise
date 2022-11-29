<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{
    protected $fillable = ['id', 'id_bill', 'id_product', 'quantity', 'unit_price'];
    protected $primaryKey = 'id';
    protected $table = 'bill_detail';
    use HasFactory;
}
