# marktic/partners

[![Latest Version](https://img.shields.io/github/v/release/marktic/partners)](https://github.com/marktic/partners/releases)
[![License](https://img.shields.io/github/license/marktic/partners)](LICENSE)

Sponsorship management package for Marktic SaaS applications.

## Installation

```bash
composer require marktic/partners
```

## Features

- **Sponsor** management: Create, update, delete, and list sponsors
- **SponsorCategory** management: Organize sponsors into categories
- Metadata support on sponsors (flexible JSON/array field)
- Filter sponsors by category
- Database migrations via Phinx
- Laravel-friendly via service provider

## Usage

### Register the Service Provider

```php
// config/app.php
'providers' => [
    Marktic\Partners\PartnersServiceProvider::class,
],
```

### Creating a Sponsor Category

```php
use Marktic\Partners\SponsorCategories\Actions\CreateSponsorCategory;
use Marktic\Partners\SponsorCategories\Dto\CreateSponsorCategoryDto;

$action = new CreateSponsorCategory();
$category = $action->handle(new CreateSponsorCategoryDto(name: 'Gold'));
```

### Creating a Sponsor

```php
use Marktic\Partners\Sponsors\Actions\CreateSponsor;
use Marktic\Partners\Sponsors\Dto\CreateSponsorDto;

$action = new CreateSponsor();
$sponsor = $action->handle(new CreateSponsorDto(
    name: 'Acme Corp',
    idSponsorCategory: $category->id,
    metadata: ['website' => 'https://acme.com'],
));
```

### Listing Sponsors

```php
use Marktic\Partners\Sponsors\Actions\ListSponsors;

$action = new ListSponsors();

// All sponsors
$all = $action->handle();

// Sponsors by category
$gold = $action->handle(categoryId: $category->id);
```

### Updating a Sponsor

```php
use Marktic\Partners\Sponsors\Actions\UpdateSponsor;
use Marktic\Partners\Sponsors\Dto\UpdateSponsorDto;

$action = new UpdateSponsor();
$sponsor = $action->handle($sponsor, new UpdateSponsorDto(name: 'Acme Corp Updated'));
```

### Deleting a Sponsor

```php
use Marktic\Partners\Sponsors\Actions\DeleteSponsor;

$action = new DeleteSponsor();
$action->handle($sponsor);
```

## Database Tables

| Table | Description |
|-------|-------------|
| `mkt_partners_sponsors` | Sponsors with uuid, name, metadata, and category FK |
| `mkt_partners_sponsor_categories` | Sponsor categories |

## License

MIT
