#!/usr/bin/env bash

while true; do
    chmod -R 0777 /cache-volume;
    chmod -R 0777 /uploads-volume;
    sleep 120;
done
