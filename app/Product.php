<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'price', 'rating', 'price'
    ];

    public function reviews()
    {
        return $this->hasMany('App\Review');
    }

    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('file_path');
            $table->timestamps();
        });
    }
}
