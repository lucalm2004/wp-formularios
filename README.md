# wp-formularios
# Título del Proyecto

En este readme.md tenemos la explicación de como instalar el XAMPP y WordPress en local

## Comenzando 🚀

* XAMPP és un paquet de programari lliure que conté el servidor HTTP Apache, base de dades de MySQL i eines necessàries per utilitzar el PHP i el llenguatge de programació Perl. El programa es llença sota el GNU General Public License i d'un servidor web, d'ús fàcil, capaç de servir pàgines dinàmiques. 
* WordPress és un sistema de gestió de contingut lliure i de codi obert escrit en PHP i emparellat amb una base de dades MySQL o MariaDB. Les funcions inclouen una arquitectura de connectors i un sistema de plantilles web.


### Pre-requisitos 📋

Acceder a [**Xampp**](https://www.apachefriends.org/es/download.html) y luego acceder a [**WordPress**](https://wordpress.org/download/) para descargar la ultima versión de las aplicaciónes que necesitamos.

```
XAMPP v3.3.0 y WordPress 5.8.3
```

### Instalación XAMPP 🔧

Instalar XAMPP
Nuestro tutorial de XAMPP muestra la instalación del paquete en Windows. En el caso de usar Linux o Mac OS X, el proceso de instalación puede variar.

Paso 1: Descarga
Las versiones con PHP 5.5, 5.6 o 7 se pueden descargar gratuitamente desde la página del proyecto Apache Friends.

Paso 2: Ejecutar el archivo .exe
Una vez descargado el paquete, puedes ejecutar el archivo .exe haciendo doble clic en él.

Paso 3: Desactivar el programa antivirus
Serecomienda desactivar el programa antivirus hasta que todos los componentes estén instalados, ya que puede obstaculizar el proceso de instalación.

Instalar XAMPP: desactivar el programa antivirus 
Antes de iniciar la instalación de XAMPP es recomendable desactivar temporalmente el antivirus

Paso 4: Desactivar el UAC
También el control de cuentas de usuario (User Account Control, UAC) puede interferir en la instalación, ya que limita los derechos de escritura en la unidad de disco C:\. Para saber cómo desactivar temporalmente el UCA puedes dirigirte a las páginas de soporte de Microsoft.

Instalar XAMPP: desactivar el UAC
También el Control de cuentas de usuarios (UAC) puede impedir la instalación de XAMPP

Paso 5: Iniciar el asistente de instalación
Una vez superados estos pasos, aparece la pantalla de inicio del asistente para instalar XAMPP. Para ajustar las configuraciones de la instalación se hace clic en “Next”.

Pantalla de inicio del asistente de instalación de XAMPP
Con la aparición de la pantalla de inicio del asistente da comienzo la instalación de XAMPP

Paso 6: Selección de los componentes del software
En la rúbrica “Select components” se pueden excluir de la instalación componentes aislados del paquete de software de XAMPP. Se recomienda la configuración estándar para un servidor de prueba local, con la cual se instalan todos los componentes disponibles. Confirma la selección haciendo clic en “Next”.

Instalar XAMPP: Selección de los componentes 
En el cuadro de diálogo “Select Components“ se pueden seleccionar o deseleccionar los componentes que se instalarán

Paso 7: Selección del directorio para la instalación
En este paso se escoge el directorio donde se instalará el paquete. Si se ha escogido la configuración estándar se creará una carpeta con el nombre XAMPP en C:\.

Instalar XAMPP: selección de la carpeta donde se guardarán los archivos
En un siguiente paso, se selecciona el directorio donde se instalarán los archivos
Paso 8: Iniciar el proceso de instalación
El asistente extrae los componentes seleccionados y los guarda en el directorio escogido en un proceso que puede durar algunos minutos. El avance de la instalación se muestra como una barra de carga de color verde.

Instalar XAMPP: comienzo del proceso de instalación de XAMPP
A continuación da comienzo el proceso de instalación en el cual se descomprimen los elementos de software seleccionados y se instalan en el directorio que se ha definido en los preajustes

Paso 9: Configurar Firewall
Durante el proceso de instalación es frecuente que el asistente avise del bloqueo de Firewall. En la ventana de diálogo puedes marcar las casillas correspondientes para permitir la comunicación del servidor Apache en una red privada o en una red de trabajo. Recuerda que no se recomienda usarlo en una red pública.

Configuración de Firewall
Durante la instalación será necesario reconfigurar el cortafuegos para que no bloquee componentes del servidor Apache

Paso 10: Cerrar la instalación
Una vez extraídos e instalados todos los componentes puedes cerrar el asistente con la tecla “Finish”. Para acceder inmediatamente al panel de control solo es necesario marcar la casilla que pregunta si deseamos hacerlo.

Instalar XAMPP: Cerrar la instalación
Haciendo clic en "Finish" se cierra el asistente de instalación de XAMPP

### Serviciós XAMPP 🔧

![image](https://cdn.miposicionamientoweb.es/wp-content/uploads/2017/06/panel-de-control-xampp.png)

1) Haciendo clic sólo en estos 2 botones Start ya tendrías lo necesario para instalar tu WordPress en local. Con el primero arrancas el servidor Apache, y con el segundo arrancas el gestor de base de datos.

Una vez arrancados verás que se pondrán de color verde y podrás pararlos cuando quieras haciendo clic en los botones de Stop.

![image](https://cdn.miposicionamientoweb.es/wp-content/uploads/2017/06/servidor-arrancado-apache-mysql.png)

 Servidor arrancado con Apache y MySQL
 
 2) Con el botón Explorer puedes ir directamente a la carpeta donde hayas instalado XAMPP, que en Windows por defecto ya has visto que es C:\xampp.

 3) El botón Quit es simplemente para cerrar el panel de control de XAMPP.

 4) Y en este apartado inferior se irán mostrando mensajes sobre el estado del servidor local, si se ha arrancado bien Apache o MySQL, si ha habido algún error, etc.

 Así que ya sabes, ahora sólo tienes que arrancar Apache y MySQL haciendo clic en los botones de Start…

### Creacón Base de Datos para WordPress 🔧

![image](https://cdn.miposicionamientoweb.es/wp-content/uploads/2017/06/url-phpmyadmin-local.png)

1) Nada más entrar al gestor de bases de datos de phpMyAdmin verás una ventana como ésta.

En la parte izquierda verás las bases de datos que hay creadas por defecto en tu servidor local.

 Gestión de bases de datos de MySQL con phpMyAdmin

 ![image](https://cdn.miposicionamientoweb.es/wp-content/uploads/2017/06/gestor-bases-de-datos-phpmyadmin.png)
 
2) En este mismo apartado de la izquierda, haz clic en Nueva. Verás que en la parte derecha ahora te dejará elegir el nombre de la nueva base de datos (yo he puesto nuevabd) y en Cotejamiento elige la opción utf8mb4_general_ci (te la elige pro defecto).

Haz clic en el botón Crear.

 Creando una base de datos nueva con phpMyAdmin

 ![image](https://cdn.miposicionamientoweb.es/wp-content/uploads/2017/07/creando-una-base-de-datos-nueva-con-phpMyAdmin.png)
 
 3) Ahora en el apartado de la izquierda ya tendrás tu nueva base de datos creada.

El usuario para poder gestionarla (esto te hará falta luego cuando instales WordPress) es root, que es el usuario principal que crea XAMPP, y por defecto el usuario root no tiene password.

![image](https://cdn.miposicionamientoweb.es/wp-content/uploads/2017/07/nueva-base-de-datos-creada-con-phpMyAdmin.png)

### Instalar WordPress en local 🔧

1) Lo primero que debes hacer es descargarte el fichero .zip con la última versión de WordPress desde la página oficial de WordPress.

 Descargar WordPress.org

 ![image](https://cdn.miposicionamientoweb.es/wp-content/uploads/2017/06/descargar-wordpress-org.png)
 
 Mueve este fichero a la carpeta C:\xampp\htdocs\ que es la carpeta de XAMPP que hace de servidor local.

 ![image](https://cdn.miposicionamientoweb.es/wp-content/uploads/2017/06/carpeta-instalacion-wordpress-local.png)

 Carpeta de instalación de WordPress en local

 2) Tienes que descomprimir el fichero para que extraiga el contenido directamente en C:\xampp\htdocs\.

Así se creará una carpeta nueva llamada «wordpress» que contiene todo lo necesario para instalar tu WordPress desde cero.

 3) Ahora ya puedes entrar en http://localhost/wordpress/ desde tu navegador (que sería la carpeta «wordpress» que acabas de crear).

Automáticamente te llevará a la pantalla de bienvenida para empezar la instalación y configuración de WordPress desde cero.

Haz clic en el botón ¡Vamos a ello!

![image](https://cdn.miposicionamientoweb.es/wp-content/uploads/2017/06/instalacion-de-wordpress-en-localhost.png)

 Instalación de WordPress en localhost
 
 4) En la pantalla siguiente tienes que meter los datos de la base de datos que creaste en el punto 3 tal y como están en la imagen.

Recuerda que el usuario root no tiene contraseña, así que deja este campo vacío.

Después haz clic en el botón Enviar.

![image](https://cdn.miposicionamientoweb.es/wp-content/uploads/2017/06/instalar-wordpress-local-configuracion-base-de-datos.png)

Instalación de WordPress en local: configuración de la base de datos
 
Si la configuración de la base de datos ha ido bien verás un mensaje como éste.

Ahora haz clic en Ejecutar la instalación.

![image](https://cdn.miposicionamientoweb.es/wp-content/uploads/2017/06/ejecutar-instalacion-wordpress-local.png)

 Ejecutar instalación de WordPress en local
 
5) Aquí tienes que rellenar los datos para la instalación de WordPress, como el título de tu nuevo sitio, el nombre del usuario que quieres crear para administrarlo, su password, etc.

Puedes seleccionar la opción Disuadir a los motores de búsqueda de indexar este sitio si quieres, aunque en verdad ni Google ni nadie podrá ver tu sitio estando en local (si no quieres, claro).

Después haz clic en Instalar WordPress.

![image](https://cdn.miposicionamientoweb.es/wp-content/uploads/2017/06/datos-instalacion-wordpress-local.png)

 Datos para la instalación de WordPress en local
 
6) Si todo ha ido bien verás un mensaje como éste en el que te avisa de que WordPress se ha instalado correctamente.

Ahora puedes hacer clic en el botón Acceder para ir a la ventana de login de tu WordPress.

![image](https://cdn.miposicionamientoweb.es/wp-content/uploads/2017/06/wordpress-instalado-correctamente.png)

 WordPress instalado correctamente
 
 Usa el nombre de usuario y la contraseña que elegiste antes. Haz clic en el botón Acceder y entrarás al escritorio de tu nuevo WordPress.

 ![image](https://cdn.miposicionamientoweb.es/wp-content/uploads/2017/06/login-de-wordpress.png)

 Login de WordPress
 
Y entrando desde http://localhost/wordpress/ podrás ver cómo queda tu sitio.

![image](https://cdn.miposicionamientoweb.es/wp-content/uploads/2017/06/escritorio-vista-wordpress-instalado-local.jpg

## Despliegue 📦
``` 
http://localhost acceder por primera vez
http://localhost/dashboard/ pantalla principal
http://localhost/phpmyadmin/ mysql base de datos
```

## Construido con 🛠️

_Menciona las herramientas que utilizaste para crear tu proyecto_

* [XAMPP](https://www.apachefriends.org/es/download.html) - Servidor HTTP Apache, base de datos de MySQL i PHP
* [WORDPRESS](https://wordpress.org/) - Sistema de gestor de contenido libre i codigo abierto en PHP


## Contribuyendo 🖇️

Por favor lee el [README.md](https://github.com/lucalm2004/wp-formularios/blob/main/README.md) donde encontraras el mismo contenido.

## Wiki 📖

Puedes encontrar mucho más de cómo utilizar este proyecto en nuestra [Wiki WordPress](https://ca.wikipedia.org/wiki/WordPress) y [Wiki XAMPP](https://ca.wikipedia.org/wiki/XAMPP)



## Autores ✒️

* **Luca Lusuardi** - *Trabajo Inicial* - [lucalm2004](https://github.com/lucalm2004)



## Expresiones de Gratitud 🎁

* Comenta a otros sobre este proyecto 📢
* Invita una cerveza 🍺 o un café ☕ a alguien del equipo. 
* Da las gracias públicamente 🤓.
* Envia bizum a (+34692273057)