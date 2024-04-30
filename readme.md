# Code coverage

1) Zapnout xdebug mode coverage v dockerfile místo xdebug.mode=debug

```ini
xdebug.mode=coverage
```

2) Build docker containeru
```shell
docker compose build
```
3) Spustit znova docker compose
```shell
docker compose up -d
```

4) Připojit se do containeru
```shell
docker exec -it web bash
```

5) Generovat code coverage
Jako text do konzole
```shell
vendor/bin/phpunit --coverage-text /var/www/html/tests
```

Jako HTML
```shell
vendor/bin/phpunit --coverage-html /var/www/html/log/coverage /var/www/html/tests
```

# Mock final method
1) je zapotřebí nainstalovat balíček dg/bypass-finals
```shell
composer require dg/bypass-finals --dev
```

2) Vytvořit extension pro PHPUnit