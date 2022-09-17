<?php
//NAZKIA NAJIDAH RAMDANI XI PIONEER WEBPRO5
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['student', 'gender', 'class'];
}
