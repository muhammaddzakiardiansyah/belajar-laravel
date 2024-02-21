<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    use HasFactory;

    protected $table = 'vacancies';

    public function admin() {
        return $this->belongsTo(Admin::class);
    }

    public function company() {
        return $this->belongsTo(Company::class);
    }
}
