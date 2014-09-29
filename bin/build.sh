#!/bin/sh

app/console assets:install web --symlink
app/console assetic:dump
app/console fos:js-routing:dump
php -d memory_limit=-1 app/console cache:clear
