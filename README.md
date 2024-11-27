# Описание проекта

Реализация тестового задания на Laravel 10 по написанию REST API.

## Само задание

![описание тестового задания.png](public/images/img_1.png)

## Что использовал при написании проекта

- `Factories` и `Seeds` для заполнения таблиц тестовыми данными
- `apiResource` контроллер для CRUD-операций
- Слой преобразования `API Resource`
- `Form Request` для валидации данных
- Паттерн `Repository` для выборок данных из таблиц
- Для дальнейшего написания бизнес-логики создал сервисный слой`Service`

## Разворачивание проекта

1. Клонируем репозиторий:
   https://github.com/GenduDeveloper/test-task.loc.git
2. Создаем и настраиваем файл `.env` по примеру из файла`.env.example`
3. В корне проекта: `composer install`
4. Применяем миграции: `php artisan migrate`
5. Создаем тестовые данные в таблицах: `php artisan db:seed`

## Тестирование работы API (Postman)

1. Список всех марок (по алфавиту) автомобилей:

GET запрос, URL: http://127.0.0.1:8000/api/v1/models

![img_2.png](public/images/img_2.png)

2. Список всех моделей (по алфавиту) автомобилей:

GET запрос, URL: http://127.0.0.1:8000/api/v1/brands

![img_3.png](public/images/img_3.png)

3. Список всех автомобилей (с пагинацией):

GET запрос, URL: http://127.0.0.1:8000/api/v1/cars

![img_5.png](public/images/img_5.png)

4. СRUD

**Создание** автомобиля.
POST запрос, URL: http://127.0.0.1:8000/api/v1/cars

![img_6.png](public/images/img_6.png)

**Просмотр** определенного автомобиля.
GET запрос, URL: http://127.0.0.1:8000/api/v1/cars/{id}

![img_7.png](public/images/img_7.png)

**Обновление** определенного автомобиля.
PATCH запрос, URL: http://127.0.0.1:8000/api/v1/cars/{id}

![img_8.png](public/images/img_8.png)

**Удаление** определенного автомобиля.
DELETE запрос, URL: http://127.0.0.1:8000/api/v1/cars/{id}

![img_9.png](public/images/img_9.png)






