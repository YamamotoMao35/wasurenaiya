<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class belonging extends Model
{
    public function getData()
    {
        return $this->id . ': ' . $this->name . ' (' .$this->age .')';
    }
    
    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required',
        'mail' => 'email',
        'age' => 'integer|min:0|max:150'
    );

    public function belongings()
    {
        return $this->belongsTo('App\User');
    }
}
