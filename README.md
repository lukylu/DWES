# Desarrollo Web — Materiales y ejercicios (Repositorio)

Repositorio personal con materiales, ejercicios y prácticas realizadas en la asignatura de Desarrollo Web (entorno servidor y ejemplos PHP). Está pensado como archivo de referencia y banco de ejercicios para repasar conceptos, probar snippets y practicar con páginas y scripts reales.

---

## Propósito

Recopilar los ejercicios, prácticas y exámenes realizados durante el curso para facilitar su consulta y ejecución local.

---

## Estructura del repositorio (resumen)

- `DWES_actividad_evaluable_t2/` — Actividades evaluables (segundo tema).
- `DWES_actividad_evaluable_t2/clases/` — Clases PHP relacionadas con la actividad (ej.: `Alumno.php`, `Profesor.php`).
- `ejercicios_de_practica/` — Colección de ejercicios PHP y páginas de ejemplo (formularios, cookies, sesiones, patrones, etc.).
- `extras/` — Scripts adicionales y prácticas varias (subida de archivos, login con cookie, consultas básicas a BBDD, menús).
- Archivos sueltos en la raíz: `README.md`, `index.py` (si existe), y otros recursos menores.

Ejemplo de archivos en `ejercicios_de_practica/`:
- `0-6-set-cookie.php`
- `05-post-login-basico.php`
- `academy.php`
- `biblioteca.php`
- `index.php`, `index2.php`, `index3.php`, `index4.php`, `index6.php`, `index7.php`
- `matricularAsignaturas.php`
- `piramide.php`
- `sumaResta.php`, `sumaResta2.php`
- `triangle.php`

---

## Cómo usar / Ejecutar los ejercicios PHP

1. Desde la raíz del repositorio o desde el directorio deseado, arranca el servidor embebido de PHP:

```bash
# Servir desde la raíz del repositorio (sirve todas las carpetas)
php -S localhost:8000

# O para servir sólo la carpeta de ejercicios (en otra terminal navega a la carpeta y ejecuta):
cd ejercicios_de_practica
php -S localhost:8000
```

2. Abre el navegador en `http://localhost:8000/` y visita la ruta al script que quieras probar, por ejemplo:

```
http://localhost:8000/ejercicios_de_practica/index.php
http://localhost:8000/ejercicios_de_practica/piramide.php
```

3. Alternativa: ejecutar ficheros PHP por línea de comandos si son scripts CLI:

```bash
php ejercicios_de_practica/archivo.php
```

---

## Requisitos y recomendaciones

- PHP 7.4+ o PHP 8.x recomendado.
- No se requieren dependencias externas para la mayoría de los ejercicios; son scripts sencillos.
- Los ejemplos de login y manejo de credenciales son didácticos: no usarlos en producción sin añadir validaciones, hashing de contraseñas, protección CSRF y almacenamiento seguro.

---

## Notas y mejoras posibles

- Añadir un README por carpeta (ya existe uno en `ejercicios_de_practica/`).
- Documentar cada fichero con una breve descripción de su propósito y parámetros de entrada.
- Incluir ejemplos de pruebas o screenshots para facilitar la revisión.

---

## Contribuciones

Este repositorio es personal/educativo. Si quieres proponer cambios o mejoras puedes:

- Abrir un issue describiendo la mejora.
- Hacer fork y enviar un pull request.

---

## Licencia

Material para uso personal y educativo. Añade una licencia explícita si quieres permitir reutilización más amplia.

---

**Última actualización:** Diciembre 2, 2025

Si quieres que adapte el README (añadir tu nombre, organización, enlazar a ejercicios concretos o incluir comandos adicionales), dime cómo lo prefieres y lo actualizo.
