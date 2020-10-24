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
Dentro da pasta app/
`docker build --tag trescincopimba:1.0 .`
`docker run -it --name tcp trescincopimba:1.0`

### Usando o PHP local
##### Testes
Dentro da pasta app/
`./vendor/bin/phpunit --bootstrap autoload.php tests`


-----------
Author: [@LutzGe](https://github.com/LutzGe)