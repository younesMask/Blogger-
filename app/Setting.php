<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = ['contact_number', 'site_name', 'addres', 'contact_email'];
}
