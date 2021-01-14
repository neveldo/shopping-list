#!/bin/sh

# libpq-dev is needed for pdo psql driver
apt-get update -yqq && apt-get install -yqq \
    curl \
    libpq-dev \
;