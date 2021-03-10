<?php
echo "Hello laravel";
/* Implementaciond e api con tdd 
    Laravel esta construido en php.
    Laravel es una herramietna que permite desarrollar un sistema web.
    Laravel tiene por defecto inicio de sessiones por fb. es un framework con muchas ventajas.
    capas
    ruta        ruta            ruta
    vista       controller      midldleware
                view            controller
                                View

                                Proyectos
    - Crud con laravel
    - Registro de post
    - API
    software:
    apache, php, mysql, Visual, git, composer. 
    
     composer global require laravel/installer

     para instalar laravel globalmente

    `para iniciar un proyecto
    laravel new ciclo <nombre del proyecto>

    se descarga todo el sistema de archivos de laravel
    con wamp debes ingresar a la carpeta public para visualizar el proyecto

    el punto de entrada es public->index

    se cargan las calses
    arranca laravel
    el sistema comiienza a ejecutar la peticiones
    rutas
    definimos las rutas

    vendor(vendedores)
    laravel usa dependencias y se instalan todas las necesarias

    vista
    tiene las vistas


    php artisan
    comando para ver comaandos

    todo la bd se trabaja en migrations

    DAtabase
    php artisan migrate 
    para migrar las bd
    laravel ya viene con tablas integradas

   php artisan route:list
   para ver las rutas

   php artisan make:controller UserController
   crea un controlador

   -----CREAR DATA EN LARAVEL----------
   en consola escribimos php artisan tinker

   se abre una consola donde podemos controlar la data que podemos generar

   User::factory()->count(12)->create();

   genera doce usuarios del tipo user, con a ayuda de factori que esta en la carpeta database.

   -----------form--------
   @csrf indicamos que es nuestro formulario
   */