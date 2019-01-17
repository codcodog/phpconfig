#!/usr/bin/env bash

# php 安装参数
# @toDo 自动化脚本安装

./configure --prefix=/usr/local/php --enable-fpm --with-fpm-user=php-fpm --with-fpm-group=php-fpm \ 
  --with-config-file-path=/usr/local/php/etc --with-config-file-scan-dir=/usr/local/php/etc/conf.d \
  --with-openssl --with-curl --with-gd --with-jpeg-dir --with-png-dir --with-zlib --with-freetype-dir \
  --enable-mbstring --with-mysqli --enable-opcache --with-pdo-mysql --enable-mysqlnd --with-mcrypt
