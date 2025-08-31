# Usa PHP com Apache
FROM php:8.2-apache

# Ativa mod_rewrite
RUN a2enmod rewrite

# Copia todos os arquivos do projeto para o servidor web
COPY . /var/www/html/

# Configura o Apache para usar a porta do Railway
RUN sed -i "s/Listen 80/Listen ${PORT}/" /etc/apache2/ports.conf

# Copia configuração do VirtualHost
COPY 000-default.conf /etc/apache2/sites-available/000-default.conf

# Expõe a porta do Railway
EXPOSE ${PORT}

# Comando para iniciar o Apache
CMD ["apache2-foreground"]
