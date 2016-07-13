# Ray.SentryModule

## Installation

### Composer install

    $ composer require kuma-guy/sentry-module
 
### Module install

```php
use Ray\Di\AbstractModule;
use Ray\SentryModule\SentryModule;

class AppModule extends AbstractModule
{
    protected function configure()
    {
        $this->install(new SentryModule('your-sentry-dsn'));
    }
}
```

### DI trait

 * [RavenClientInject](https://github.com/kuma-guy/Ray.SentryModule/blob/master/src/RavenClientInject.php) for `RavenClientInject`
