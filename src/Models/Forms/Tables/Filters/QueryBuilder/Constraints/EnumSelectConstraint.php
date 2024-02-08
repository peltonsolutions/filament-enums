<?php

namespace PeltonSolutions\FilamentEnums\Models\Forms\Tables\Filters\QueryBuilder\Constraints;

use Filament\Tables\Filters\QueryBuilder\Constraints\SelectConstraint;
use Illuminate\Database\Eloquent\Model;
use PeltonSolutions\LaravelEnums\Models\Enum;

class EnumSelectConstraint extends SelectConstraint
{
	public static function make(string $name): static
	{
		return parent::make($name)
					 ->options(function ($record, self $component) {
						 if ($record instanceof Model && isset($record->getCasts()[$component->name])) {
							 $classname = $record->getCasts()[$component->name];
							 if (is_subclass_of($classname, Enum::class)) {
								 return $classname::map();
							 }
						 }
						 return [];
					 });
	}
}