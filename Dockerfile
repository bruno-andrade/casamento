FROM wordpress:php8.2

# Update apt & install packages
RUN apt update && apt install -y unzip less sudo

# Cleanup
RUN apt-get clean
RUN rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

# Add WP-CLI 
RUN curl -o /bin/wp-cli.phar https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
COPY wp/wp-su.sh /bin/wp
COPY wp/wp-install.sh /bin/wp-install
RUN chmod +x /bin/wp-cli.phar /bin/wp /bin/wp-install

# Copy plugins
RUN mkdir -p /var/www/html/wp-content/plugins
COPY wp/utils/*.zip /var/www/html/wp-content/plugins