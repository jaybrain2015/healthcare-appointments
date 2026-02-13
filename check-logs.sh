#!/bin/bash

# Create tmp/logs directory if it doesn't exist
mkdir -p tmp/logs

# Copy Laravel logs
docker exec healthcare-app cat storage/logs/laravel.log > tmp/logs/laravel.log 2>/dev/null || echo "No laravel.log yet"

# Copy nginx error logs
docker logs healthcare-nginx 2>&1 | tail -100 > tmp/logs/nginx.log

# Copy PHP-FPM logs
docker logs healthcare-app 2>&1 | tail -100 > tmp/logs/php-fpm.log

# Copy MySQL logs
docker logs healthcare-mysql 2>&1 | tail -100 > tmp/logs/mysql.log

echo "✅ Logs copied to tmp/logs/"
echo ""
echo "📁 Available logs:"
ls -lh tmp/logs/
echo ""
echo "To view Laravel log: cat tmp/logs/laravel.log"
echo "To view Nginx log: cat tmp/logs/nginx.log"
