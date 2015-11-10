# La palabra hablada
## Blog sobre Tabernáculo cristiano

Blog para la iglesia **La palabra hablada** donde se podrá encontrar información relevante a la palabra de Dios.

### Tecnologías usadas

* Laravel 5.1 - **Agregado en la Versión 0.1**
* MySQL 5.5 - **Agregado en la Versión 0.2**
* Bootstrap 3.3.5 - **Agregado en la Versión 0.5**
* Jquery 2.1.4 - **Agregado en la Versión 0.5**

## Versión 0.1

* Bases del proyecto, instalación limpia de Lavarel 5.1

## Versión 0.2

* Creación de las migraciones y base de datos.
  * users
    * id
    * name
    * email
    * password
    * type
    * remember_token
    * create_at
    * update_at
  * categories
    * id
    * name
    * create_at
    * update_at
  * articles
    * id
    * title
    * content
    * user_id
    * category_id
    * create_at
    * update_at
    * slug - **Agregado en la Versión 0.6**
  * images
    * id
    * name
    * article_id
    * create_at
    * update_at
  * tags
    * id
    * name
    * create_at
    * update_at
  * article_tag
    * id
    * article_id
    * tag_id
    * create_at
    * update_at
  * password_resets
    * email
    * token
    * create_at
  * migrations
    * migration
    * batch

## Versión 0.3

* Creación de los modelos
  * Category
  * Article
  * Image
  * Tag

## Versión 0.4

* Creación de las relaciones entre modelos
  * Uno a Muchos -> Category - Article
  * Uno a Muchos -> User - Article
  * Uno a Muchos -> Article - Image
  * Muchos a Muchos -> Article - Tags

## Versión 0.5

* Creación de la plantilla main
* Creación del parcial nav para la plantilla main
* Integración de bootstrap 3.3.5
* Integración de jQuery 2.1.4

## Versión 0.6

* Agregado nuevo paquete "laravelcollective/html"
* Agregado nuevo paquete "cviebrock/eloquent-sluggable"
* Agregada nueva columna a la tabla articles => slug

## Versión 0.7

* Agregado grupo de rutas => admin
* Agregado rutas para Users:
  * admin.users.index
  * admin.users.store
  * admin.users.create
  * admin.users.destroy
  * admin.users.show
  * admin.users.update
  * admin.users.edit
* Agregado controlador => UsersController
* Agregado vista para crear usuarios => admin.users.create
* Agregado el campo 'type' en el modelo User => $fillable
* Ya se pueden crear nuevos usuarios

## Versión 0.8

* Agregada vista para ver usuarios registrados => admin.users.index
* Agregada paginación a la lista de usuarios registrados
* Modificado el parcial nav de la plantilla admin

## Versión 0.9

* Agregado nuevo paquete "laracasts/flash"
* Incluido mensajes flash al template admin
* Agregado mensaje flash al crear usuarios

## Versión 1.0

* Agregada opción para eliminar usuarios
* Agregada nueva ruta para eliminar usuarios con método GET => 'admin.users.destroy'
* Agregado boton para eliminar usuarios
* Ya se pueden eliminar usuarios

## Versión 1.1

* Agregada opción para editar usuarios
* Agregado boton para editar usuarios
* Ya se pueden editar usuarios

## Versión 1.2

* Agregado UserRequest para validar el registro de usuarios
* Modificado el controlador UserController para usar el UserRequest
* Agregado los errores a la vista admin.users.create
