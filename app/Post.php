<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table='posts';
    public function limitTitle($number){
    	$text= str_limit($this->title,$number,'...');
    	return $text;
    }
    public function limitDesc($number){
    	$text= str_limit($this->short_desc,$number,'...');
    	return $text;
    }
    public function getCate(){
    	$cate= Category::find($this->cate_id);
    	return $cate;
    }
}
