<?php

namespace App\Database;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Roadmap extends Model
{
    public $timestamps = false;
    protected $guarded = ['id'];

    public function setDateAttribute($value) {
  		$this->attributes['date'] = Carbon::createFromFormat('d/m/Y', $value);
	}

	public function getDateAttribute($value) {
  		return Carbon::parse($value)->format('d/m/Y');
	}
}
