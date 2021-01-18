<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class adminController extends Model
{
    protected $fillable = ["product_name", "product_price","product_description", "file_path"  ,  "created_at", "updated_at"];
}
