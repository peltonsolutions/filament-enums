<?php

use PeltonSolutions\FilamentEnums\Models\Forms\Components\EnumSelect;

/*use function Pest\Livewire\livewire;*/

it('can be instantiated', function () {
	$enumSelect = EnumSelect::make('example');

	expect($enumSelect)->toBeInstanceOf(EnumSelect::class);
});

it('sets options correctly', function () {
	//WIP
});

it('is required when necessary', function () {
	//TODO update this.  Getting "A facade root has not been set." error, haven't found a solution yet
	
	/*	livewire(TestCreateSectionWithEnumSelect::class)
			->fillForm([])
			->call('save')
			->assertHasFormErrors(['field' => 'required']);*/
});

it('sets in values correctly', function () {

	//WIP
});
