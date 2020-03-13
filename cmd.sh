#!/bin/bash

set -e

if [ "$ENV" = 'DEV' ]; then
  echo "Runnning Development Server" # Запуск сервера для разработки
  exec python "app.py"
else
  echo "Runnning Production Server" # Запуск сервера для эксплутации
  exec uwsgi --http 0.0.0.0:9000 --wsgi-file /app/app.py \
  --callable app --stats 0.0.0.0:9191
fi


