<?php

namespace PeltonSolutions\FilamentEnums\Tests\TestClasses;

use Filament\Forms\Form;
use Filament\Resources\Resource;
use PeltonSolutions\FilamentEnums\Models\Forms\Components\EnumSelect;

class TestResourceWithEnumSelect extends Resource
{
	protected static ?string $model = TestModelWithEnum::class;

	public static function form(Form $form): Form
	{
		return $form
			->schema([
				EnumSelect::make('field')
			]);
	}
}