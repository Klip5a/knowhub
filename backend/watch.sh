#!/bin/bash
while inotifywait -e modify,create,delete,move /var/www/html; do
  echo "Changes detected, restarting Apache..."
  apachectl graceful
done