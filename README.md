# Syllabus IUD

## Integrantes

Katheryn Rojas Ortiz - PREELEC2202PC-TDS0032
Andres Felipe Vargas Jaramillo - PREELEC2202PC-TDS0033

## Opción Elegida

Tarea Original: Evidencia de Aprendizaje 4: Reto final

## Detalles

## Backend

Hemos agregado un Seeder para nuestra aplicacion el cual agrega unos roles, usuarios y cursos por defecto. Por ende, al hacer las migraciones sugerimos agregar el comando `--seed`.

```
php artisan migrate --seed
```

Sin los siguientes roles y sus respectivos roles, la funcionalidad de acceso por rol fallaría.

* ADMIN - 1
* COORDINATOR - 2
* STUDENT - 3

Existen 3 usuarios por defecto (si se utiliza el seed), los cuales son los siguientes.

* admin@syllabus-iud.com
** Puede listar, crear y editar usuarios.
** Puede listar, crear, editar, y elimiar cursos.
* coordinator1@syllabus-iud.com
** Puede listar, crear, editar, y elimiar cursos.
* student1@syllabus-iud.com
** Puede listar cursos.

Se han agregado unos cursos de ejemplo. El curso prerequisito no tiene ninguna relación con los cursos en la base de datos.

Para arrancar la aplicacion es necesario navegar al backend e inicializar con node.

```
cd backend
npm install && npm run dev
```

## Frontend

Para inicializar el Frontend solo es necesario instalar y luego correr.

```
cd frontend
npm install && npm run dev
```