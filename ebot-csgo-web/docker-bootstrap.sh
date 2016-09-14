#!/bin/bash

if [ ! -f .installed ]
then
    sleep 30

    php symfony doctrine:insert-sql
    php symfony guard:create-user --is-super-admin admin@ebot admin password
    php symfony cc

    touch .installed
fi

apache2-foreground
