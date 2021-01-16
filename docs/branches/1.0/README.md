# Pollen Solutions - Docs Component

[![Latest Version](https://img.shields.io/badge/release-1.0.0-blue?style=for-the-badge)](https://www.presstify.com/pollen-solutions/docs/)
[![MIT Licensed](https://img.shields.io/badge/license-MIT-green?style=for-the-badge)](LICENSE.md)
[![PHP Supported Versions](https://img.shields.io/badge/PHP->=7.2-8892BF?style=for-the-badge&logo=php)](https://www.php.net/supported-versions.php)

**Docs** Component.

## Installation

```bash
composer require pollen-solutions/docs
```

## Setup

### Framework Declaration

In config/app.php file.

```php
return [
      //...
      'providers' => [
          //...
          \Pollen\Docs\DocsServiceProvider::class,
          //...
      ];
      // ...
];
```
### Framework Configuration

```php
// config/docs.php
// @see /vendor/pollen-solutions/docs/resources/config/docs.php
return [
      //...

      // ...
];
```