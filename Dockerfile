FROM nginx:alpine
MAINTAINER Paul TREHIOU <paul.trehiou@gmail.com>

COPY nginx.conf /etc/nginx/conf.d/default.conf

COPY ./ /usr/share/nginx/html/
