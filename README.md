# filament-enums

filament-enums is an extension to the peltonsolutions/laravel-enums package, designed specifically for Laravel developers. This package simplifies working with enumerated values in your Filament applications, thus enhancing the readability and maintainability of your code.

Like the laravel-enums package, filament-enums supports the use of named constants, improving the organization and clarity of your code. It leverages the features provided by laravel-enums, complementing them with additional functionalities tailored for Filament.

Optionally, this package allows you to make your Enum fields nullable through the `NullableEnum` class extension.

## Install

You can install the package via composer using the following command:

``` bash
composer require peltonsolutions/filament-enums
```

Example:

```php
class ContentPageStatus extends \PeltonSolutions\LaravelEnums\Models\Enum
{
	const DRAFT = 'draft';
	const SCHEDULED = 'scheduled';
	const PUBLISHED = 'published';
	const ARCHIVED = 'archived';

	public static function map(): array
	{
		return [
			static::DRAFT => trans('content_page.statuses.draft'),
			static::SCHEDULED => trans('content_page.statuses.scheduled'),
			static::PUBLISHED => trans('content_page.statuses.published'),
			static::ARCHIVED => trans('content_page.statuses.archived'),
		];
	}
}
```

```php
class ContentPage extends Model
{
	protected $casts = [
		'status' => ContentPageStatus::class
	];
}
```

```php
class ContentPageResource extends Resource
{
	protected static ?string $model = ContentPage::class;

	public static function form(Form $form): Form
	{
		return $form
			->schema([
				\PeltonSolutions\FilamentEnums\Models\Forms\Components\EnumSelect::make('status')
						  ->default(ContentPageStatus::DRAFT);
	}
}
```

This will create a Select component that:
1. Gives options from the `map()` function
2. Makes the field required if it's not `\PeltonSolutions\LaravelEnums\Models\NullableEnum`
3. Requires that the selected value matches one of the `map()` keys

### Security

If you discover any security-related issues, please
email [security@peltonsolutions.com](mailto:security@peltonsolutions.com) instead of using the issue tracker.

## Credits

- [Nathan Pelton](https://www.nathanpelton.com)

## License

filament-enums is open-sourced software. It's licensed under the [MIT license](https://opensource.org/licenses/MIT),
which is a permissive license allowing the software to be used, modified, and shared.