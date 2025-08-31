# Usa PHP com Apache
FROM php:8.2-apache

# Copia o código para o Apache
COPY . /var/www/html/

# Define o ServerName para evitar warning
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Faz o Apache escutar a porta do Railway
RUN sed -i "s/Listen 80/Listen \${PORT}/" /etc/apache2/ports.conf

# Expõe a porta (Railway define a variável PORT)
EXPOSE 8080

# Inicia o Apache
CMD ["apache2-foreground"]
