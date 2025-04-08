Un array es una estructura de datos que permite almacenar múltiples valores en una sola variable. En PHP, los arrays pueden ser indexados, donde los índices son números enteros, o asociativos, donde los índices son cadenas de texto. Los arrays son muy útiles para manejar colecciones de datos relacionados.

En el código proporcionado, se define un array asociativo llamado $edades, donde las claves son nombres de personas y los valores son sus edades. La función asort() se utiliza para ordenar el array $edades en orden ascendente según los valores (las edades), manteniendo la asociación entre claves y valores. Luego, print_r() se utiliza para imprimir el array ordenado, mostrando las claves y sus valores correspondientes.

Para filtrar el array, se utiliza array_filter() para crear un nuevo array $EdadesFi que contiene solo las personas mayores de 18 años. La función anónima (closure) define el criterio de filtrado. Después, se imprime el array filtrado, mostrando solo las personas mayores de 18 años.

Se definen dos arrays asociativos, $datos1 y $datos2, que contienen información personal y profesional, respectivamente. array_merge() combina los dos arrays en uno solo, $datosCombinados, que contiene todas las claves y valores de ambos arrays. Finalmente, se imprime el array combinado, mostrando toda la información unificada.

Este código demuestra cómo trabajar con arrays en PHP, incluyendo cómo ordenarlos, filtrarlos y combinarlos. Los arrays son una herramienta fundamental en programación, ya que permiten manejar y manipular colecciones de datos de manera eficiente. En este ejemplo, se utilizan arrays asociativos para almacenar y procesar datos relacionados con personas, lo cual es una práctica común en el desarrollo de aplicaciones.
