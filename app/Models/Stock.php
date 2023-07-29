<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $fillable = [
        'item',
        'description',
        'manufacturer',
        'quantity',
        'cost'
    ];

    public function getId() {
        return $this->id;
    }

    public function getItem() {
        return $this->item;
    }
    public function getDescription() {
        return $this->description;
    }
    public function getManufacturer() {
        return $this->manufacturer;
    }
    public function getQuantity() {
        return $this->quantity;
    }
    public function getCost() {
        return $this->cost;
    }
    
}