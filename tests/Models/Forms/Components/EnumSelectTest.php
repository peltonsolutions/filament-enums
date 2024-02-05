<?php

use PeltonSolutions\FilamentEnums\Models\Forms\Components\EnumSelect;

it('can be instantiated', function () {
	$enumSelect = EnumSelect::make('example');

	expect($enumSelect)->toBeInstanceOf(EnumSelect::class);
});

it('sets options correctly', function () {
	//WIP
});

it('is required when necessary', function () {
	//WIP
});

it('sets in values correctly', function () {

	//WIP
});
