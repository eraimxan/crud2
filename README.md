# crud2


# PHP CRUD Product App

Простое CRUD-приложение на PHP для управления списком товаров и комментариями к ним. Подключается к базе данных MySQL и позволяет выполнять операции: **создание, просмотр, редактирование и удаление** товаров, а также добавление комментариев к каждому товару.

---

## 📁 Структура проекта

```
crud/
├── config/
│   └── connect.php            # Подключение к базе данных
├── vendor/
│   ├── create.php             # Добавление товара
│   ├── create_comment.php     # Добавление комментария
│   ├── delete.php             # Удаление товара
│   └── update.php             # Обновление товара
├── index.php                  # Главная страница с формой и списком товаров
├── product.php                # Страница товара с комментариями
└── update.php                 # Форма редактирования товара
```

---

## 🛠️ Используемые технологии

* PHP (процедурный стиль)
* MySQL
* HTML
* phpMyAdmin (для работы с базой)

---

## 💾 Структура базы данных

### Таблица `products`:

* `id` — первичный ключ, автоинкремент
* `title` — название товара
* `description` — описание
* `price` — цена

### Таблица `comments`:

* `id` — первичный ключ
* `product_id` — внешний ключ (связь с `products.id`)
* `body` — текст комментария

> Внешний ключ с каскадным удалением: при удалении товара все его комментарии тоже удаляются.

---

## 🚀 Как запустить проект

1. Клонируйте репозиторий:

   ```bash
   git clone https://github.com/eraimxan/crud2.git
   ```
2. Запустите локальный сервер (например, через XAMPP / MAMP / OpenServer)
3. Импортируйте базу данных (SQL) через phpMyAdmin:

```sql
CREATE DATABASE crud;
USE crud;

CREATE TABLE products (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255),
  description TEXT,
  price FLOAT
);

CREATE TABLE comments (
  id INT AUTO_INCREMENT PRIMARY KEY,
  product_id INT,
  body TEXT,
  FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE CASCADE
);
```

4. Установите настройки подключения в `config/connect.php`:

```php
$connect = mysqli_connect("localhost", "root", "root", "crud");
```

5. Откройте браузер и перейдите по адресу:

```
http://localhost/crud/index.php
```

---

## ✨ Возможности

* Добавление товаров (название, описание, цена)
* Просмотр списка всех товаров
* Просмотр детальной информации о товаре и комментариях
* Добавление комментариев
* Обновление данных товара
* Удаление товаров (вместе с комментариями)

