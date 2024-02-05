<?php

namespace PeltonSolutions\FilamentEnums\Tests\TestClasses;

use Filament\Resources\Pages\CreateRecord;

class TestCreateSectionWithEnumSelect extends CreateRecord
{
	protected static string $resource = TestResourceWithEnumSelect::class;
}
