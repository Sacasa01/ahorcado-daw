# 🎮 Juego del Ahorcado

Juego clásico del ahorcado desarrollado en PHP con interfaz web moderna y atractiva.

## 📋 Instrucciones del Juego

### Objetivo
Adivinar la palabra secreta letra por letra antes de quedarte sin vidas.

### Cómo Jugar

1. **Inicio del juego**: Al cargar la página, se selecciona automáticamente una palabra al azar
2. **Adivinar letras**: Introduce una letra en el campo de texto y pulsa el botón "Adivinar"
3. **Vidas**: Comienzas con 6 vidas. Cada letra incorrecta te resta una vida
4. **Letras usadas**: Se muestran debajo del formulario para que no repitas letras
5. **Victoria**: Si completas la palabra antes de perder todas las vidas, ¡ganas!
6. **Derrota**: Si pierdes las 6 vidas, se revela la palabra correcta

### Características

- ✅ Interfaz moderna y responsive
- ✅ 13 palabras diferentes de animales
- ✅ Sistema de vidas visual
- ✅ Historial de letras usadas
- ✅ Páginas personalizadas de victoria y derrota
- ✅ Opción de jugar nuevamente

## 🚀 Instalación

### Requisitos
- Servidor web con soporte PHP (Apache, Nginx)
- PHP 7.0 o superior

### Despliegue Local

1. Clonar el repositorio o descargar los archivos
2. Colocar los archivos en el directorio del servidor web (`/var/www/html/` o similar)
3. Asegurarse de que el servidor PHP está ejecutándose
4. Abrir en el navegador: `http://localhost/index.php`

### Archivos del Proyecto
```
ahorcado/
├── index.php        # Página principal del juego
├── ganaste.php      # Página de victoria
├── perdiste.php     # Página de derrota
├── styles.css       # Estilos CSS
└── README.md        # Este archivo
```

## 🎨 Tecnologías

- **PHP**: Lógica del juego y sesiones
- **HTML5**: Estructura
- **CSS3**: Diseño y animaciones

## 👥 Autor

Proyecto desarrollado para el módulo DAW - Despliegue de Aplicaciones Web

---

**¡Diviértete jugando!** 🎉