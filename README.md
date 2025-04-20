# ☕ **Jetinno | Proyecto Final - Producción Web**

Desarrollado como parte del **Primer Parcial** de la materia **Producción Web** utilizando el framework **Laravel**. Este sitio presenta una web dinámica para **Jetinno**, empresa dedicada a máquinas de café inteligentes.

---

## ✅ **Funcionalidades**

### 🌐 **Sitio Público**
- 🏠 **Home**: Presentación de la empresa.
- 📦 **Productos**:
    - Listado con nombre, imagen, características, precio y stock.
    - Filtro por categoría.
    - Tarjetas responsivas con diseño visual.
    - Paginación automática.
- 📰 **Novedades**:
    - Sección tipo blog sobre el mundo del café.

### 🔐 **Panel de Administración**
- Login y registro mediante **Laravel Breeze**.
- CRUD completo para novedades:
    - Crear, editar, eliminar y listar (solo con login).
- Validaciones robustas y feedback visual claro.

---

## 🗃️ **Base de Datos**

### **Tablas principales**
- 🧑‍💻 `users`: `id`, `name`, `email`, `password`.
- ☕ `productos`: incluye `categoria_id` como clave foránea.
- 🗂️ `categorias`: para clasificación de productos.
- 📰 `novedads`: contiene `titulo` y `contenido`.

### **Creadas con**
- ✅ Migraciones de Laravel.
- ✅ Seeders preconfigurados:
    - `18 productos`
    - `12 novedades`
    - `4 categorías`

---

## 🛠️ **Tecnologías Utilizadas**

- ⚙️ **Laravel 12** + Breeze (Blade).
- 💻 IDE: **PhpStorm**.
- 🐳 Contenedores con **Docker + Laravel Sail**.
- 🎨 **Bootstrap 5** vía CDN.
- 📚 Buenas prácticas de POO:
    - Principio de Responsabilidad Única (SRP).
    - Controladores separados por funcionalidad.
- ✍️ Documentación con `phpDoc` en modelos y controladores.

---

## 🎨 **Diseño y UX**

- Uso de HTML semántico (`<main>`, `<section>`, etc.).
- Estilo personalizado en `resources/css/app.css`.
- Tarjetas con efectos hover, sombras y márgenes.
- Diseño completamente responsivo con Bootstrap Grid.
- Validaciones con mensajes claros y accesibles.

---

## ▶️ **Cómo Ejecutar**

1. 📁 Clonar o descargar el repositorio en tu máquina:

   ```bash
   git clone https://github.com/tuusuario/jetinno.git
   cd jetinno
   ```

2. 🐳 Levantar el entorno con Docker + Sail:

   ```bash
   ./vendor/bin/sail up -d
   ```

3. ⚙️ Configurar las variables de entorno en `.env` (ya preconfigurado):

   ```env
   DB_CONNECTION=mysql
   DB_HOST=mysql
   DB_PORT=3306
   DB_DATABASE=laravel
   DB_USERNAME=sail
   DB_PASSWORD=password
   APP_PORT=8081
   ```

4. 🔑 Generar la clave de la app:

   ```bash
   ./vendor/bin/sail artisan key:generate
   ```

5. 🧱 Migrar y cargar los datos de ejemplo:

   ```bash
   ./vendor/bin/sail artisan migrate:fresh --seed
   ```

6. 🌐 Acceder desde tu navegador:

    - Sitio web: [http://localhost:8081](http://localhost:8081)
    - PhpMyAdmin: [http://localhost:8080](http://localhost:8080)
        - Usuario: `root`
        - Contraseña: `password`

---

## 👨‍🎓 **Datos del Alumno**

- **Nombre:** Gleb Ursól
- **Materia:** Producción Web
- **Docente:** Prof. Carlos Ferrer
- **Año:** 2025
