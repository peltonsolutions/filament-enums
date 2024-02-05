<?php

namespace PeltonSolutions\FilamentEnums;

use Illuminate\Foundation\Console\AboutCommand;
use Illuminate\Support\ServiceProvider;

class FilamentEnumsServiceProvider extends ServiceProvider
{
	public function register(): void
	{

	}

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		AboutCommand::add('Pelton Solutions - Filament Enums', fn() => ['Version' => '1.0.0']);
	}
}