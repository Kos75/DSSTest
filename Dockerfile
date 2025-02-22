# Imagen base con Apache y PHP
FROM php:8.1-apache

# Copiar los archivos de la aplicación al contenedor
COPY src/ /var/www/html/

# Exponer el puerto 80
EXPOSE 80

# Iniciar el servidor Apache
CMD ["apache2-foreground"]