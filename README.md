YouTube
=======

Um simples helper plugin (CakePHP) para obter o embed e os thumbnails padrão dos links de videos do youtube.com

Em app\Config\bootstrap.php adicione a seguinte linha:

```php
  CakePlugin::load('YouTube');
```

Em cada view que desejares usar o YouTube você deve colocar no Controller da view a linha abaixo:

```php
  public $helpers = array('YouTube.YouTube');
```

### Como Usar ###


Nas vies (app/View/\*/*.ctp), você pode usar o YouTube Helper das seguintes maneiras: 

```php

$url = 'http://www.youtube.com/watch?v=rcsJ7QPgjJw'; //link qualquer do YouTube

// Retorna o embed do YouTube no tamanho padrao
<?=$this->YouTube->getEmbed($url); ?>

// Retorna o embed do YouTube no tamanho de 250px x 150px
<?=$this->YouTube->getEmbed($url, 250, 150); ?>

//Retorna o thumbnail padrão do YouTube (120x90)
<img src='<?=$this->YouTube->getThumb($url); ?>' >

//Retorna a primeira opção de thumbnail do YouTube (120x90)
<img src='<?=$this->YouTube->getThumb($url, 1); ?>' >

//Retorna a terceira opção de thumbnail do YouTube (120x90)
<img src='<?=$this->YouTube->getThumb($url, 3); ?>' >

//Retorna o  thumbnail grande do Youtube (460x360)
<img src='<?=$this->YouTube->getThumb($url, null, 'full'); ?>' >

```
