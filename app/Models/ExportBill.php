<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExportBill extends Model
{
    use HasFactory;
    protected $table = 'export_bill';
    protected $fillable=['id', 'price', 'date', 'quantity', 'idProduct', 'idUser'];
}
