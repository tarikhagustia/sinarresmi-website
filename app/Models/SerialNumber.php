<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SerialNumber extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function productSerial()
    {
        return $this->belongsTo(ProductSerial::class);
    }

    public function getImageUrlAttribute()
    {
        $label = route('original.check', $this->serial_number);
        return route('dashboard.product-serial.qr').'?label='.$label;
    }
}
