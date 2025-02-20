# Laravel 11 All Flowbite
## Getting Started 🚀
*Follow these instructions to clone this repository on your local machine and start working with the Flowbite template, Spatie Roles and Permissions system, Breeze Auth, Tailwind CSS, and Docker Sail from the beginning.*

### Prerequisites 📋
To clone this repository, you must have Docker installed on your computer.
Before starting, verify if you have Docker with any of the following commands in your terminal.
```
docker --version 
docker -v
```
If you don't have it installed, you can install it following the official documentation at:  
https://www.docker.com/products/docker-desktop/

### Installation 🔧
Follow these instructions to clone the repository

*Clone the repository*
```
git clone https://github.com/jorgehernandezch/laravel-11-flowbite.git
```

*Copy the .env.example file to a new .env file with*
```
cp .env.example .env
```

*Configure all environment variables in the .env file*
In this project, we'll use Docker Sail

*Install and update all project dependencies with*
```
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php84-composer:latest \
    composer install --ignore-platform-reqs
```

*Start the docker image with*
```
sail up -d
```
If the terminal doesn't recognize the sail command, see the official documentation at:
https://laravel.com/docs/10.x/sail#configuring-a-shell-alias

*Generate a new key for the project with*
```
sail art key:generate
```

*Since the project has JS dependencies, install them with*
```
sail npm install
```

*Run the project migrations and seeders with*
```
sail art migrate --seed
```

*Start the vite server with*
```
sail npm run dev
```

If everything is correct, you can access the project at http://localhost:8000 with the user admin@admin.com - Admin.
You can also verify if the API is working at http://localhost:8000/api/v1/login with the same user, the system will return a response with the authorization token.

---
[Jorge Edo. Hernández](https://github.com/jorgehernandezch)  
_Engineer and Web Developer_
