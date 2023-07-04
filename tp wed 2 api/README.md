## usando el Endpoint: /todo

- Método: GET
- Controlador: modelosApiControler
- Método del controlador: Obtenertodo
- Descripción: con este Este endpoint se obtienes todos los registros de consolas y modelos de la base de datos.
- Uso: Puede utilizarse para obtener una lista completa de todas las consolas y modelos disponibles en la API.

## usando el Endpoint: /modelos

- Método: GET
- Controlador: modelosApiControler
- Método del controlador: ObtenerlosModelos
- Descripción: con este Este endpoint se obtienes todos los registros de modelos de la base de datos.
- Uso: Puede utilizarse para obtener una lista de todas las modelos disponibles en la API.ordenadas según un criterio específico. Puede utilizarse sin order, ni sort, o con únicamente uno de los dos parámetros, de ser así nos devuelve la lista ordenada DESC; o por modelos_modelo; u ordenada ASC por modelos_modelo.

### ejemplo:

GET /modelos?order=DESC&sort=modelos_modelo
GET /modelos?order=DESC
GET /modelos?sort=modelos_modelo
GET /modelos



## usando el Endpoint: /modelos/:ID

- Método: GET
- Controlador: modelosApiControler
- Método del controlador: ObtenerElModelo
- Descripción: con este Este endpoint se obtienes todos los registros de modelo con el ID espesificado
- Uso: se utiliza para obtener la información detallada de un modelo en especifico.

## ejemplo:

GET /modelos/7

## usando el Endpoint: /modelos/:ID

- Método: DELETE
- Controlador: modelosApiControler
- Método del controlador: BorrarElModelo
- Descripción: Este endpoint elimina un Modelo específico de la base de datos segun el ID proporcionado.
- Uso: Puede utilizarse para eliminar una Modelo de la base de datos.

### ejemplo:

DELETE /modelos/7

## usando el Endpoint: /modelos

- Método: POST
- Controlador: modelosApiControler
- Método del controlador: modelosApiControler
- Descripción: Este endpoint se agrega un nuevo modelo a la base de datos.
- Uso: Puede utilizarse para insertar un nuevo modelos en la API.

### ejemplo:

POST /modelos

## ejemplo pra agregra un modelo:

{
    "fabricante": "categoria_id ",
    "modelo": "modelo",
    "especificaciones": "especificaciones",
    "imagen": "imagen",
    "historia": "historia",
    "juegos": "juegos"
}

## usando el Endpoint: /modelos/:ID

- Método: PUT
- Controlador: modelosApiControler
- Método del controlador: ActualizarElModelo
- Descripción: Este endpoint actualiza los detalles de un modelo específico según su ID proporcionado.
- Uso: Puede utilizarse para actualizar la información de un modelo en la base de datos.

### ejemplo:

PUT /modelos/7

## ejemplo pra actualizar un modelo:

{
    "fabricante": "categoria_id ",
    "modelo": "modelo",
    "especificaciones": "especificaciones",
    "imagen": "imagen",
    "historia": "historia",
    "juegos": "juegos"
}

## usando el Endpoint: /consolas

- Método: GET
- Controlador: consolaApiControler
- Método del controlador: ObtenerlasConsolas
- Descripción: Este endpoint devuelve todos los registros de las consolas de la base de datos ordenados.
- Uso: Puede utilizarse para obtener una lista de todos las consolas disponibles en la API, ordenados según un criterio específico. Puede utilizarse sin order, ni sort, o con únicamente uno de los dos parámetros, de ser así nos devuelve la lista ordenada DESC; o por categoria_id; u ordenada ASC por categoria_id.

### usando el Endpoint:

GET /consolas?sort=categoria_id &order=DESC
GET /consolas?order=ASC
GET /consolas?sort=categoria_id 
GET /consolas


## usando el Endpoint: /consolas/:ID

- Método: GET
- Controlador: consolaApiControler
- Método del controlador: ObtenerlaConsola
- Descripción: Este endpoint devuelve los detalles de una consolas en específico según el ID proporcionado.
- Uso: Puede utilizarse para obtener información detallada de una consolas en particular.

### ejemplo:

GET /consolas/1

## usando el Endpoint: /consolas/:ID

- Método: DELETE
- Controlador: consolaApiControler
- Método del controlador: BorrarlaConsola
- Descripción: Este endpoint elimina una consola en específico según el ID proporcionado.
- Uso: Puede utilizarse para eliminar una consola de la base de datos.

### ejemplo:

DELETE /consolas/1

## usando el Endpoint: /consolas

- Método: POST
- Controlador: consolaApiControler
- Método del controlador: CrearConsolas
- Descripción: Este endpoint agrega una nueva consola a la base de datos.
- Uso: Puede utilizarse para insertar una nueva consolas en la API.

### ejemplo:

POST /consolas

## ejemplo para crar una consola:

{
    "fabricante": "fabricante",
    "logo": "logo"
}

## usando el Endpoint: /consolas/:ID

- Método: PUT
- Controlador: consolaApiControler
- Método del controlador: ActualizarlaConsola
- Descripción: Este endpoint actualiza los detalles de una consola en específico según el ID proporcionado.
- Uso: Puede utilizarse para actualizar la información de una consola en la base de datos.

### Ejemplo de uso:

PUT /consolas/1

## ejemplo para actualizar una consola:

{
    "fabricante": "fabricante",
    "logo": "logo"
}

## Endpoint: /login

- el login nn pude aserlos andar