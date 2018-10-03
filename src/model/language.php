<?php

namespace Thangbeo\Languages;

use Illuminate\Database\Eloquent\Model;

class language extends Model
{
    protected $table = "languages";

    protected $fillable = ['in_code','en','vn','pages'];
}
