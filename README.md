# Featured Image Remover

Plugin sencillo para remover imágenes destacadas de AMP por fecha

## Descripción

El plugin compara la fecha del post individual que se intenta cargar y si es anterior a la fecha hardcodeada en la función `ampforwp_featured_image_date` no mostrará la imagen destacada generada por el plugin `accelerated-mobile-pages`.

## Casos de Uso

Este plugin resulta útil cuando se han ingresado manualmente las imagenes destacadas en las entradas de Wordpress durante mucho tiempo y se desea utilizar la funcionalidad de AMP que las agrega automáticamente. El plugin evita la aparición de imagenes destacadas duplicadas en entradas anteriores a la fecha de implementación.
