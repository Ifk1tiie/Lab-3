# Laboratorio #3 – Registro de Aspirantes y Subida de Archivos

## Universidad Tecnológica de Panamá

**Facultad:** Ingeniería de Sistemas Computacionales  
**Asignatura:** Desarrollo Web  
**Docente:** Ing. Irina Fong  
**Estudiante:** Adriana Mendoza  
**Fecha:** Octubre de 2026

## 1. Descripción del laboratorio

En este laboratorio se desarrolló una aplicación web para registrar aspirantes mediante un formulario. El sistema permite ingresar datos personales, verificar la información y cargar una fotografía al servidor.

Se utilizaron HTML5, PHP y Bootstrap para crear una interfaz organizada, aplicar validaciones y procesar los datos enviados.

## 2. Objetivo

Desarrollar una aplicación web que permita registrar aspirantes, validar los datos ingresados y almacenar fotografías de forma segura, utilizando PHP y formularios HTML.

## 3. Tecnologías y versiones utilizadas

| Tecnología | Uso |
|---|---|
| HTML5 | Estructura del formulario |
| PHP | Procesamiento y validación de datos |
| Bootstrap 5.3.8 | Diseño de la interfaz |
| WampServer | Servidor local |
| Visual Studio Code | Desarrollo del código |
| Apache | Ejecución del proyecto |

Las versiones exactas de PHP, Apache y WampServer deben consultarse en el equipo utilizado.

## 4. Proceso de instalación y ejecución

1. Se instaló y ejecutó WampServer.
2. Se creó la carpeta del laboratorio dentro del directorio `www`.
3. Se crearon los archivos `index.php`, `procesar.php`, `header.php`, `formulario.php` y `footer.php`.
4. Se creó la carpeta `uploaded_files` para almacenar las fotografías.
5. Se desarrolló el formulario utilizando HTML5 y Bootstrap.
6. Se programaron las validaciones mediante PHP.
7. Se ejecutó el proyecto desde el navegador utilizando localhost.

**Ruta del proyecto:**

`C:\wamp64\www\Laboratorios\Laboratorio 3`

**Dirección local:**

`http://localhost/Laboratorios/Laboratorio%203/`

## 5. Controles utilizados

| Control | Función |
|---|---|
| Text | Ingresar nombre, apellido e identificación |
| Date | Seleccionar fecha de nacimiento |
| Radio | Seleccionar sexo |
| File | Seleccionar fotografía |
| Submit | Enviar el formulario |
| Required | Indicar campos obligatorios |

## 6. Evidencias del funcionamiento

### 6.1. Formulario de registro

Se creó un formulario que solicita los datos personales del aspirante y permite seleccionar una fotografía.

**Figura 1. Formulario de registro de aspirantes.**

<img width="1721" height="850" alt="image" src="https://github.com/user-attachments/assets/70e7645a-ea2f-4591-b7a6-7b08cc2e8c50" />


### 6.2. Inserción de datos

Se ingresaron los datos de prueba de un aspirante y se seleccionó una fotografía. Al enviar el formulario, PHP procesó la información y guardó la imagen en la carpeta correspondiente.

**Figura 2. Registro exitoso del aspirante.**

<img width="1577" height="870" alt="image" src="https://github.com/user-attachments/assets/c73b17ee-c8e4-4212-a0b1-b1bc3a7b0897" />


### 6.3. Validación de edad

Se realizó una prueba utilizando una fecha de nacimiento correspondiente a una persona menor de 18 años.

El sistema rechazó el registro y mostró el mensaje indicando que la edad permitida debe estar entre 18 y 70 años.

**Figura 3. Validación de edad del aspirante.**

<img width="1037" height="373" alt="image" src="https://github.com/user-attachments/assets/9c0a681a-8198-4e5a-a5b1-6220e3ff4a79" />


### 6.4. Estandarización de datos

Se utilizaron las funciones `ucwords()`, `strtolower()` y `strtoupper()` para normalizar los nombres, apellidos e identificaciones.

Por ejemplo, el nombre `aDRIANA` se convierte en `Adriana`.

**Figura 4. Resultado de la estandarización de datos.**

<img width="948" height="802" alt="image" src="https://github.com/user-attachments/assets/ad7bc27e-cd91-441f-99c7-c69f0541d165" />
<img width="1247" height="875" alt="image" src="https://github.com/user-attachments/assets/ed5a1867-32cf-4b51-b9e7-828aa202ea6f" />


### 6.5. Almacenamiento de fotografías

Las fotografías se almacenan en la carpeta `uploaded_files`, utilizando nombres únicos para evitar sobrescribir archivos existentes.

Se incorporó un archivo `.htaccess` para restringir el acceso directo desde el navegador.

**Figura 5. Fotografías almacenadas en el servidor.**

<img width="611" height="326" alt="image" src="https://github.com/user-attachments/assets/76924158-c2f6-4482-b7b8-68be4b148f03" />


### 6.6. Modificación y eliminación

El laboratorio se enfocó en el registro, procesamiento y almacenamiento de fotografías. No se desarrollaron funciones para modificar o eliminar registros.

Por esta razón, estas operaciones no cuentan con evidencias de ejecución.

## 7. Seguridad y validaciones

Se implementaron diferentes funciones de PHP:

- `htmlspecialchars()`: convierte caracteres especiales en entidades HTML.
- `strip_tags()`: elimina etiquetas HTML y PHP.
- `trim()`: elimina espacios innecesarios.
- `ucwords()` y `strtolower()`: normalizan nombres y apellidos.
- `strtoupper()`: convierte la identificación a mayúsculas.
- `move_uploaded_file()`: permite almacenar la fotografía recibida.

También se validan los campos obligatorios, el rango de edad y las extensiones permitidas de las fotografías.

## 8. Resultados obtenidos

Durante el laboratorio se logró desarrollar un formulario funcional para registrar aspirantes.

Se comprobó el procesamiento de datos mediante PHP, la validación de edad, la normalización de información y el almacenamiento de fotografías.

También se aplicó la modularización del código mediante `include`, separando la navegación, el formulario y el pie de página.

## 9. Conclusión

Este laboratorio permitió comprender cómo funcionan los formularios web y el procesamiento de datos mediante PHP.

Se aprendió a validar información, utilizar funciones de seguridad y almacenar archivos en un servidor local.

Además, se reforzó la importancia de organizar el código en diferentes archivos para facilitar su mantenimiento y comprensión.

## 10. Referencias

- PHP Documentation. https://www.php.net/manual/es/
- Bootstrap Documentation. https://getbootstrap.com/docs/5.3/
- MDN Web Docs. https://developer.mozilla.org/es/docs/Web/HTML
- Fong, I. (2026). *Laboratorio #3*. Universidad Tecnológica de Panamá.
