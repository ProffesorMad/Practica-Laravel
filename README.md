## 📌 Descripción del proyecto ##

Este proyecto es una aplicación web desarrollada con Laravel que permite la gestión de proyectos y alumnos, incorporando autenticación de usuarios, control de permisos, traducciones a varios idiomas y una interfaz clara y funcional.

La aplicación diferencia entre un usuario administrador y usuarios normales, mostrando distintas opciones según el tipo de usuario.

## 🚀 Instalación y puesta en marcha ##

### ** Clonar el repositorio 
git clone https://github.com/ProffesorMad/Practica-Laravel.git

### ** Acceder al proyecto
cd Practica-Laravel

### ** Instalar dependencias
composer install

### ** Configurar el archivo .env
Duplicar el archivo .env.example y renombrarlo a .env.

Configurar la base de datos según el entorno local:

*DB_DATABASE=practicalaravel*

*DB_USERNAME=root*

*DB_PASSWORD=*

### ** Generar la clave de la aplicación
php artisan key:generate

### ** Ejecutar migraciones y seeders
php artisan migrate --seed

### ** Iniciar el servidor
php artisan serve


La aplicación estará disponible en:
*http://127.0.0.1:8000*

## 👤 Usuarios y roles##

### ** 🔑 Usuario administrador ** ###

El administrador se identifica por el correo:

_admin@gmail.com_

Contraseña:

_admin1209_

El administrador puede:

-Crear alumnos

-Editar alumnos

-Eliminar alumnos

-Ver todas las secciones

## 👥 Usuario normal

Cualquier usuario registrado con otro correo.

Puede:

-Ver alumnos

-Ver proyectos

No puede:

-Crear alumnos

-Editar alumnos

-Eliminar alumnos

Las opciones no autorizadas no se muestran en la interfaz.

## 🔐 Autenticación

La aplicación utiliza Laravel Breeze para:

-Registro de usuarios

-Inicio de sesión

-Cierre de sesión

## 🌍 Sistema de idiomas

La aplicación es multilenguaje y soporta:

-🇪🇸 Español

-🇬🇧 Inglés

-🇫🇷 Francés

El idioma puede cambiarse mediante un desplegable con banderas, y el idioma seleccionado:

-Se guarda en sesión

-Se mantiene al navegar por la aplicación

-Traduce todos los textos de la aplicación

## 🧑‍🎓 Gestión de alumnos (CRUD)

Funcionalidades:

-Listado de alumnos

-Crear alumno (solo admin)

-Editar alumno (solo admin)

-Eliminar alumno (solo admin)

La tabla:

-Está centrada

-Muestra acciones solo al administrador

-Tiene botones separados y bien organizados

## 📁 Gestión de proyectos

-Los proyectos se cargan mediante seeders

-Se muestran en una vista dedicada

-Cada proyecto tiene:

  -Nombre
  
  -Descripción
  
-Incluye botón para volver al dashboard

## 🧭 Dashboard

El panel principal muestra:

-Acceso a Proyectos

-Acceso a Alumnos

Incluye botones diferenciados y diseño sencillo y claro.

## 🎨 Diseño y usabilidad

-Botones claramente diferenciados

-Navegación intuitiva

-Interfaz responsive

## 📂 Estructura del proyecto

-app/Models → Modelos

-app/Http/Controllers → Controladores

-resources/views → Vistas Blade

-resources/lang → Traducciones

-database/seeders → Seeders

## ✍️ Autor

ProffesorMad

Proyecto desarrollado como práctica de Laravel.

