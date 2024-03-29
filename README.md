# Laravel 10 All Flowbite

## Comenzando 🚀

_Sigue las siguientes instrucciones para clonar este repositorio en tu máquina local y poder trabajar desde el principio con la plantilla Flowbite, sistema de Roles y Permisos con Spatie, Breeze Auth, Tailwind CSS, y Docker Sail._

### Pre-requisitos 📋

Para clonar este repositorio, debes tener instalado Docker en tu computador.

Antes de comenzar verifica si tienes docker con cualquiera de los siguientes comandos en tu terminal.
```
docker --version 
docker -v
```
Si no lo tienes instalado lo pueden instalar siguiendo la documentación oficial en:  
https://www.docker.com/products/docker-desktop/

### Instalación 🔧

Sigue las siguientes instrucciones para clonar el repositorio

_Clone el repositorio_
```
git clone https://github.com/jorgehernandezch/laravel-10-flowbite.git
```
_Copie el archivo .env.example en un archivo nuevo .env con_
```
cp .env.example .env
```
_Configure todas las variables de entorno en el archivo .env_

En este proyecto, utilizaremos Dokcer Sail

_Instale y actualize todas las dependencias del proyecto con_
```
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php82-composer:latest \
    composer install --ignore-platform-reqs
```

_Levantamos la imagen docker con_
```
sail up -d
```
Caso el terminal no reconzoca el comando sail, vea la documentación oficial en:
https://laravel.com/docs/10.x/sail#configuring-a-shell-alias

_Genere una nueva key para el protecto con_
```
sail art key:generate
```
_Como el proyecto tiene dependencias JS, instalelas con_
```
sail npm install
```
_Corra las migraciones y seeders del proyecto con_
```
sail art migrate --seed
```
_Levante el servidor vite con_
```
sail npm run dev
```

Si todo está correcto puede acceder al proyecto en la dirección http://localhost:8000 con el usuario admin@admin.com - Admin. 

También puede verificar si la API está funcionando en la dirección http://localhost:8000/api/v1/login con el mismo usuario, el sistema retornará una respuesta con el token de autorización.