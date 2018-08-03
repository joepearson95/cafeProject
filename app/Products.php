<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
        'created_by', 'product_name', 'product_description', 'price', 'product_type'
    ];
}