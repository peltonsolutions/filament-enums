<?php

namespace PeltonSolutions\FilamentEnums\Models\Forms\Components;

use Filament\Forms\Components\Select;
use Illuminate\Database\Eloquent\Model;
use PeltonSolutions\LaravelEnums\Models\Enum;
use PeltonSolutions\LaravelEnums\Models\NullableEnum;

class EnumSelect extends Select
{
	public static function make(?string $name = null): static
	{
		return parent::make($name)
					 ->options(function ($record, self $component) {
						 if (!$record) {
							 $record = new ($component->container->model);
						 }
						 if ($record instanceof Model && isset($record->getCasts()[$component->name])) {
							 $classname = $record->getCasts()[$component->name];
							 if (is_subclass_of($classname, Enum::class)) {
								 return $classname::map();
							 }
						 }
						 return [];
					 })
					 ->required(function ($record, self $component) {
						 if (!$record) {
							 $record = new ($component->container->model);
						 }
						 if ($record instanceof Model && isset($record->getCasts()[$component->name])) {
							 $classname = $record->getCasts()[$component->name];
							 if (is_subclass_of($classname, Enum::class) && !is_subclass_of($classname,
									 NullableEnum::class)) {
								 return true;
							 }
						 }
						 return false;
					 })
					 ->in(function ($record, self $component) {
						 if (!$record) {
							 $record = new ($component->container->model);
						 }
						 if ($record instanceof Model && isset($record->getCasts()[$component->name])) {
							 $classname = $record->getCasts()[$component->name];
							 if (is_subclass_of($classname, Enum::class)) {
								 return array_keys($classname::map());
							 }
						 }
						 return [];
					 });
	}

}
