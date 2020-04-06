#!/bin/bash

# Check if the submodule 'command' exists
if [ ! -d "command/use" ]; then
    # if not fetch the submodule `command`
    git submodule sync
    git submodule update --init
    echo;
fi

# Import the useful files
. command/use/header.sh
. command/use/functions/f-comment.sh
. command/use/functions/f-command.sh
#
# Add new commands under this comment
#

# Check if you are in Docker container
comment "Check if you are in Docker container..." title
if grep docker /proc/1/cgroup -qa; then
    comment "Yes, please run this script outside the Docker contanier!" $red
else
    SQLFILE="../../database/daw-php.sql"
    comment "Check if SQL file: $reset$SQLFILE$yellow exists..."
    if [ -f "$SQLFILE" ]; then
        comment "Yes, importing database..."
        command cd ../..
        
        command docker-compose exec mysql bash -c "mysqladmin -u daw-php -pdaw-php -h mysql.daw-php.local -f drop daw-php"
        command docker-compose exec mysql bash -c "mysqladmin -u daw-php -pdaw-php -h mysql.daw-php.local create daw-php"
        command docker-compose exec mysql bash -c "mysql -u daw-php -pdaw-php -h mysql.daw-php.local daw-php < $SQLFILE"
        
        command cd app/tools
    else
        comment "No, please upload the SQL file: $reset$SQLFILE$yellow!" $red
    fi
fi

#
# Add new commands above this comment
#
. command/use/footer.sh