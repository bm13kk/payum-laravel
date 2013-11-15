#!/bin/sh

#this script should deploy project

#todo install all needed

ROOT_DIR='.'
LOG_DIR="$ROOT_DIR/var/log"

#create log files - nginx can't do that by himself
touch $LOG_DIR/nginx.access.log
touch $LOG_DIR/nginx.error.log
chown www-data $LOG_DIR/nginx.*
