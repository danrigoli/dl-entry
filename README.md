Procedimiento:
    Despues de hacer git clone al repositorio, ir a donde se clono y escribir composer install.
    Luego de que se instalen todas las dependencias fijarse si el archivo .env esta descargado. 
    Si no, copiar el archivo .env.example y renombrarlo. Luego en la terminal php artisan k:g.
    Crear un Schema de mySQL llamado dleg, o sino descargarlo desde la carpeta DLEG y abrirlo en mySQL Workbench. Deberan cambiar la DB_USERNAME y DB_PASSWORD del archivo .env si son distintos.
    Luego en la terminal escribir php artisan migrate.
    php artisan serve y la pueden usarlo.
    
    Informacion para usar el seeder:
    Para automaticamente generar 10 legisladores escribir en la consola composer dump-autoload y luego php artisan db:seed.
    
    NOTAS:
    -El input country esta manejado por una REST API (Countries), asi que se necesita conectar a internet o no va a funcionar. El value es pasado a un string del nombre.
    -El filtro de Legisladores esta hecho del lado del servidor. Esto es porque, para esta cantidad de codigo era innecesario hacerlo por JS ya que tenia que reescribir los datos traidos del @foreach.
    -La mayoria del codigo esta comentado en ingles, por costumbre.
    -No hay un diseno muy estetico dado a que no encontre un diseno a seguir de su marca.
    -El uso de CSS esta la mayoria con Bootstrap y uso selects de Select2, como tambien Animate.css.
    -El input automatico lo puse atras del server para que no pueda ser hardcodeado.
    -Para el dashboard de Legisladores podria haber elegido un formato de tabla, pero, puse con 'cards' para que logre mas impacto visual, y es paginado cada 10 legisladores
