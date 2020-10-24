# Três Cinco Pimba (FizzBuzz)

### Estrutura:
```
app
├── composer.json
├── docker-compose.yml
├── Dockerfile
├── phpunit.xml
├── src
│   ├── CountPimba.php
│   └── main.php
└── tests
    └── CountPimbaTest.php
```

### Usando o Docker:

`docker-compose up -d`

`docker exec -it trescincopimba bash`

<b> Testes Unitários </b>
Dentro da pasta app/

`composer run test`


<b> Script main.php </b>
Dentro da pasta app/src/

`php main.php`

### Usando o PHP e Composer local
<b> Testes </b>
Dentro da pasta app/

`composer run test`

<b> Script main.php </b>
Dentro da pasta app/src/

`php main.php`

-----------
Author: [@LutzGe](https://github.com/LutzGe)