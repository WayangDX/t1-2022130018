<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class product extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'product_name',
        'description',
        'retail_price',
        'wholesale_price',
        'origin',
        'quantity',
        'product_image',
    ];

    protected $appends = [
        'avatar_url',
    ];

    public function getAvatarUrlAttribute()
    {
        if (filter_var($this->product_image, FILTER_VALIDATE_URL)) {
            return $this->product_image;
        }

        return $this->product_image ? Storage::url($this->product_image) : null;
    }
}
