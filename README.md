# Photos Archive

_A photos gallery to upload all the photos you want._


### How to install 🔧

To install first run the next commands:

```
npm install
```
```
composer install
```

these will install all the dependencies.

The next thing it's to create the database on your local database server, which name is **photosarchive**. Use mysql.

After that just need to run the migrations with the command:

```
php artisan migrate
```

The last thing is to set the storage link to the public folder, run the next command:

```
php artisan storage:link
```

This will create the linked folder.


### Cómo Instalar 🔧

Primero corre los comandos:

```
npm install
```
```
composer install
```

Estos instalarán todas las depedencias.

Lo siguiente es crear la base de datos en tu servidor local, cuyo nombre es **photosarchive**. Usa mysql.

Después solo tienes que correr las migraciones con el comando:

```
php artisan migrate
```

Lo último es setear el link del storage a la carpeta public. Solo corre el siguiente comando:
```
php artisan storage:link
```
Este creará la carpeta linkeada.


