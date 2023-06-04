<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\Contracts\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use App\Models\categories;

class Products extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = "products";
    protected $fillable = [
        'product_name',
        'product_description',
        'product_price',
        'product_photo',
        'product_status',
        'id_category',

    ];
    public function categories()
    {

        return $this->belongsTo(categories::class, 'id_category', 'id_category');
    }
}
