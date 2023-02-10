<?php

namespace App\Models;

use App\Models\Client;
use App\Models\Seller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sale extends Model
{
    use HasFactory;

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }
}
