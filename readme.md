# Bingo con TDD en PHP

Debemos simular un bingo que genere numeros del 1 al 75 al azar. Ademas debera generar cartones de 5x5 con un espacio en blanco en el medio. Los jugadores al completar el carton gritaran bingo y se detendra el juego.

- debemos llamar numeros.
- generar cartones para los jugadores.
- poder revisar los numeros que han salido.

### 1) Primer caso de prueba:
Teniendo un BingoCaller, cuando llamemos a un numero, este debe estar dentro del rango del 1 al 75 inclusive.

### 2) Segundo caso de prueba:
Si llamamos un numero 75 veces, todos los numeros del 1 al 75 deben estar presentes. Cada vez que llamamos un numero este debe ser aleatorio.

### 3) Tercer caso de prueba:
Generar los cartones del bingo. El carton debe tener 25 espacios unicos, cada columna dentro de la tarjeta debe respetar un valor minimo y un valor maximo... ademas de contar con un espacio libre en el medio.

|Columnas| Minimo | Maximo |
| - | -- | -- |
| B |  1 | 15 |
| I | 16 | 30 |
| N | 31 | 45 |
| G | 45 | 60 |
| O | 61 | 75 |

### 4) Cuarto caso de prueba:
Chequear que un jugador al gritar bingo, todos los numeros que esten en su carton hayan sido llamados. Esto nos dira si hay un ganador o todavia no!


# Respuestas a las preguntas:
1) TDD es desarrollo guiado por prueba, es para realizar software y no testeos. Ahora BDD es una metodología de desarrollo de software que se enfoca en el comportamiento del software desde la perspectiva del usuario o del sistema en lugar de centrarse en la implementación técnica.

2) TDD no tiene nada que ver con QA, ya que TDD es antes de codificar y QA se aplica despues.

3) El Desarrollo Dirigido por Pruebas (TDD) y el Desarrollo Dirigido por el Comportamiento (BDD) son enfoques de desarrollo de software que se centran en escribir pruebas antes de escribir el código de producción. A continuación, se describe cómo se lleva a cabo un desarrollo con TDD y BDD:

- Desarrollo Dirigido por Pruebas (TDD):
    - Escribir una prueba.
    - Escribir el codigo de produccion.
    - Ejecutar la prueba.
    - Refactorizar (si es necesario).
    - Repetir el ciclo.

- Desarrollo Dirigido por Comportamiento (BDD):
    - Definir el comportamiento.
    - Automatizar los escenarios.
    - Escribir codigo de produccion.
    - Ejecutar las pruebas.
    - Refactorizar y repetir.

4) Existen herramientas específicas diseñadas para facilitar la implementación de TDD y BDD.  A continuación, se mencionan algunas herramientas populares para TDD y BDD y se diferencia cómo se utilizan en cada enfoque:
- TDD:
    - PHPUnit (PHP)
    - Junit (Java)
    - NUnit (.NET)

- BDD:
    - Cucumber (varios lenguajes)
    - SpecFlow (.NET)
    - Behat (PHP)

Algunas diferencias claves en las herramientas entre TDD y BDD son:
- Sintaxis y lenguajes de las pruebas.
- Enfoque en el comportamiento.
- Colaboracion.