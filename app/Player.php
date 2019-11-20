<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $table = 'users';

    protected $fillable = [
        'player_name','player_number'
    ];

    public function getAll() {
        return static::get()->toArray();
    }

    public function insertData($data) {
        return static::create($data);
    }

    public function updateData($id,$data) {
        return static::where('id',$id)->update($data);
    }

    public function getDataById($id) {
        return static::where('id',$id)->first();
    }

    public function deleteData($id) {
        return static::where('id',$id)->delete();
    }


}
