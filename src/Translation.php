<?php

namespace AriAbid\LaravelTranslatable;

use Illuminate\Database\Eloquent\Model;

class Translation extends Model
{
    protected $fillable = ['body', 'language', 'lang_code'];

    public function translatable()
    {
        return $this->morphTo();
    }
}
