<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    protected $primaryKey = 'order_id';
    protected $table = 'tbl_order';
    protected $fillable = [
        'item_id',
        'order_type',
        'payment_status',
    ];

    public $timestamps = false;
}
