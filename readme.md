# La palabra hablada
## Blog sobre Tabernáculo cristiano

Blog para la iglesia **La palabra hablada** donde se podrá encontrar información relevante a la palabra de Dios.

### Tecnologías usadas

* Laravel 5.1 - **Agregado en la Versión 0.1**
* MySQL 5.5 - **Agregado en la Versión 0.2**
* Bootstrap 3.3.5 - **Agregado en la Versión 0.5**
* Jquery 2.1.4 - **Agregado en la Versión 0.5**

## Versión 0.1

* Bases del proyecto, instalación limpia de 'Lavarel 5.1'

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
  * 'Category'
  * 'Article'
  * 'Image'
  * 'Tag'

## Versión 0.4

* Creación de las relaciones entre modelos
  * Uno a Muchos - 'Category => Article'
  * Uno a Muchos - 'User => Article'
  * Uno a Muchos - 'Article => Image'
  * Muchos a Muchos - 'Article <=> Tags'

## Versión 0.5

* Creación de la plantilla => 'admin.template.main'
* Creación del parcial nav para la plantilla => 'admin.template.main'
* Integración de 'bootstrap 3.3.5'
* Integración de 'jQuery 2.1.4'

## Versión 0.6

* Agregado nuevo paquete "laravelcollective/html"
* Agregado nuevo paquete "cviebrock/eloquent-sluggable"
* Agregada nueva columna a la tabla 'articles' => 'slug'

## Versión 0.7

* Agregado grupo de rutas => 'admin'
* Agregado rutas para Users en el grupo => 'admin':
  * 'admin.users.index'
  * 'admin.users.store'
  * 'admin.users.create'
  * 'admin.users.destroy'
  * 'admin.users.show'
  * 'admin.users.update'
  * 'admin.users.edit'
* Agregado controlador => 'UsersController'
* Agregado vista para crear usuarios => 'admin.users.create'
* Agregado el campo 'type' en el modelo 'User' => '$fillable'
* Ya se pueden crear nuevos usuarios

## Versión 0.8

* Agregada vista para ver usuarios registrados => 'admin.users.index'
* Agregada paginación a la lista de usuarios registrados
* Modificado el parcial nav de la plantilla => 'admin.temaplte.main'

## Versión 0.9

* Agregado nuevo paquete "laracasts/flash"
* Incluido mensajes flash al template admin
* Agregado mensaje flash al crear usuarios

## Versión 1.0

* Agregada opción para eliminar usuarios
* Agregada nueva ruta para eliminar usuarios con método GET en el grupo admin => 'admin.users.destroy'
* Agregado boton para eliminar usuarios
* Ya se pueden eliminar usuarios

## Versión 1.1

* Agregada opción para editar usuarios
* Agregado boton para editar usuarios
* Ya se pueden editar usuarios

## Versión 1.2

* Agregado 'UserRequest' para validar el registro de usuarios
* Modificado el controlador 'UserController' para usar el 'UserRequest'
* Agregado código para mostrar errores a la vista => 'admin.users.create' - **Eliminado en la versión 1.3**

## Versión 1.3

* Refactorizado el metodo UPDATE en el controlador UsersController
* Agregado rutas para Categories en el grupo => 'admin':
  * 'admin.categories.index'
  * 'admin.categories.store'
  * 'admin.categories.create'
  * 'admin.categories.destroy'
  * 'admin.categories.show'
  * 'admin.categories.update'
  * 'admin.categories.edit'
* Agregado controlador => 'CategoriesController'
* Agregada vista para listar categorias => 'admin.categories.index'
* Agregada vista para crear categorias => 'admin.categories.create'
* Agregado 'CategoryRequest' para validar el registro de categorias
* Ya se puede mostrar y registrar nuevas categorias
* Agregado nuevo partial para los errores => 'admin.template.partials.errors'
* Eliminado el codigo para mostrar los errores en la vista => 'admin.users.create'
* Agregado parcial => 'admin.template.partials.errors' a la plantilla => 'admin.template.main'
* Agregado footer a la plantilla => 'admin.template.main'
* Mejorado el diseño y la estetica de la plantilla => 'admin.template.main'

## Versión 1.4

* Agregado al parcial => 'admin.template.partials.nav' la ruta => 'admin.categories.index'
* Modificada vista => 'admin.categories.index' - ahora lista las categorias
* Modificado controlador => 'CategoriesController'
  * Refactorizado método => 'index'
  * Creado método => 'edit'
  * Creado método => 'update'
  * Creado método => 'destroy'
* Agregada nueva ruta para eliminar categorias con método GET en el grupo admin => 'admin.categories.destroy'
* Agregada vista para editar categorias => 'admin.categories.edit'
* Ya se puede listar, eliminar y editar categorias

## Versión 1.5

* Agregado paquete de idioma español => 'laraveles/lang-spanish'
* Traducido al español todos los mensajes del sistema
* Corregido un error en la base de datos al momento de eliminar una categoria relacionada con un articulo, agregado => '->onDelete('cascade')'

## Versión 1.6

* Agregado nuevas rutas:
  * 'admin.auth.login'
  * 'admin.auth.logout'
  * 'admin.index'
* Agregado middleware => 'auth' al grupo de rutas 'admin'
* Agregado método => 'getLogin' al controlador 'AuthController'
* Agregado atributos al controlador => 'AuthController':
  * redirectPath => '/admin';
  * loginPath => '/admin/auth/login';
* Agregada vista para loguearse => 'login.blade.php'
* Modificado parcial => 'nav.blade.php':
  * Solo se muestra si esta logueado
  * Ahora muestra el nombre de usuario en vez de 'Opciones'
  * Agregada la ruta de logout a la opción salir
* Cambiada la ruta de redireccionamiento del middleware => 'Authenticate' => 'admin.auth.login'
* Cambiada la ruta de redireccionamiento del middleware => 'RedirectIfAuthenticated' => 'admin.index'
* Ya se puede iniciar y cerrar sesión, y el panel administrativo esta restringido a los visitantes.

## Versión 1.7

* Agregado rutas para Tags en el grupo => 'admin':
  * 'admin.tags.index'
  * 'admin.tags.store'
  * 'admin.tags.create'
  * 'admin.tags.destroy'
  * 'admin.tags.show'
  * 'admin.tags.update'
  * 'admin.tags.edit'
* Agregado controlador => 'TagsController'
* Agregada vista para listar tags => 'admin.tags.index'
* Agregada vista para crear tags => 'admin.tags.create'
Agregada vista para editar tags => 'admin.tags.edit'
* Agregado 'TagRequest' para validar el registro de tags
* Agregada la ruta para tags en el parcial nav => 'admin.tags.index'
* Ya se puede mostrar, editar, eliminar y registrar nuevas tags
