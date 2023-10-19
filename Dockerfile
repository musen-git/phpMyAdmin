FROM registry.cn-beijing.aliyuncs.com/app-and-cluster/php-nginx
MAINTAINER  "musen"
WORKDIR /app/phpmyadmin

COPY phpMyAdmin-4.9.5-all-languages /app/phpmyadmin/
