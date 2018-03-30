FROM nginx:alpine
label maintainer="Paul TREHIOU <paul@nyanlout.re>"

COPY nginx.conf /etc/nginx/conf.d/default.conf

COPY ./ /usr/share/nginx/html/
