# Clasificador de Edades

Este proyecto es una aplicación web desarrollada en Laravel que clasifica a los usuarios según su edad en diferentes categorías (bebés, niños, adolescentes, jóvenes, adultos, mayores y longevos).

## Requisitos previos

- PHP >= 8.2
- Composer
- PostgreSQL
- Node.js y npm (para gestionar los activos frontend)
- Git

## Instalación

Sigue estos pasos para configurar el proyecto en tu entorno local:

### 1. Clonar el repositorio

```bash
git clone <url-del-repositorio>
cd clfedad
```

### 2. Instalar dependencias

```bash
composer install
npm install
```

### 3. Configuración del entorno

```bash
# Copiar el archivo de configuración
copy .env.example .env
```

### 4. Generar la clave de la aplicación

```bash
php artisan key:generate
```

### 5. Configurar la base de datos

Edita el archivo `.env` con la configuración de tu base de datos PostgreSQL:

```
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=clfedad
DB_USERNAME=tu_usuario
DB_PASSWORD=tu_contraseña
```

### 6. Crear la base de datos

Crea una base de datos PostgreSQL con el nombre configurado:

```bash
# Acceder a PostgreSQL
psql -U postgres

# Crear la base de datos
CREATE DATABASE clfedad;

# Salir de PostgreSQL
\q
```

### 7. Ejecutar migraciones

```bash
php artisan migrate
```

### 8. Compilar activos (si aplica)

```bash
npm run dev
```

## Ejecutar la aplicación

### Servidor de desarrollo

```bash
php artisan serve
```

La aplicación estará disponible en: `http://localhost:8000`

### Compilación para producción (opcional)

```bash
npm run build
```

## Estructura del proyecto

- `app/Http/Controllers/` - Controladores para cada categoría de edad
- `app/Http/Middleware/` - Middleware para validar la edad del usuario
- `app/Models/` - Modelos incluyendo `EdadRegistro` para almacenar edades
- `app/Services/` - Servicios como `AgeRouterService` para enrutar según la edad
- `resources/views/` - Vistas Blade
- `routes/web.php` - Definición de rutas

## Funcionalidades

- Formulario de ingreso de edad en la página principal
- Redirección automática basada en la edad ingresada
- Registro de edades en la base de datos
- Visualización de contenido específico según la categoría de edad

## Migración de la base de datos

El proyecto incluye una tabla `edad_registros` para almacenar:
- ID
- Edad ingresada
- Clasificación asignada
- Dirección IP del usuario (opcional)

## Licencia

MIT
