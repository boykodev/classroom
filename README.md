Symfony API application for manipulating classrooms

Instructions:
=============

### 1. Install all dependencies via composer ###

```
$ composer install
```

### 2. Create database and schema ###

```
$ ./bin/console doctrine:database:create
$ ./bin/console doctrine:schema:create
```

### 3. Start a Symfony server (or other) ###

```
$ symfony server:start
```
### 4. Access the site on <http://localhost:8000/api> ###

## Available endpoints
```
GET /api/classrooms - Retrieves the collection of Classroom resources.
POST /api/classrooms - Creates a Classroom resource.

GET /api/classrooms/{id} - Retrieves a Classroom resource.
DELETE /api/classrooms/{id} - Removes the Classroom resource.

POST /api/classrooms/{id}/activate - Activates the classroom
POST /api/classrooms/{id}/deactivate - Deactivates the classroom
```
