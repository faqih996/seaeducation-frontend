<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Checkout extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table = 'checkouts';

    protected $fillable = [
        'user_id',
        'bootcamp_id',
        'card_number',
        'expired',
        'cvv',
        'is_paid',
    ];

    protected $hidden = ['deleted_at', 'created_at', 'updated_at'];
}