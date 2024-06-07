# Respuesta al test de Conocimientos Generales para Desarrollador Fullstack Junior

Este proyecto es una aplicación web construida con Symfony. Contiene varios controladores que manejan diferentes rutas y funcionalidades.
## Requisitos

- PHP 7.4 o superior
- Composer
- Symfony CLI

## Instalación

1. Clona este repositorio en tu máquina local usando 
```
git clone https://github.com/username/repo.git
```
2. Navega a la carpeta del proyecto con `cd test_project`.
3. Instala las dependencias del proyecto con 
```
composer install
```

## Uso

Para iniciar el servidor de desarrollo de Symfony, ejecuta: 
```
symfony server:start
```
o sino tienes instalado symfony:
```php
php -S localhost:8000 -t public
```
Luego, puedes acceder a la aplicación en tu navegador web en `http://localhost:8000`.

Aquí hay una descripción de los controladores más importantes y cómo usarlos:

### Controlador de saludo

Ruta: `/hello/{name}`

Este controlador devuelve un saludo personalizado. Si no se proporciona un nombre, devuelve "Hello World".

### Controlador de usuario

Ruta: `/user/new`

Este controlador maneja la creación de nuevos usuarios. Cuando se envía un formulario válido, normaliza los datos del usuario y los guarda en 'users.json'. Si el formulario no es válido, devuelve los errores en una respuesta JSON.

### Controlador de producto

Ruta: `/product/expensive`

Este controlador devuelve una lista de productos con un precio mayor a un cierto valor en formato JSON.

### Controlador de matemáticas

Ruta: `/add/{a}/{b}`

Este controlador suma dos números y devuelve el resultado.

## Pruebas

Para ejecutar las pruebas de la aplicación, usa el comando `php bin/phpunit`.

