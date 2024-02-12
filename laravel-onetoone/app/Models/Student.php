<?php

namespace App\Models;

use App\Models\Profile;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    protected $fillable = ["name", "age", "gender"];
    use HasFactory;

    public function profile() {
        return $this->hasOne(Profile::class);
    }
}
