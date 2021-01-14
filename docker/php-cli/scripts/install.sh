#!/bin/sh

# gnupg install stand for handling GPG error when install pgsql
# libpq-dev is needed to install pdo psql driver

apt-get update -yqq && apt-get install -yqq \
    lsb-release \
    gnupg \
    curl \
    git \
    iputils-ping \
    sudo \
    unzip \
    nano \
    wget \
    libpq-dev \
;

# Install postgres client
sh -c 'echo "deb http://apt.postgresql.org/pub/repos/apt $(lsb_release -cs)-pgdg main" > /etc/apt/sources.list.d/pgdg.list'
wget --quiet -O - https://www.postgresql.org/media/keys/ACCC4CF8.asc | apt-key add -
apt-get update -yqq
apt-get install -yqq postgresql-client-13