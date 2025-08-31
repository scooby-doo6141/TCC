# Usa PHP com Apache
FROM php:8.2-apache

# Copia todos os arquivos do seu projeto para o servidor web
COPY . /var/www/html/

# Expõe a porta 80 para o acesso externo
EXPOSE 80
