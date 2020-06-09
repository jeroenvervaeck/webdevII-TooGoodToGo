<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title',
        'discription',
        'type_of_food',
    ];


    public function blogs() {
        return $this->hasMany('App\Blog');
    }

    public function delete() {
        $this->blogs()->delete();

        return parent::delete();
    }
}
