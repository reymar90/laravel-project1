<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';

    protected $fillable = [
        'first_name','last_name','age','email','contact_number','address'
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
