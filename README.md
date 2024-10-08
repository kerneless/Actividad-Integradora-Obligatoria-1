# Actividad Integradora Obligatoria Módulo 1

## Consigna

```
Crear un sitio web implementando los contenidos abordados en el módulo.
La aplicación deberá contener (si fueron haciendo los trabajos de cada unidad, la mayoría del contenido ya lo tienen):

    Sitio maquetado en HTML5 y CSS3.

    Una funcionalidad que utilice el método GET para enviar datos. 
    
    Se deben mostrar, al menos tres datos diferentes, creados con variables.

    Emplear al menos una estructura de control.

    Implementar funciones del lenguaje (por ejemplo: mail).


```

## Resolución 

### Sitio maquedado en HTML y CSS

El sitio cuenta con una estructura HTML pensada a partir rodear un body particular para cada página con un header y un footer importados con la función include. Todos los estilos CSS se encuentran concentrados en el archivo estilos.css. 

Las páginas en cuestión son:

1. index.php: muestra una galería dinámica a partir de llamar a una función escrita en el archivo mostrar_foto.php.

2. contacto.php:  cuenta con un formulario de contacto.

3. acerca.php:  cuenta con una sección que detalla brevemente un perfil. 

4. detalle.php: muestra una foto con su título y año.


### Funcionalidad que utilice el método GET para enviar datos.

En mostrar_foto.php se generan etiquetas "a" cuyo href es utilizado para enviar el id de la foto vía método GET a detalle.php


### Mostrar al menos tres datos diferentes creados con variables

1) En los archivos index.php, acerca.php y contacto.php se declara siempre la variable $titulo antes de incluir el archivo header.php, en donde es consumida para mostrar de manera dinámica el título en la etiqueta title y h2.

2) En el archivo acerca.php se declara la variable $informacion, que cuenta con un string que es mostrado en la etiqueta "p" del apartado que muestra el perfil de mi abuelo.

3) En el archivo acerca.php se declara la variable $foto, que cuenta con un la dirección de la fotografía de mi abuelo que es mostrado en la etiqueta "img" del apartado mencionado en el punto anterior.


### Emplear al menos una estructura de control.

Voy a resaltar tres estructuras de control utilizadas en mi código:

1) En el archivo mostrar_photo.php se utiliza un foreach que recorre el array $fotos para poder ir generando cada uno de los componentes que conforman la galería de imágenes mostrada en index.php.

2) En el archivo detalle.php se utilizan dos ifs para validar que haya llegado un id mediante el método GET u así evitar que el usuario vea errores de PHP en su navegador:

	a) Hay un if que valida que exista el idFoto, si se cumple la condición, este es guardado en la variable $idFoto (el cuál por defecto es un string vacío).
	b) Hay un if que valida que el idFoto sea distinto a string vacío. Si se cumple la condición se utiliza para obtener la foto en cuestión. Si no se cumple se mostrará el mensaje de error .

### Implementar funciones del lenguaje

En este proyecto utilizo varias funciones del lenguaje PHP. Algunas de ellas son:

1) mail(), en el archivo enviar_mensaje.php
2) isset() en el archivo detalle.php
