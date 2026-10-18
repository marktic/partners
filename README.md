# marktic/partners

[![Latest Version](https://img.shields.io/github/v/release/marktic/partners)](https://github.com/marktic/partners/releases)
[![License](https://img.shields.io/github/license/marktic/partners)](LICENSE)

Partnership management package for Marktic SaaS applications.

## Installation

```bash
composer require marktic/partners
```

## Features

- **Partner** management: Create, update, delete, and list partners
- **Category** management: Organize partners into categories
- Partner labels and URLs for linkable logo display
- Metadata support on partners (flexible JSON/array field)
- Filter partners by category
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

### Creating a Partner Category

```php
use Marktic\Partners\Categories\Actions\CreateCategory;

$action = new CreateCategory();
$category = $action->handle('Gold');
```

### Creating a Partner

```php
use Marktic\Partners\Partners\Actions\CreatePartner;

$action = new CreatePartner();
$partner = $action->handle(
    name: 'Acme Corp',
    label: 'Acme',
    url: 'https://acme.com',
    idCategory: $category->id,
    metadata: ['logo' => 'https://acme.com/logo.png'],
);
```

### Listing Partners

```php
use Marktic\Partners\Partners\Actions\ListPartners;

$action = new ListPartners();

// All partners
$all = $action->handle();

// Partners by category
$gold = $action->handle(categoryId: $category->id);
```

### Updating a Partner

```php
use Marktic\Partners\Partners\Actions\UpdatePartner;

$action = new UpdatePartner();
$partner = $action->handle($partner, name: 'Acme Corp Updated');
```

### Deleting a Partner

```php
use Marktic\Partners\Partners\Actions\DeletePartner;

$action = new DeletePartner();
$action->handle($partner);
```

## Database Tables

| Table | Description |
|-------|-------------|
| `mkt_partners_partners` | Partners with uuid, name, metadata, and category FK |
| `mkt_partners_categories` | Partner categories |

## License

MIT
