<?php

namespace App\Models;

use Awcodes\Curator\Models\Media;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PaymentType extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function paymentcategories()
    {
        return $this->hasMany(PaymentCategory::class);
    }

    public function image()
    {
        return $this->belongsTo(Media::class, 'image_id', 'id');
    }

    public function payments()
    {
        return $this->morphMany(Payment::class, 'payable');
    }


    public function remainingAmount()
    {
        return $this->target_amount - $this->amount_paid;
    }


    public function updateAmountPaid($amount)
    {
        $this->amount_paid += $amount;
        $this->save();
    }
}
