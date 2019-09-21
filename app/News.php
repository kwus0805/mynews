<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    Protected $guarded = array('id');

    //以下を追記　
    Public static $rules = array(
      'title' => 'required',
      'body' => 'required',
    );
}
