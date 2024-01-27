<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentModel extends Model
{
    protected $table = 'payments';
    protected $primaryKey = 'id';
    protected $fillable = ['enrollment_id', 'paid_date', 'amount'];
    use HasFactory;

    public function enrollment(){
        return $this->belongsTo(EnrollmentModel::class);
    }
}
