# Ejercicio Paginación.

Termine este ejercicio.

* Agregue bootstrap a la pagina de listado de paises ya creada.
* Cree una nueva pagina para que liste las ciudades de manera paginada y que incluya el nombre del pais.

Para hacer eso:
* En la consola, ejecute composer update para descargar las librerias y crear la carpeta vendor
* Cree la base de datos (si es que no esta), usando php artisan migrate:fresh
* En el seeder, agregue 2000 ciudades. Use factory
    * para el idPais use fake()->numberBetween(1,1000);
* En el controlador de Ciudad, implemente las funciones create() y store() para agregar una nueva ciudad
    * No olvide crear la vista
* En el controlador, de Ciudad, implemente las funciones index() para listar las ciudades de manera paginada.    Cuando muestre la ciudad, muestre tambien el nombre del pais


