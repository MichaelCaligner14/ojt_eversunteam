<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class LoanRequest extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = ['borrowers_id','loanDate','loanType',
    'loanAmount','loanMonth','loanInterest','loanPurpose','totalAmount',
    'monthlyPay'];

    protected $dates = ['deleted_at'];
}
