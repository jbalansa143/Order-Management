<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
// use Category;
class Menu extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'category',
        'price'
    ];

    public function getName() {
        $name = ucfirst($this->name);
        return $name;
    }
    
    public function getDescription() {
        $limitedText = Str::words($this->description, 6, '...');
        return $limitedText;
    }
    public function getCategory() {
        $categories = Category::where('category_id', $this->category)->get();
        return $categories;
    }
    public function getPrice() {
        return $this->price;
    }
}
