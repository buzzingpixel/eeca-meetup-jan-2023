#!/usr/bin/env bash

function docker-up-help() {
    printf "(Brings Docker environment online)";
}

function docker-up() {
    # Save the directory we started in
    ORIGINAL_DIR=${PWD};

    WORK_DIR="$(cd "$(dirname "$0")" >/dev/null 2>&1 && pwd)";

    # CD into the work dir
    cd ${WORK_DIR};

    # Ensure our proxy network has been created
    docker network create proxy >/dev/null 2>&1;
    docker network create traefik-dev_default >/dev/null 2>&1;

    # Bring things up
    docker-compose -f docker-compose.yml -f docker-compose.dev.yml -p eeca-meetup-jan-2023 up -d;

    # CD Back to original directory
    cd ${ORIGINAL_DIR};

    return 0;
}
