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
   ----middleware---------------
   filtrado a peticiones htpp podemos agregar seguridad en esta capa.
   Esta en el medio puede ser un celular, un sitio web en telecomunicaciones se usa con mayor frecuencia
   En laravel podemos encontrar en app/http/middleware

   el elemento mas importante es autentificacion donde esta la logica necesaria

   En http kernel se registran nuestros midlewares y cualquier funcionalidad extra que necesitamos

   Route::resource('user', 'UserController')->middleware('auth');


   proteje todos los entry points del controller no es necesario configurar para cada metodo del controlador

   ----------------ROUTES & CONTROLLERS---------------
   ROute capa encargada de manejar el flujo, apunta a una logica

   controller: contiene la logica de negocio

   se encuentran dentro de rutas
   web 
   console para comando 
   channels para email o celulare
   api

   php artisan make:controller PageController --resource
   crea el controlador con las rutas necesarias para un Crud

   php artisan make:controller PageController --resource --model=Page

   cremos el modelo y el controlador

   Validacion request
   Filtro de peticiones http en un sistema

   el codigo se lleva a un archivo separado

   -------Motor de plantillas--------------------
   Blade sistema de plantillas en Laravel
   Caracteristicas propias de un lenguaje

   En el navegador no se muestra codigo php
   crea las vistas en la carpeta storage, de framework vistas
   no se consume exceso de recursos porque se hace php y se muestra

   ---Paquete Laravel/UI-------------
   Registro y autenticacion de usuarios de un sistema Web en laravel

   composer require laravel/ui

   Sistema de login y registro, vienen como componente

   composer require laravel/ui --dev
   para instalar esta herramienta se debe ir a dev por que el resultado se subira a produccion

   php artisan 
   vue 
   react 
   bootstrap --auth
   se pueden usar para crear un login con bootstrap
   se crean archivos, controladores, rutas de autenticacion

   despues de la instalcion debemos ejecutar
   npm install
   npm run dev
   para instalar dependencias de js

   Es una alternativa

   -------------ELOQUENT---------------------------
   ORM de Laravel
   No escribimos sql
   make:model, un modelo es una representeacion de una tabla
    php artisan make:controller -h para ver todas las opciones de controller
    php artisan  make:model Post -m -f crea la migracion y el factory

    En la configuracino de mysql config/database
    +debemos cambiar el engine por InnoDB para no tener probelmas en la migracion
    las tablas deben ser en singular
    php artisan tinker 
    creamos un seeder

    codigo de factory
    'title' => $this->faker->sentence

    para generar data con tinker

    Post::factory()->count(10)->create()

    Relacion de tablas Unir datos.
    Colecciones y serialización Manipular la informacion
    Formato de datos y presentacion Formato de Datos

    php artisan migrate:refresh Borra los datos

    php artisan migrate:refresh --seed 
    para actulizar con los seed y factories

    Coleccion 
    Traer datos
    Se usa la clase coleccions cada array tiene objetos
    En original podemos ver que datos trae el objeto

    es la forma de manipular los datos con metodos

    Serializacion forma de retornar datos
    Pueden ser arrays y Json con
    toArray, toJson
    forma de presentar datos

    Formato de valores en tablas y presentacion de datos
    ------COMANDO------------
    php artisan make:model Post -mfc
    crea la migracion el factoru y el controlador

    composer require cviebrock/eloquent-sluggable

    descarga composer eloquent  en git podemos encontrar la documentacion

    Slug es colocar una url de forma amigable
    basic-new/id
    basic-new/hola-soy-el-parrafo

    Testing
    Creamos codigo de calidad
    Laravel viene preparado paratrabajar co pruebas, configura toda
    las pruebas se encuentran en tests, feature y unit
    ademas ya viene configurado el archivo de configuracion de php unit
    pruebas funciolanes

    php artisan make:test UserTest

    se crea una prueba funcional de la clase User

    php artisan make:test UserTest --unit

    para crear pruebas unitarias en app

    php vendor/phpunit/phpunit/phpunit

    para correr los test

    Testing Http
    se prueba todo lo que se muestra en el navegador
    Se prueba todo al respecto a Http
    TDD sin probamos el navegador
    con TDD ya no usamos el navegador es el ultimo paso
    Roja
    generamos una prueba 
    Verde
    La prueba funciona
    Refactoring
    Reescribmos el codigo, mejoramos el codigo y debe pasar la prueba

    pROYECTO Api new
    php artisan make:test Http/Controllers/Api/PostControllerTest

    emulamos la ruta a la que hacemos test

    php artisan make:model Post -fm

    Creamos el model con su factory y migracion

    php artisan make:controller Api/PostController --api --model=Post

    creamos el controlador con api y el model relacionado

    crearemos otra base de datos para pruebas
    cambiamos en la configuracion para sqlite 
                'database' => env('DB_DATABASE', database_path('database.sqlite')),
    por
    database_path('database.sqlite'),
    

    EL archivo de configuracion de las pruebas esta configurado para trabajar con sqlite 
    la db se creara en la pruebas y se eliminara cuando estas terminen

    Las pruebas guiana a hacer un codigo correcto
    
   */