# Três Cinco Pimba (FizzBuzz)

### Estrutura:
```
├── ...
├── src
│   ├── Classes
│   │   ├── Counter.php
│   │   └── Replacer.php
│   ├── main.php
│   └── Regras
│       ├── RegraDeMod.php
│       └── RegraDeTroca.php
├── tests
│   ├── CounterTest.php
│   └── ReplacerTest.php
├── vendor/
└── ...
```

Uma ` RegraDeTroca ` pode usar o ` check($value) ` para verificar se $value passa ou não
por uma das regras adicionadas àquela instância de Replacer.

Adiciona-se regras ao ` Replacer ` com o ` addRegra( RegraDeTroca $regras) `
recebe um objeto que implementa *RegraDeTroca*.

` Counter.php ` pode receber um objecto *Replacer*, que será verificado a cada iteração da função
` fullCount `

----

### Rodando e acessando o container Docker:

`docker-compose up -d`

`docker exec -it trescincopimba bash`


#### Scripts
<small>(Dentro do container do docker)</small><br>
<b> Testes Unitários </b>

Dentro da pasta app/

`composer run test`


<b> Script main.php </b>

Dentro da pasta app/src/

`php main.php`

-----

### Usando o PHP e Composer local
<b> Testes Unitários </b>

Dentro da pasta app/

`composer run test`

<b> Script main.php </b>

Dentro da pasta app/src/

`php main.php`

-----------
Author: [@LutzGe](https://github.com/LutzGe)