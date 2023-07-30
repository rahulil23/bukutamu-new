<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table = "service";
    protected $fillable = ['service_type'];

    public function category() {
        return $this->hasMany(Category::class, 'id_categories');
    }
}
