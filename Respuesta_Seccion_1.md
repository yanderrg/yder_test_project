## Sección 1: Symfony
<details>
<summary>Pregunta 1: Describe los pasos básicos para levantar un proyecto en Symfony</summary>

**Instalación con el binario de Symfony:**

**Linux**:
1. Descarga el binario de Symfony en tu directorio `/usr/local/bin`
```
sudo wget https://get.symfony.com/cli/installer -O - | bash
```
2. Mueve el binario a tu PATH para poder acceder a él globalmente
```
sudo mv /root/.symfony/bin/symfony /usr/local/bin/symfony
```
3. Una vez instalado el binario, puedes crear un nuevo proyecto Symfony con el siguiente comando:
```
symfony new my_project_name
```

**Windows**:
1. Descarga el archivo .exe del binario de Symfony desde la página oficial de Symfony.
2. Ejecuta el archivo .exe para instalar el binario de Symfony.
3. Abre la terminal (CMD o PowerShell) y ejecuta el siguiente comando para crear un nuevo proyecto Symfony:
```
symfony new my_project_name
```

**Mac**:
1. Abre la terminal y ejecuta el siguiente comando para descargar el binario de Symfony:
```
curl -sS https://get.symfony.com/cli/installer | bash
```
2. Mueve el binario a tu PATH para poder acceder a él globalmente:
```
mv /root/.symfony/bin/symfony /usr/local/bin/symfony
```
3. Crea un nuevo proyecto Symfony con el siguiente comando:
```
symfony new my_project_name
```
4. Ejecuta el servidor (local) con el comando:
```
symfony server:start
```

**Instalación con Composer**

**Linux | Mac | Windows**:
1. Descarga e instala Composer
2. Crea un nuevo proyecto con el siguiente comando:
```
composer create-project symfony/website-skeleton my_project_name
```
</details>
<details><summary>Pregunta 2: Codificación</summary>

**Controlador**

El controlador `HelloController` se encuentra en `src/Controller/HelloController.php`. Este controlador maneja la ruta `/hello/{name}` y devuelve un saludo personalizado. Si no se proporciona un nombre, el controlador devolverá "Hello World".


**Prueba**

La prueba HelloControllerTest se encuentra en `tests/Controller/HelloControllerTest.php`. Esta prueba verifica que la ruta `/hello/{name}` devuelve el saludo correcto.
</details>

<details>
<summary>Pregunta 3: Arquitectura de Symfony</summary>

**Un proyecto Symfony típico se organiza en varios directorios y archivos**.

`bin/`: Contiene los scripts ejecutables, incluyendo la consola de Symfony.

`config/`: Contiene todos los archivos de configuración de la aplicación.

`migrations`: Gestiona los cambios en la estructura de las base de datos.Cada vez que se hace un cambio en la estructura de la base de datos, como añadir una nueva tabla o modificar una existente, se crea una nueva migración que describe ese cambio. Luego se puede ejecutar esa migración para aplicar el cambio a la base de datos.

`public/`: Es el directorio raíz del servidor web y contiene todos los archivos accesibles públicamente, como imágenes, estilos y scripts JavaScript.

`src/`: Contiene todo el código PHP de la aplicación, organizado en Bundles. Aquí es donde se colocan los controladores, entidades, formularios, etc.

`templates/`: Contiene todas las plantillas de la aplicación, normalmente escritas en Twig, el motor de plantillas de Symfony.

`translations`: Esta carpeta contiene los archivos de traducción de la aplicación. Symfony utiliza estos archivos para traducir los mensajes de la aplicación a diferentes idiomas. Cada archivo de traducción corresponde a un idioma y contiene una lista de mensajes en el idioma original y su traducción al idioma correspondiente.

`tests/`: Contiene todas las pruebas de la aplicación.

`vendor/`: Contiene todas las librerías de terceros, incluyendo Symfony mismo. Este directorio se genera automáticamente cuando se instalan las dependencias con Composer.

`.env`: Es un archivo que define las variables de entorno para la aplicación.
</details>

<details>
<summary>Pregunta 4: Codificación</summary>

El controlador `AdditionController` se encuentra en `src/Controller/Math/AdditionController.php`. Este controlador maneja la ruta `/add/{a}/{b}` y devuelve la suma de dos números utilizando el servicio `AdditionService`.
</details>
<details>
<summary>Pregunta 5: Codificación</summary>

Para esta pregunta, he creado una clase `User`, un formulario `UserType`, un repositorio `UserRepository` y un controlador `UserController`.
Para probar el endpoint /user/new, necesitas enviar una solicitud HTTP POST a este. La solicitud debe incluir un cuerpo con los datos del usuario en formato JSON:
```
curl --header "Content-Type: application/json" \
--request POST \
--data '{"username":"nombre_de_usuario","email":"correo@ejemplo.com"}' \
http://localhost:8000/user/new
```
</details>
<details>
<summary>Pregunta 6: Dependency Injection</summary>

1. La Inyección de Dependencias es un patrón de diseño que se utiliza para minimizar el acoplamiento entre diferentes partes de una aplicación y mejorar su mantenibilidad y flexibilidad. En lugar de que las clases creen las dependencias que necesitan para funcionar, estas dependencias se “inyectan” en las clases que las necesitan.
2. La configuración de la Inyección de Dependencias en Symfony se realiza principalmente a través del archivo services.yaml, que se encuentra en el directorio config
   En Symfony, esto se maneja a través del contenedor de servicios. Un servicio es cualquier objeto que realiza una tarea. El contenedor de servicios es una herramienta que administra la creación y distribución de estos servicios.

```yaml
# config/services.yaml
services:
    App\Service\Mailer: 
      # Aquí puedes configurar tus servicios

    App\Controller\RegistrationController:
        arguments:
            - '@App\Service\Mailer'
```
>Symfony automáticamente registra y configura servicios para las clases en ciertos directorios, como src/Controller y src/Service, por lo que no siempre necesitas configurar manualmente cada servicio.
</details>
<details>
<summary>Pregunta 7: Codificación</summary>

Para esta pregunta, he creado una entidad `Product`, un repositorio `ProductRepository` y un controlador `ProductController`.

La base de datos se encuentra configurada a través de la variable de entorno DATABASE_URL en el archivo .env: `DATABASE_URL="mysql://root@127.0.0.1:3306/product"`

Para probar el endpoint utilizar:
```
curl --request GET http://localhost:8000/products/expensive
```

Este comando te devolverá una lista de productos con un precio mayor a 100 en formato JSON. Se utiliza las fixtures de Doctrine para crear la tabla product y llenarla con datos ficticios.
</details>
<details>
<summary>Pregunta 8: Event Dispatcher</summary>

El `Event Dispatcher` en Symfony es como un sistema de mensajería. Permite que diferentes partes del código se “hablen” entre sí sin estar directamente conectadas. Cuando algo importante sucede en la aplicación, puede “despachar” un evento. Luego, cualquier parte del código que esté interesado en ese evento puede “escucharlo” y reaccionar en consecuencia, por ejemplo, el evento `kernel.request`, se despacha justo antes de que Symfony empiece a manejar una solicitud HTTP.
</details>
<details>
<summary>Pregunta 9: Codificación</summary>

Para resolver la problemática se crean las clases `NotExampleEmail` y `NotExampleEmailValidator`

**NotExampleEmail**

Es una restricción personalizada que hereda de la clase Constraint de Symfony. Esta restricción se aplica al campos de correo electrónico de la entidad User para asegurar que el correo electrónico no pertenezca al dominio “example.com”.

**NotExampleEmailValidator**

Es el validador para la restricción NotExampleEmail. Este validador implementa el método validate, que se invoca cuando se valida un campo de correo electrónico de la entidad User.

Para usar este validador personalizado en la entidad User, se aplica la restricción `NotExampleEmail` al campo de correo electrónico de la entidad User de la siguiente manera:
use App\Validator\Constraints\NotExampleEmail;

```php
class User
{
/**
* @NotExampleEmail
*/
private $email;

    // ...
}
```
</details>
<details>
<summary>Pregunta 10: Codificación</summary>

Para esta pregunta, he creado un `EventSubscriber` en Symfony llamado `RequestSubscriber`.

Esta clase implementa la interfaz `EventSubscriberInterface` de Symfony, lo que significa que puede suscribirse a eventos del sistema. En este caso, se suscribe al evento `kernel.request`, que se dispara en cada solicitud HTTP que llega a la aplicación.

El constructor de `RequestSubscriber` recibe una instancia de `LoggerInterface`, que es el servicio de logging de Symfony. Este servicio se inyecta automáticamente gracias al contenedor de servicios de Symfony.

El método `onKernelRequest` se ejecuta cada vez que se dispara el evento `kernel.request`. Este método recibe un objeto `RequestEvent`, que contiene información sobre la solicitud HTTP actual. En este método, se registra la URL de la página visitada en el archivo de log utilizando el servicio de logging.

El método estático `getSubscribedEvents` define a qué eventos se suscribe esta clase. En este caso, se suscribe al evento `kernel.request` y especifica que el método onKernelRequest debe ser ejecutado cuando se dispara este evento.
</details>