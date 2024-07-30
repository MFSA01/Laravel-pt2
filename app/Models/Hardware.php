<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Hardware;

class Hardware extends Model
{
    use HasFactory;

    public $table = "komputer.hardware";

    protected $fillable = [
        "id",
        "hardware",
        "keterangan",
    ];
}
