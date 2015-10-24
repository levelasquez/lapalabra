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
