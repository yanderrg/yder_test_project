## Sección 3: Git
<details>
<summary>Pregunta 1: ¿Qué es Git y para qué se utiliza en el desarrollo de software?</summary>

* Git es un sistema de control de versiones distribuido. Se utiliza en el desarrollo de software para rastrear cambios en el código fuente. Permite a los desarrolladores trabajar en paralelo en diferentes características o solucionar bugs, sin interferir con el trabajo de los demás.
</details>

<details>
<summary>Pregunta 2: ¿Cuál es el comando para clonar un repositorio de Git?</summary>

El comando para clonar un repositorio de Git es `git clone`. Se utiliza seguido de la URL del repositorio que deseas clonar. Por ejemplo:

```
git clone https://github.com/username/repo.git
```
</details>

<details> <summary>Pregunta 3: Explica qué es un “branch” (rama) en Git y para qué se utiliza.</summary>

* Un “branch” (rama) en Git es una línea independiente de desarrollo. Se utiliza para trabajar en diferentes características o solucionar bugs sin afectar la rama principal (generalmente llamada “main” o “master”). 
* Una vez que el trabajo en una rama está completo, se puede fusionar de nuevo en la rama principal. 
</details>

<details> <summary>Pregunta 4: Proporciona los comandos necesarios para crear una nueva rama llamada feature-xyz, cambiar a esa rama, y luego fusionarla con la rama main.</summary>

* Para crear una nueva rama y cambiar a ella, puedes usar los siguientes comandos:
```
git branch feature-xyz
```
```
git checkout feature-xyz
```
O puedes hacer ambas cosas en un solo paso con el comando checkout y la opción -b:

```
git checkout -b feature-xyz
```

* Una vez que hayas terminado de trabajar en la rama feature-xyz, puedes fusionarla con la rama main con los siguientes comandos:
```
git checkout main
git merge feature-xyz
```
</details>

<details> <summary>Pregunta 5: ¿Qué es un “merge conflict” y cómo se resuelve?</summary>

Un “merge conflict” ocurre cuando Git no puede resolver automáticamente las diferencias entre dos ramas durante una fusión. Esto suele suceder cuando se han realizado cambios en la misma parte del mismo archivo en ambas ramas.

Para resolver un conflicto de fusión, debes editar manualmente el archivo en conflicto para decidir qué cambios conservar. Luego, puedes agregar el archivo resuelto a la etapa con git add y continuar con la fusión con git commit. 
</details>

<details> <summary>Pregunta 6: ¿Cuál es el comando para visualizar el estado actual del repositorio en Git?</summary>

El comando para visualizar el estado actual del repositorio en Git es git status. Este comando muestra qué archivos han cambiado y cuáles están listos para ser confirmados (comitted). 
</details>

<details> <summary>Pregunta 7: Explica la diferencia entre git pull y git fetch.</summary>

`git pull` y `git fetch` son dos comandos que se utilizan para obtener cambios desde un repositorio remoto. La diferencia es que `git pull` obtiene los cambios y los fusiona con tu rama actual, mientras que `git fetch` solo obtiene los cambios pero no los fusiona. Después de un `git fetch`, puedes revisar los cambios antes de decidir si quieres fusionarlos o no. 
</details>

<details> <summary>Pregunta 8: ¿Cuál es el comando para revertir el último commit en Git?</summary>

El comando para revertir el último commit en Git es: 
```
git revert HEAD
```
Este comando crea un nuevo commit que deshace los cambios realizados en el último commit. 
</details>

<details> <summary>Pregunta 9: ¿Qué es un “remote repository” y cómo se configura en Git?</summary>

Un “remote repository” es un repositorio de Git que está alojado en Internet o en alguna otra red. Se utiliza para colaborar con otros en un proyecto. Puedes configurar un repositorio remoto con el comando git remote add, seguido del nombre que quieres dar al repositorio remoto y la URL del repositorio. Por ejemplo:

```
git remote add origin https://github.com/username/repo.git
```
</details>

<details> 
<summary>Pregunta 10: Proporciona los comandos para añadir todos los cambios en los archivos al staging area y luego realizar un commit con el mensaje “Initial commit”.</summary>

Para añadir todos los cambios en los archivos al staging area, puedes usar el comando `git add .` Luego, puedes realizar un commit con el mensaje “Initial commit” con el comando `git commit -m "Initial commit"`. Aquí están los dos comandos:
```
git add .
git commit -m "Initial commit"
```
</details>
