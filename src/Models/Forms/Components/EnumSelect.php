<?php

namespace PeltonSolutions\FilamentEnums\Models\Forms\Components;

use Filament\Forms\Components\Select;

class EnumSelect extends Select
{
	public static function make(string $name): static
	{
		return parent::make($name)
			->options(function($record) {
				dd($record);
			});
	}

}