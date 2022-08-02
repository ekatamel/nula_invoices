<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Customer;
use App\Models\Supplier;


class Invoice extends Model
{
    use HasFactory;

    public function customer()
    {
      return $this->belongsTo(Customer::class);
    }

    public function supplier()
    {
      return $this->belongsTo(Supplier::class);
    }
}
