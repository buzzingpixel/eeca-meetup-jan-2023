#!/usr/bin/env bash

function container-db-help() {
    printf "[some_command] (Execute command in \`db\` container. Empty argument starts a bash session)";
}

function container-db() {
    printf "You're working inside the 'db' application container of this project.\n";

    if [[ -z "${allArgsExceptFirst}" ]]; then
        printf "Remember to 'exit' when you're done.\n";
        docker exec -it --user root eeca-meetup-jan-2023-db bash;
    else
        docker exec -it --user root eeca-meetup-jan-2023-db bash -c "${allArgsExceptFirst}";
    fi

    return 0;
}
