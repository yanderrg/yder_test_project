## Sección 2: JavaScript
<details>
<summary>Pregunta 1: Explica la diferencia entre var, let y const en JavaScript.</summary>

`var` es la forma más antigua de declarar variables en JavaScript. No está bloqueada por el alcance del bloque, lo que significa que una variable declarada con `var` es accesible fuera del bloque en el que se declaró. Esto puede llevar a errores inesperados.

`let` y `const` son formas más nuevas de declarar variables que se introdujeron en ES6. Ambas están bloqueadas por el alcance del bloque, lo que significa que solo son accesibles dentro del bloque en el que se declararon.

La diferencia entre `let` y `const` es que `let` permite reasignar la variable a un nuevo valor, mientras que `const` no lo permite. Una vez que se asigna un valor a una variable `const`, no se puede cambiar.
</details>

<details>
<summary>Pregunta 2: Escribe una función en JavaScript que invierta una cadena de texto.</summary>

```javascript
function reverseString(str) {
    return str.split('').reverse().join('');
}
console.log(reverseString("Hello World")); // Outputs: "dlroW olleH"
```

</details>

<details>
<summary>Pregunta 3: ¿Qué es el Event Loop en JavaScript y cómo funciona?</summary>

El Event Loop es un componente clave en la forma en que JavaScript maneja las operaciones asíncronas. Aunque JavaScript es un lenguaje de un solo hilo, el Event Loop permite que las operaciones como las llamadas AJAX, los temporizadores y los eventos del DOM se ejecuten de manera asíncrona.

El Event Loop funciona revisando continuamente la pila de llamadas para ver si hay funciones que necesitan ejecutarse. Si la pila de llamadas está vacía, toma la primera tarea de la cola de tareas y la empuja a la pila de llamadas para su ejecución.
</details>

<details>
<summary>Pregunta 4: Escribe un script en JavaScript que filtre los números pares de un array de números y los muestre en la consola.</summary>

```javascript
let numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9];
let evenNumbers = numbers.filter(number => number % 2 === 0);
console.log(evenNumbers); // Outputs: [2, 4, 6, 8]
```

</details>

<details>
<summary>Pregunta 5: ¿Qué es el DOM y cómo se manipula usando JavaScript?</summary>

El DOM (Document Object Model) es una representación en árbol de todos los elementos de una página web. JavaScript puede interactuar y manipular el DOM para cambiar dinámicamente el contenido y la apariencia de una página web.

Por ejemplo, puedes seleccionar elementos del DOM, cambiar su contenido, crear nuevos elementos y eliminarlos. Todo esto se puede hacer usando métodos incorporados en los objetos del DOM.
</details>

<details>

<summary>Pregunta 6: Escribe un código en JavaScript que añada un event listener a un botón con el id `myButton` para mostrar una alerta con el mensaje “Hello World” al hacer click.</summary>

```html
<button id="myButton">Click me</button>

<script>
    document.getElementById('myButton').addEventListener('click', function() {
    alert('Hello World');
});
</script>
```

</details>

<details>
<summary>Pregunta 7: Explica qué es una Promesa en JavaScript y proporciona un ejemplo básico.</summary>

Una Promesa en JavaScript es un objeto que representa el resultado eventual de una operación asíncrona. Una Promesa puede estar en uno de tres estados: pendiente, resuelta o rechazada.

Las Promesas se utilizan para manejar operaciones asíncronas de una manera más manejable que los callbacks tradicionales. Puedes encadenar Promesas, manejar errores de manera más efectiva y usar la sintaxis `async/await` para escribir código asíncrono que se vea sincrónico.
```javascript
let promise = new Promise((resolve, reject) => {
let condition = true; // Esta es una condición ficticia

    if(condition) {
        resolve("La promesa se resolvió exitosamente");
    } else {
        reject("La promesa fue rechazada");
    }
});

promise.then((message) => {
console.log(message); // Se imprime: "La promesa se resolvió exitosamente"
}).catch((error) => {
console.log(error);
});
```
</details>

<details>

<summary>Pregunta 8: Escribe una función en JavaScript que haga una petición AJAX (usando fetch) para obtener datos de una API y los muestre en un elemento con el id `result`.</summary>

```html
<div id="result"></div>

<script>
    fetch('https://api.example.com/data')
            .then(response => response.json())
            .then(data => {
                document.getElementById('result').innerText = JSON.stringify(data);
            })
            .catch(error => console.error('Error:', error));
</script>
```

</details>

<details>
<summary>Pregunta 9: ¿Cuál es la diferencia entre null, undefined y NaN en JavaScript?</summary>

`null` es un valor especial que representa la "ausencia de valor" o "sin valor". Es un valor que se asigna a una variable para representar que no tiene ningún valor.

`undefined` significa que una variable ha sido declarada pero aún no se le ha asignado un valor.

`NaN` (Not a Number) es un valor especial que se devuelve cuando una operación matemática no puede devolver un número válido.
</details>

<details>

<summary>Pregunta 10: Implementa una función en JavaScript que use localStorage para guardar una clave-valor y luego recuperarla.</summary>

```javascript
function saveToLocalStorage(key, value) {
    localStorage.setItem(key, value);
}

function getFromLocalStorage(key) {
    return localStorage.getItem(key);
}

saveToLocalStorage('name', 'John Doe');
console.log(getFromLocalStorage('name')); // Outputs: "John Doe"
```

</details>

>Se puede comprobar el funcionamiento a través del request a la ruta `http://localhost:8000/product/expensive` una vez iniciado el servidor como describe el archivo `README.md`