#!/bin/sh

# see ./php-pre-start documentation
# https://catalog.redhat.com/software/containers/ubi8/php-73/5d400891bed8bd38099104e0?gti-tabs=unauthenticated

MOD_ROOT='/opt/app-root/src/php-pre-start'
APP_ROOT='/opt/app-root/src/omeka-s'

mv -v $MOD_ROOT/config/local.config.php $APP_ROOT/config/local.config.php
