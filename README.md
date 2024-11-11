Instalación
===========

## Requerimientos 
- Tener Instalado el programa de **XAMPP** 
> Si es que no lo tienes instalado lo puedes descargar desde la pagina oficial de [XAMPP](https://www.apachefriends.org/es/download.html)

## Pasos para instalar el proyecto
1. Tenemos que entrar a el repositorio que esta en **Githud** en este repositorio estara el [Proyecto](https://github.com/GriionG/Productos), descargaremos la carpeta en formato .ZIP para que después lo descomprimamos. 

![Desacarga](https://cdn.discordapp.com/attachments/876615087119548417/1079805535093801013/repositroia.png)

2. Una vez hayamos descargado el proyecto tendremos que mover el archivo descargado .ZIP a la carpeta **\xampp\htdocs** que se tuvo que haber generado al momento de descargar xampp, para llegar a esa carpeta enteramos a disco local después a la carpeta de xampp que se encuentra ahí, cuando entremos nos encontremos en la carpeta veremos bastantes carpetas sin embargo la más importante para esta instalación es la carpeta nombrada htdocs en donde descomprimiremos el archivo .ZIP y nos generadora una carpeta la cual contiene todos los archivos necesarios para visualizar el proyecto y también se encuentra la base de datos necesaria para hacer registros  

![Xampp](https://cdn.discordapp.com/attachments/876615087119548417/1127630953829904415/xampp.png)

![Htdocs](https://media.discordapp.net/attachments/876615087119548417/1127631136420540456/htdocs.png)

![Htdocs](https://media.discordapp.net/attachments/876615087119548417/1127631136420540456/.png)

3. Abriremos el programa de XAMPP y prenderemos los puertos de Apache y MySQL para poder entrar a nuestro **localhost**

![Carpeta](https://media.discordapp.net/attachments/876615087119548417/1127631136718344192/XAMPP2.png)

4. Cuando tengamos lo puertos encendidos entonces entraremos a [phpmyadmin](http://localhost/phpmyadmin/index.php?route=/server/databases) desde el navegador, la manera mas rapida es haciendo click a el boton de admin de MySQL en xampp, para hacer la base de datos en este caso no tardaremos demasiado ya que en el archivo nos proporcionan la base de datos ya viene hecha solamente deberíamos de importarla.

![myadmin](https://media.discordapp.net/attachments/876615087119548417/1127631136969982012/nueva_base_de_datos.png?width=679&height=676)

5. Para importar la base de datos tenemos que hacer una nueva base de datos, en mi caso la nombrare **bdregal** porque así es como viene nombrada, después de haber creado la base de datos iremos a el apartado de importar, daremos a la opción de seleccionar archivo y buscaremos nuestra base de datos cuando la encontremos (esta debe de venir en la dentro de la carpeta que descargamos en otra carpeta llamda base de datos) la seleccionamos y la daremos a abrir y ya habremos seleccionado el archivo después de eso iremos a la parte de bajo y clicaremos el botón de **importar**.

![Base de datos](https://media.discordapp.net/attachments/876615087119548417/1127631137238429786/nueva.png)

![Importar](https://cdn.discordapp.com/attachments/876615087119548417/1127631938828644465/importar.png)

>Opcional
6. Si es que no hemos cambiado nada del xampp o el nombre de la base de datos ya podríamos visualizar el proyecto pero si hemos hecho cambios entonces deberíamos de configurar unas cosas en un archivo para poder ver todo de la manera correcta, entraremos a la carpeta de productos y después a la capeta de bd y entraremos a el archivo **config.php**, *se recomienda abrirlo con un editor de códigos* cuando estemos dentro de ese archivo podremos ver 4 opciones una de server una de nombre otra de usuario y una de contraseña si es que hemos cambiado algo de esos lo modificaremos para poder visualizar la página correctoramente.

![Importar](https://media.discordapp.net/attachments/876615087119548417/1127631137490075739/config.png)

7. Ya podremos visualizar la página y manipularla solo tenemos que entrar a nuestro navegador y entrar desde la url con el siguiente link **http://localhost/Productos-master/index.php**.

 ![Pagina](https://media.discordapp.net/attachments/876615087119548417/1127631137758523442/Software.png?width=1371&height=676)
 

> Eso sería todo gracias por leer 
