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
. command/use/functions/f-dockerinstall.sh
#
# Add new commands under this comment
#

# Check/install docker requrements
dockerinstall

# Check Docker permissions
comment "Check Docker permissions..."

DOCKERDENIED="denied"
# Check if you have access to Docker
DOCKERINFO="$(docker info 2>&1)"
if echo "$DOCKERINFO" | grep -q "$DOCKERDENIED"; then
    comment "Please logout from your system and log back in order to have access to Docker!" $red
else
    comment "Ok, the Docker permissions looks good!" noline $green
fi

#
# Add new commands above this comment
#
. command/use/footer.sh