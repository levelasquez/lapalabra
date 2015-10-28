# La palabra hablada
## Blog sobre Tabernáculo cristiano

Blog para la iglesia xx donde se podrá encontrar información relevante a la palabra de Dios.

### Tecnologías usadas

* Laravel 5.1

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
    * slug - **Agregado en la versión 0.6**
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
* Creación del parcial nav
* Integración de bootstrap 3.3.5
* Integración de jQuery 2.1.4

## Versión 0.6

* Agregado nuevo paquete "laravelcollective/html"
* Agregado nuevo paquete "cviebrock/eloquent-sluggable"
* Agregada nueva columna a la tabla articles => slug
