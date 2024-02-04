<?php

namespace PeltonSolutions\FilamentEnums\Models\Forms\Components;

use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Model;
use PeltonSolutions\LaravelEnums\Models\Enum;

class EnumTextColumn extends TextColumn {
	public static function make(string $name): static
	{
		return parent::make($name)
			->formatStateUsing(function(Model $record, Tables\Columns\TextColumn $column, $state) {
				if ( $record instanceof Model && isset($record->getCasts()[$column->getName()]) ) {
					$classname = $record->getCasts()[$column->getName()];
					if (is_subclass_of($classname, Enum::class)) {
						return $classname::map()[$state] ?? $state;
					}
				}
				return $state;
			});
	}
}
