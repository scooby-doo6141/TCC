# Usa PHP com Apache
FROM php:8.2-apache

# Copia todos os arquivos do projeto para o servidor web
COPY . /var/www/html/

# Habilita mod_rewrite caso precise
RUN a2enmod rewrite

# Define a porta do Railway como variável de ambiente (Railway geralmente usa 8080)
ENV PORT 8080
EXPOSE 8080

# Ajusta o ServerName para suprimir avisos
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Inicia o Apache em primeiro plano
CMD ["apache2-foreground"]
