<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    use HasFactory;
    protected $primaryKey = 'item_id';
    protected $table = 'tbl_menu';
    protected $fillable = [
        'item_name',
        'item_price',
        'item_stock',
    ];

    public $timestamps = false;
}
