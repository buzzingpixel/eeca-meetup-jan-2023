#!/usr/bin/env bash

function container-app-help() {
    printf "[some_command] (Execute command in \`app\` container. Empty argument starts a bash session)";
}

_container-app() {
    if [[ -z "${@}" ]]; then
        printf "Remember to 'exit' when you're done.\n";
        docker exec -it eeca-meetup-jan-2023-app bash;
    else
        docker exec -it eeca-meetup-jan-2023-app bash -c "${@}";
    fi
}

function container-app() {
    printf "You're working inside the 'app' container of this project.\n";

    _container-app ${allArgsExceptFirst};

    return 0;
}
