<?php

namespace App\Models;

use App\Models\Student;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profile extends Model
{
    protected $fillable = ["course", "year", "track", "favourite_sub"];
    use HasFactory;

    public function student() {
        return $this->belongsTo(Student::class);
    }

}
