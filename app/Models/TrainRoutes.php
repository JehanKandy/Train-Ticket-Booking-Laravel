<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainRoutes extends Model
{
    protected $table = 'train_routes';
    protected $primaryKey = 'id';
    protected $fillable = ['train_name', 'start_station', 'start_time', 'end_station' , 'end_time', 'created_at', 'updated_at'];
    use HasFactory;
}
