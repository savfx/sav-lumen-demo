# sav-lumen-demo

### ci

```
before_script:
  - composer global require "laravel/lumen-installer"
  - lumen new blog
  - php sync.php
  - cd blog && composer install --no-interaction
  - cd blog && composer require savfx/savphp
script:
  - cd blog && composer test
```
