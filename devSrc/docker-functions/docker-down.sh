#!/usr/bin/env bash

function docker-down-help {
    printf "(Spins down the Docker environment)";
}

function docker-down() {
    # Save the directory we started in
    ORIGINAL_DIR=${PWD};

    WORK_DIR="$(cd "$(dirname "$0")" >/dev/null 2>&1 && pwd)";

    # CD into the work dir
    cd ${WORK_DIR};

    # Bring things up
    docker-compose -f docker-compose.yml -f docker-compose.dev.yml -p eeca-meetup-jan-2023 down;

    # CD Back to original directory
    cd ${ORIGINAL_DIR};

    return 0;
}
