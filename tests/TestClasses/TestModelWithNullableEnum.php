<?php

namespace PeltonSolutions\FilamentEnums\Tests\TestClasses;

use Illuminate\Database\Eloquent\Model;
use PeltonSolutions\LaravelEnums\Models\NullableEnum;

class TestModelWithNullableEnum extends Model {

	protected $casts = [
		'field' => NullableEnum::class
	];

}