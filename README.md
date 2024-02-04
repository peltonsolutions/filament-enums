# filament-enums

`composer require peltonsolutions/filament-enums`

Example:

```
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

```
class ContentPage extends Model
{
	protected $casts = [
		'status' => ContentPageStatus::class
	];
}
```

```
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
1. Gives options from the map() function
2. Makes the field required if it's not \PeltonSolutions\LaravelEnums\Models\NullableEnum
3. Requires that the selected value matches one of the map() keys


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).