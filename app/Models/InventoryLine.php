<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryLine extends Model
{
    use HasFactory;
    
    public $timestamps = false;
    
    public function scopeFilter($query, array $filters){
        if($filters['search'] ?? false) {
            $query->where('inventory_id','like', '%'. request('search').'%')
            ->orWhere('item_barcode','like', '%'. request('search').'%')
            ->orWhere('item_name','like', '%'. request('search').'%')
            ->orWhere('item_size','like', '%'. request('search').'%');
            
        }
    }
}
