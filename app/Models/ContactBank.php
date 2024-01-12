<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactBank extends Model
{
    use HasFactory;
    protected $table = 'contact_bank';

    protected $fillable = [
        'contact_id',
        'bank_name',
        'account_name',
        'account_number',
        'branch_office',
        'status',
    ];

    // Define the relationship with the Contact model
    public function contact()
    {
        return $this->belongsTo(Contact::class, 'contact_id');
    }
}
