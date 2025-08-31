# Usa PHP com Apache
FROM php:8.2-apache

# Copia todos os arquivos do projeto
COPY . /var/www/html/

# Define o ServerName para remover o aviso
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Expõe a porta do Railway
ENV APACHE_LISTEN_PORT=$PORT
RUN sed -i "s/80/${APACHE_LISTEN_PORT}/g" /etc/apache2/ports.conf /etc/apache2/sites-available/000-default.conf

# Roda o Apache em primeiro plano
CMD ["apache2-foreground"]
