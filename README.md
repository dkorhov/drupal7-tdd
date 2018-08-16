# Drupal 7 TDD 

## How to run
* Install **PHP Unit** via `wget -O phpunit https://phar.phpunit.de/phpunit-4.phar` && `chmod +x phpunit`
* Place `TddTests.php` in ` sites/[your-site]/modules/tdd`
* Change `HTTP_HOST` to domain of your local site (e.g. from `sites.php`)
* Run `./phpunit sites/[your-site]/modules/tdd/TddTests.php` from Drupal root folder