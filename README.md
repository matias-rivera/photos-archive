# photos-archive
A photos gallery to upload all the photos you want.

To install first run the comand:

**-npm install**

this will install all the dependencies.

The next thing it's to create the database on your local database, which name is **photosarchive**. Use mysql.

After that just need to run the migrations with the command:

**-php artisan migrate**


If you have a problem with photos that don't show up, you should check out the storage link which it's set on the public folder, that folder must be synchronized with the storage folder. If they are not synchronized just run the command:

**-php artisan storage:link**

This will recreate the linked folder, but you have to delete the existing link first.
