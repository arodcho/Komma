<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invitados extends Model
{
    use HasFactory;

    protected $table = 'invitados';

    protected $primaryKey = 'id';

    protected $fillable = [
        "email",
        "name",
        "phone",
    ];
}
