<h3 align="center">SetSchema-Trait-Postgresql for Laravel</h3>

## 🧐 Sobre <a name = "about"></a>

Este pacote foi criado por conta da deficiencia em que o laravel tem de trabalhar com schemas do postgresql.
Ao utilizar a trait na model, ele automaticamente, identifica o schema ao qual a model pertence, se baseando na pasta ao qual
a model se encontra, por exemplo:

```
Models/People/userModel
```
Schema: People
Table: Users


Com isso, voce remove a necessidade de ficar colocando o table na model manualmente.
Sempre que possivel ele sera atualizado, e esta aberto para a comunidade sugerir melhorias.

## 🏁 Para utilizar o pack

Para utilizar a classe, basta instalar ela utilizando o comando do composer:

```
composer require quantumcode/setschema-trait-postgresql
```

e chamar ela dentro de uma model.

Pronto, ja é para estar funcionando.

## 🎈 Recursos

Nele existem algumas ferramentas uteis.

- BaseEnum:
  - Popula a variavel table, com o schema automaticamente.

## 🧐 Outras Bibliotecas

- [Enum-Basics-Extension](https://packagist.org/packages/quantumcode/enum-basics-extension) - Utilizado para auxiliar nas Classes de Enums;
- [Validate-Trait](https://packagist.org/packages/quantumcode/validate-trait) - Bindar os Requests automaticamente de acordo com o caminho do Service Pattern;
- [PerPage-Trait](https://packagist.org/packages/quantumcode/perpage-trait) - Padronizar a quantidade do paginate na api inteira e definir uma quantidade máxima;
- [Handler-Basics-Extension](https://packagist.org/packages/quantumcode/handler-basics-extension) - Contem tratamento das principais exceções do laravel, e contem varios responses para lhe auxiliar;

## ⛏️ Ferramentas

- [php](https://www.php.net/) - linguagem

## ✍️ Autor

- [@Luis Gustavo Santarosa Pinto](https://github.com/QuantumCode) - Idea & Initial work
