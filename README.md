# sav-lumen-demo

### ci

```
before_script:
  - composer create-project --prefer-dist laravel/lumen=5.5 blog
  - php sync.php
  - composer require savfx/savphp -d blog
script:
  - ./blog/vendor/bin/phpunit -c blog/phpunit.xml
```
