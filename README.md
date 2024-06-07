<!-- Mejora de compatibilidad del enlace de vuelta al inicio: Ver: https://github.com/othneildrew/Best-README-Template/pull/73 -->
<a name="readme-top"></a>
<!--
*** ¡Gracias por revisar la mejor plantilla de README! Si tienes una sugerencia
*** que podría mejorar esto, por favor haz un fork del repositorio y crea un pull request
*** o simplemente abre un issue con la etiqueta "enhancement".
*** ¡No olvides darle una estrella al proyecto!
*** ¡Gracias de nuevo! Ahora ve y crea algo ASOMBROSO! :D
-->



<!-- INSIGNIAS DEL PROYECTO -->
<!--
*** Estoy usando enlaces de estilo "referencia" en markdown para mayor legibilidad.
*** Los enlaces de referencia están encerrados entre corchetes [ ] en lugar de paréntesis ( ).
*** Ver la parte inferior de este documento para la declaración de las variables de referencia
*** para contributors-url, forks-url, etc. Esta es una sintaxis opcional y concisa que puedes usar.
*** https://www.markdownguide.org/basic-syntax/#reference-style-links
-->
 <p align="center">
    <a>
      <img src="https://img.shields.io/badge/firebase-a08021?style=for-the-badge&logo=firebase&logoColor=ffcd34"/>
    </a>
    <a>
      <img src="https://img.shields.io/badge/sponsor-30363D?style=for-the-badge&logo=GitHub-Sponsors&logoColor=#EA4AAA"/>
    </a>
    <a>
      <img src="https://img.shields.io/badge/NeoVim-%2357A143.svg?&style=for-the-badge&logo=neovim&logoColor=white"/>
    </a>

   <a>
      <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white"/>
    </a>
      <a>
      <img src="https://img.shields.io/badge/Shell_Script-121011?style=for-the-badge&logo=gnu-bash&logoColor=white"/>
    </a>
    <a>
      <img src="https://img.shields.io/badge/CSS-239120?&style=for-the-badge&logo=css3&logoColor=white"/>
    </a>

 <a>
      <img src="https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white"/>
    </a>
<a>
      <img src="https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white"/>
    </a>
  </p>



<!-- LOGO DEL PROYECTO -->
<br />
<div align="center">
  <a href="https://github.com/guillermo-gordon18-2000/infija-a-postfija">
    <img src="https://github.com/guillermo-gordon18-2000/infija-a-postfija/assets/83618044/43269209-6bba-40e3-af42-a0baaa0acdb1" alt="Logo" width="80" height="80">
</a>

  <h3 align="center">Conversión de Expresiones Matemáticas de Infija a Postfija</h3>

  <p align="center">
    Un increíble programa para convertir expresiones matemáticas de infija a postfija!
    <br />
    <a href="https://github.com/tu_usuario/tu_repositorio"><strong>Explora la documentación »</strong></a>
    <br />
    <br />
    <a href="https://github.com/tu_usuario/tu_repositorio">Ver Demo</a>
    ·
    <a href="https://github.com/tu_usuario/tu_repositorio/issues/new?labels=bug&template=bug-report---.md">Reportar Bug</a>
    ·
    <a href="https://github.com/tu_usuario/tu_repositorio/issues/new?labels=enhancement&template=feature-request---.md">Solicitar Funcionalidad</a>
  </p>
</div>



<!-- TABLA DE CONTENIDOS -->
<details>
  <summary>Tabla de Contenidos</summary>
  <ol>
    <li>
      <a href="#sobre-el-proyecto">Sobre el Proyecto</a>
      <ul>
        <li><a href="#características-del-proyecto">Características del Proyecto</a></li>
        <li><a href="#construido-con">Construido Con</a></li>
      </ul>
    </li>
    <li>
      <a href="#requisitos">Requisitos</a>
    </li>
    <li>
      <a href="#instrucciones-de-compilación-y-ejecución">Instrucciones de Compilación y Ejecución</a>
      <ul>
        <li><a href="#clonar-el-repositorio">Clonar el Repositorio</a></li>
        <li><a href="#compilar-el-programa">Compilar el Programa</a></li>
        <li><a href="#ejecutar-el-programa">Ejecutar el Programa</a></li>
        <li><a href="#ingresar-la-expresión">Ingresar la Expresión</a></li>
      </ul>
    </li>
    <li><a href="#contribuyendo">Contribuyendo</a></li>
    <li><a href="#licencia">Licencia</a></li>
    <li><a href="#contacto">Contacto</a></li>
    <li><a href="#reconocimientos">Reconocimientos</a></li>
  </ol>
</details>



<!-- SOBRE EL PROYECTO -->
## Sobre el Proyecto

Este proyecto, desarrollado como parte de un examen, utiliza el lenguaje de programación PHP en su versión 8.3.6 (CLI) y sigue la metodología MVC. Utiliza MySQL como base de datos.

El objetivo principal de este proyecto es facilitar el registro de asistencia para un congreso interno en la Universidad Tecnológica. El sistema incluye un login y un dashboard que muestra información sobre el registro de asistencia, eventos y asistencia de los participantes. También cuenta con una sección para los trabajadores encargados de tomar la asistencia.

### Características del Proyecto:
* **Login y Registro de Asistencia:** Permite a los usuarios iniciar sesión y registrar su asistencia a los eventos del congreso.
* **Dashboard:** Muestra información sobre el registro de asistencia, eventos y asistencia de los participantes.
* **Gestión de Eventos:** Permite la gestión de eventos, incluyendo la creación, modificación y eliminación de eventos.
* **Gestión de Usuarios:** Permite la gestión de usuarios, incluyendo la creación, modificación y eliminación de cuentas de usuario.

<p align="right">(<a href="#readme-top">volver al inicio</a>)</p>


El código define varias funciones y estructuras de datos para manejar la pila y la lista utilizadas en la conversión. Las funciones principales incluyen:

- `index()`: Este método carga la vista de inicio de sesión (Login.php).
- `Mainvista()`: Carga la vista principal (Main.php) del sistema, donde se muestran los datos y las opciones principales.
- `VistaAnalitica()`: Carga la vista de análisis (Analytics.php), que muestra información analítica sobre las conferencias y los suscriptores.
- `VistaReporte()`: Carga la vista de reporte (Report.php), donde se puede generar un reporte de asistencia para un día específico.
- `VistaSettings()`: Carga la vista de configuración (Settings-45.php), donde se pueden ajustar las configuraciones del sistema.
- `crearUsuario()`: Carga la vista para crear un nuevo usuario (CrearUsuario.php).
- `VistaLoggOut()`: Carga la vista de inicio de sesión (Login.php) al cerrar sesión.
- `IngresarPanel()`: Maneja el ingreso al panel de control del sistema.
- `IngresarPerfil()`: Maneja el ingreso al perfil del usuario.
- `Guardar()`: Registra un nuevo usuario en la base de datos.
- `Ingresar()`: Maneja el inicio de sesión de un usuario.
- `ActualizarDatos()`: Actualiza la información del usuario en la base de datos.
- `AGregar_Conferencia()`: Agrega una nueva conferencia al sistema.
- `Actualizar_Contraseña()`: Actualiza la contraseña del usuario.
- `Guardar_Asistencia()`: Registra la asistencia de un usuario a una conferencia.
- `Agregar_Staff()`: Agrega un nuevo miembro del staff al sistema.

## Configuración de correo electrónico:

-Para configurar el correo electrónico en PHP, sigue estos pasos:

1.Asegúrate de que la extensión PHPMailer esté habilitada. Puedes verificar esto en el archivo php.ini.

2.Configura los parámetros SMTP para el servidor de correo saliente. Esto incluye el host SMTP, el nombre de usuario y la contraseña si es necesario, y el puerto SMTP.

3.Habilita la extensión OpenSSL en el archivo php.ini si no está habilitada. Esto es necesario para la comunicación segura con el servidor SMTP.
## Generación de códigos QR:

Para generar códigos QR en PHP, no es necesario realizar configuraciones específicas en el archivo php.ini. Sin embargo, necesitarás asegurarte de que tengas una biblioteca PHP adecuada para generar los códigos QR. Puedes utilizar bibliotecas como endroid/qr-code o bacon/bacon-qr-code, las cuales pueden ser integradas en tu proyecto sin necesidad de configurar nada en el archivo php.ini.
## Instrucciones de Compilación y Ejecución

## Conexión a MySQL:

Para conectarte a una base de datos MySQL desde PHP, sigue estos pasos:

1.Asegúrate de que la extensión mysqli o pdo_mysql esté habilitada en tu archivo php.ini. Estas extensiones son necesarias para conectarse a una base de datos MySQL.

2.Verifica que la configuración del servidor MySQL sea correcta en el archivo php.ini, especialmente la configuración del host, el nombre de usuario y la contraseña para la conexión a la base de datos.
## Requisitos de PHP:
Es recomendable utilizar PHP 7.x o superior para aprovechar al máximo estas funcionalidades y garantizar la compatibilidad con las últimas características y mejoras de seguridad.

1. **Clonar el repositorio:**

   ```sh
   git clone https://github.com/guillermo-gordon18-2000/Proyecto-Desarrollo-VII-congreso
   cd congreso

2. Crear el Servidor php :
    ```sh
      php -S 0.0.0.0:8000


