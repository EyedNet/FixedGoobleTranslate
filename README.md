# FixedGoobleTranslate
Shortcode  para problema de visualización google translater en wordpress plantilla WpRental

Con este código he solucionado un problema de visualización del plugin Google Translator en Wordpress WPRENTAL. 
El problema era debido a que el Theme añadía el shortcode dentro de una modal y hacía imposible la visualización en la zona botton-left.
Lo que he hecho es crear un add_action al hook wp_head que una vez es detectado inserta el div en el html.
