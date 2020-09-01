FROM hub.mlamp.cn/merp/php-nginx
MAINTAINER  "merp"
WORKDIR /app/phpmyadmin

COPY phpMyAdmin-4.9.5-all-languages /app/phpmyadmin/
