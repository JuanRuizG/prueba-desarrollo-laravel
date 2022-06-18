<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

# Guia de ejecucion del aplicativo

Para poder hacer uso de la pagina realizada se debe tener los siguientes items

## **Instalacion**

Descargar e instalar Laragon (Instale la version Full), dirijirse a la siguiente url para descargalo https://laragon.org/download/index.html

Una vez instalado laragon traera un paquete de software necesario para su utilizacion y adicionalmente nos creara host virtuales, los proyectos seran almacenamos en la carpeta www y se encuentran en la ruta:

- C:\laragon\www

Para dirigirse a la carpeta ejecute el siguiente comando

```bash
cd C:\laragon\www
```

Descargar el repositorio dentro de la carpeta www:

```bash
git clone https://github.com/JuanRuizG/prueba-desarrollo-laravel.git
```

# **Ejecucion de Laragon**


Al ejecutar laragon veras un panel con varios botones en la parte inferior, haz clic en iniciar todo y se mostrara la interfaz de **control de cuentas de Usuario** y da clic en Si, tambien se mostrara una interfaz de permisos de firewall de los permisos necesarios, asegurate que en el panel de laragon se vean todos los servicios en ejecucion.


## **Base de datos**

En el panel de laragon haga clic en el boton de base de datos y se ejecutara haidy, cree una nueva conexion a la base de datos y tambien una nueva base de datos llamada konecta 

revisar que se haya creado la base de datos konecta, una vez completado esa parte

abrir el proyecto en el IDE de su preferencia ya sea Sublime Text, Visual Studio Code, PhpStorm, etc

## **IDE y Creacion del archivo .env**
Una vez seleccionado el IDE de su preferencia abra el archivo .env.example y copie su contenido y cree un archivo .env en la raiz del proyecto y pegue lo que copio del archivo .env.example

Dirijase a esta parte donde veras la configuracion de la base de datos

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=root
DB_USERNAME=root
DB_PASSWORD=root
```


y reemplazela por esta

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=konecta
DB_USERNAME=root
DB_PASSWORD=
```

colocar password si lo tiene configurado con contraseña, si no lo tiene dejarlo en blanco

Luego dirijase al panel de laragon y de clic en terminal y dirijase dentro de la carpeta del proyecto y ejecute los siguientes comandos

```bash
cd C:\laragon\www\NOMBREPROYECTO
```
## Instalar dependencias

```bash
composer install
```

## Generar clave
```bash
php artisan key:generate
```
Deberias ver el siguiente mensaje (Ejemplo):
```
Application key [base64:Pwy1wa0EFUO3bPCmKKkGAQDGjSdJLDMIvsHGNuwvHUo=] set successfully.
```
## Ejecutar migraciones y seeders
Para ejecutar las migraciones y poblar la bases de datos
```bash
php artisan migrate --seed
```

Visualizara el siguiente resultado 
```bash
Migration table created successfully.
Migrating: 2014_10_12_000000_create_users_table
Migrated:  2014_10_12_000000_create_users_table
Migrating: 2014_10_12_100000_create_password_resets_table
Migrated:  2014_10_12_100000_create_password_resets_table
Migrating: 2022_06_17_202053_create_productos_table
Migrated:  2022_06_17_202053_create_productos_table
Migrating: 2022_06_17_202703_create_categorias_table
Migrated:  2022_06_17_202703_create_categorias_table
Migrating: 2022_06_17_202853_alter_productos_table
Migrated:  2022_06_17_202853_alter_productos_table
Migrating: 2022_06_17_233519_create_ventas_table
Migrated:  2022_06_17_233519_create_ventas_table
Seeding: CategoriasTableSeeder
Seeding: ProductosTableSeeder
Seeding: VentasTableSeeder
```

Iniciar el servidor
```bash
php artisan serve
```

Luego de haber ejecutado los comandos anteriores usted podra visuaizar en la consola este mensaje similar
```bash
Laravel development server started: <http://127.0.0.1:8000>
[Sun Jun  17 02:47:39 2022] PHP 7.4.19 Development Server (http://127.0.0.1:8000) started
```
 **Aplicacion**

Ahora  la url en el navegador de su preferencia y pegarla para comenzar a usar la aplicacion
