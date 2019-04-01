FROM logomotion/php:deploy
COPY . /srv/app
COPY deploy/parameters.yml /srv/app/app/config/
WORKDIR /srv/app

ENV SYMFONY_ENV=prod
RUN composer install --no-dev --optimize-autoloader --no-progress --no-interaction --no-scripts --prefer-dist

COPY deploy/vhost.conf /etc/apache2/sites-available/000-default.conf

RUN chown -R www-data:www-data /srv/app \
    && a2enmod rewrite

EXPOSE 80



LABEL traefik.backend=cartron traefik.frontend.rule=Host:dev.cartron.fr traefik.docker.network=web traefik.enable=true traefik.port=80 traefik.default.protocol=http