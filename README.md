Menu beer district http://www.beerdistrict.fr/
=========
(Website for big screen like TV)

To launch the application :
```bash
$ composer install (in parameters.yml you need to fill mailer_user)
$ php bin/console doctrine:schema:update --force
$ php bin/console doctrine:fixtures:load
$ npm install
$ bower install
$ gulp
$ php bin/console serv:star (or php bin/console server:start)
```

go to : http://127.0.0.1:8000 (admin credentials : admin/admin)
