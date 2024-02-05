<?php

namespace PeltonSolutions\FilamentEnums\Tests\TestClasses;

use Illuminate\Database\Eloquent\Model;

class TestModelWithEnum extends Model {

	protected $casts = [
		'field' => TestEnum::class
	];

}