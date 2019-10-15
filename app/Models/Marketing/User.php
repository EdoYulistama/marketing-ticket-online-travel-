<?php

namespace App\Models\Marketing;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['nama','email','type_users'];

    public function users()
    {
        $users = $this->all();
        return $users;
    }

}
