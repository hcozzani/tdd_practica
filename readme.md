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


# Respuestas a las preguntas: