# See: https://github.com/devcontainers/images/tree/main/src/php
FROM mcr.microsoft.com/devcontainers/php:8

# Make "wwwroot" available to the Apache server.
RUN rm -rf /var/www/html && ln -s /workspace/wwwroot /var/www/html
