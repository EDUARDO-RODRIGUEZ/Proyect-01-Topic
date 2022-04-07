<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Usuario extends Model
{
    use HasFactory;

    public function setIdAttribute($value)
    {
        $this->attributes['id'] = $value;
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
    }

    public function setEmailAttribute($value)
    {
        $this->attributes['email'] = bcrypt($value);
    }

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public function getIdAttribute($value)
    {
        return $value;
    }

    public function getNameAttribute($value)
    {
        return $value;
    }

    public function getEmailAttribute($value)
    {
        return $value;
    }

    public function getPasswordAttribute($value)
    {
        return $value;
    }

    public function map(Request $request)
    {
        $this->name = $request->input('name');
        $this->email = $request->input('email');
        $this->password = $request->input('password');
    }

    protected $fillable = [
        'name',
        'email',
        'password',
    ];
}
