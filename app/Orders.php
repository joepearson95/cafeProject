<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $fillable = [
        'created_by', 'product_name', 'price', 'quantity'
    ];
}