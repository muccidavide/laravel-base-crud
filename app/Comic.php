<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = ['title', 'description', 'thumb', 'sales_date', 'series', 'price', 'type'];
}
