CGdroid-web
============


In order to configure the project:
- edit parameters.yml with yours

- composer install -v (to get vendors)

- sh bin/build.sh (to create symlinks)

- php app/console doctrine:database:create

- php app/console doctrine:schema:update

- php app/console fos:user:create --super-admin

