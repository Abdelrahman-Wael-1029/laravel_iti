<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Product extends Model
{
    use HasFactory;
    protected  $table = 'product';
    protected $fillable = [
        'name',
        'description',
        'image',
        'price',
        'category_id',
        
    ];
    protected $hidden = [
        'created_at',
        'updated_at'
    ];
    public function category(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
    
}
