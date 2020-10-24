# Três Cinco Pimba (FizzBuzz)

### Estrutura:
```
app
├── composer.json
├── Dockerfile
├── phpunit.xml
├── src
│   └── CountPimba.php
└── tests
    └── CountPimbaTest.php
```

### Usando o Docker:
<b> Testes </b>
Dentro da pasta app/

`docker-compose up -d`

### Usando o PHP local
<b> Testes </b>
Dentro da pasta app/

`./vendor/bin/phpunit --bootstrap autoload.php tests`


-----------
Author: [@LutzGe](https://github.com/LutzGe)