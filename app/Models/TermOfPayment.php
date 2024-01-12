<?php

// app/Models/TermOfPayment.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TermOfPayment extends Model
{
    protected $table = 'terms_of_payment';
    protected $primaryKey = 'top_id';
    protected $fillable = ['description', 'days'];
    public $timestamps = true;
}

