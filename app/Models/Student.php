<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Student extends Model
{
    use HasFactory;
    public $timestamps= false;
protected $table ='students';

protected $fillable = ['name', 'email','branch', 'phone', 'address'];

    
}
