<?php

namespace App\Traits;

trait HasScope
{
    public function scopeSearch($query, $type)
    {
        return $query->when(request()->search, function($search) use($type){
            $search = $search->where($type, 'like', '%'. request()->search. '%');
        });
    }

    public function scopeMultiSearch($query, $type, $data)
    {
        return $query->orWhereHas($type, function($search) use($data){
                $search = $search->where($data, 'like', '%'. request()->search. '%');
            });
    }
}