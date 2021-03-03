# Carrossel with Glider.js

Em português:
O [Glider.js](https://nickpiscitelli.github.io/Glider.js/), o Carousel em javascript puro (vanilla.js) para WordPress.

In English:
The [Glider.js](https://nickpiscitelli.github.io/Glider.js/), Carousel in pure javascript (vanilla.js) for WordPress 

En español:
El [Glider.js](https://nickpiscitelli.github.io/Glider.js/), el carrusel en javascript puro (vanilla.js) para WordPress 

## Project setup
Em português:
Baixe o plugin e adicionar no seu site/blog em WordPress, no diretorio: wp-content/plugins/ e no painel de admin do WordPress ative o plugin e divirta se.

In English:
Download the plugin and add it to your WordPress site/blog, in the directory: wp-content/plugins/ and in the WordPress admin panel activate the plugin and have fun.

En español:
Descarga el complemento y agrégalo a tu sitio/blog de WordPress, en el directorio: wp-content/plugins/ y en el panel de administración de WordPress activa el complemento y diviértete.

## Como usar carousel?
Em português:
Adicionar o código abaixo na pagina, post e template em que deseja aplicar.

In English:
Add the shortcode below to the page, post and template you want to apply. 

En español:
Agregue el código a continuación a la página, publicación y plantilla que desea aplicar. 

```
[gfw]
```


## Atributos:

### category
```
[gfw category="slug-taxonomy-carousel"]
```
Em português:
Predefinido: ""
category: para selecionar o Carousels de uma categoria, nesse atributo preenche o slug da categoria desejada.

In English:
Default: ""
category: to select the Carousels of a category, in this attribute fills the slug of the desired category. 

En español:
Defecto: "" 
category: para seleccionar los carruseles de una categoría, en este atributo se llena el slug de la categoría deseada. 

### desktop-show
```
[gfw desktop-show="3"]
```
Em português:
Predefinido: "1"
desktop-show: define o numero de quantos item serão exibidos do carousel em resoluçao com largura de 1200px ou superior.

In English:
Default: "1"
desktop-show: defines the number of how many items will be displayed in the carousel in a resolution of 1200px or higher. 

En español:
Defecto: "1" 
desktop-show: define la cantidad de elementos que se mostrarán en el carrusel con una resolución de 1200px o superior. 

### laptop-show
```
[gfw laptop-show="3"]
```
Em português:
Predefinido: "1"
laptop-show: define o numero de quantos item serão exibidos do carousel em resoluçao com largura de 1024px ou superior.

In English:
Default: "1"
laptop-show: defines the number of how many items will be displayed in the carousel in a resolution of 1024px or higher. 

En español:
Defecto: "1" 
laptop-show: define la cantidad de elementos que se mostrarán en el carrusel con una resolución de 1024px o superior.

### tablet-show
```
[gfw tablet-show="3"]
```
Em português:
Predefinido: "1"
tablet-show: define o numero de quantos item serão exibidos do carousel em resoluçao com largura de 768px ou superior.

In English:
Default: "1"
tablet-show: defines the number of how many items will be displayed in the carousel in a resolution of 768px or higher. 

En español:
Defecto: "1" 
tablet-show: define la cantidad de elementos que se mostrarán en el carrusel con una resolución de 768px o superior. 

### mobile-show
```
[gfw mobile-show="1"]
```
Em português:
Predefinido: "1"
mobile-show: define o numero de quantos item serão exibidos do carousel em resoluçao com largura de 767px ou inferior.

In English:
Default: "1"
mobile-show: defines the number of how many items will be displayed in the carousel in a resolution of 767px or less. 

En español:
Defecto: "1" 
mobile-show: define la cantidad de elementos que se mostrarán en el carrusel con una resolución de 767px o menos. 

### desktop-scroll
```
[gfw desktop-scroll="4"]
```
Em português:
Predefinido: "1"
desktop-scroll: define o numero de quantos item serão trocados do carousel em resoluçao com largura de 1200px ou superior.

In English:
Default: "1"
desktop-scroll: defines the number of how many items will be exchanged from the carousel in a resolution of 1200px or higher.  

En español:
Defecto: "1" 
desktop-scroll: define la cantidad de elementos que se intercambiarán desde el carrusel en una resolución de 1200px o superior. 

### laptop-scroll
```
[gfw laptop-scroll="3"]
```
Em português:
Predefinido: "1"
laptop-scroll: define o numero de quantos item serão trocados do carousel em resoluçao com largura de 1024px ou superior.

In English:
Default: "1"
laptop-scroll: defines the number of how many items will be exchanged from the carousel in a resolution of 1024px or higher.  

En español:
Defecto: "1" 
laptop-scroll: define la cantidad de elementos que se intercambiarán desde el carrusel en una resolución de 1024px o superior. 

### tablet-scroll
```
[gfw tablet-scroll="2"]
```
Em português:
Predefinido: "1"
tablet-scroll: define o numero de quantos item serão trocados do carousel em resoluçao com largura de 768px ou superior.

In English:
Default: "1"
tablet-scroll: defines the number of how many items will be exchanged from the carousel in a resolution of 768px or higher.  

En español:
Defecto: "1" 
tablet-scroll: define la cantidad de elementos que se intercambiarán desde el carrusel en una resolución de 768px o superior. 

### mobile-scroll
```
[gfw mobile-scroll="2"]
```
Em português:
Predefinido: "1"
mobile-scroll: define o numero de quantos item serão trocados do carousel em resoluçao com largura de 767px ou inferior.

In English:
Default: "1"
mobile-scroll: defines the number of how many items will be exchanged from the carousel in a resolution of 767px or less. 

En español:
Defecto: "1" 
mobile-scroll: define la cantidad de elementos que se intercambiarán desde el carrusel en una resolución de 767px o menos.

### dots
```
[gfw dots="false"]
```
Em português:
Predefinido: "true"
dots: é um atributo booleano, true para exibir os dots de navegação abaixo do carousel. false para ocultar.

In English:
Default: "true"
dots: is a Boolean attribute, true to display the navigation dots below the carousel. false to hide. 

En español:
Defecto: "true" 
dots: es un atributo booleano, true para mostrar los puntos de navegación debajo del carrusel. false para ocultar.

### arrows
```
[gfw arrows="true"]
```
Em português:
Predefinido: "false"
arrows: é um atributo booleano, true para exibir as flechas de navegação para o proximo ou o anterior carousel. false para ocultar.

In English:
Default: "false"
arrows: is a Boolean attribute, true to display the navigation arrows for the next or previous carousel. false to hide. 

En español:
Defecto: "false" 
arrows: es un atributo booleano, true para mostrar las flechas de navegación del carrusel anterior o siguiente. false para ocultar.

### design
```
[gfw design="text-full-image"]
```
Em português:
Predefinido: "only-images"
design: é para escolher o layout do carrossel, para esse atributo, pode escolher as seguintes opções: "text-full-image"; "text-half-image"; "only_text"; "small-thumb"; "only-images";
Qualquer valor diferente dessas opções, sera considerado o valor predefinido: "only-images".

In English:
Default: "only-images"
design: it is to choose the carousel layout, for this attribute, you can choose the following options: "text-full-image"; "text-half-image"; "only_text"; "small-thumb"; "only-images";
Any value other than these options will be considered the default value: "only-images". 

En español:
Defecto: "only-images" 
design: é para escolher o layout do carrossel, para esse atributo, pode escolher as seguintes opções: "text-full-image"; "texto-meia-imagem"; "only_text"; "polegar pequeno"; "apenas imagens";
Qualquer valor diferente dessas opções, ser considerado o valor predefinido: "only-images". 

### resolution
```
[gfw resolution="full"]
```
Em português:
Predefinido: "full"
resolution: é para escolher a resolução da imagem cadastrada do carrossel, para esse atributo, pode escolher as seguintes opções: "thumbnail"; "medium"; "medium_large"; "large"; "full";
Qualquer valor diferente dessas opções, sera considerado o valor predefinido: "full".

In English:
Default: "full"
resolution: it is to choose the carousel layout, for this attribute, you can choose the following options: "thumbnail"; "medium"; "medium_large"; "large"; "full";
Any value other than these options will be considered the default value: "only-images". 

En español:
Defecto: "full" 
resolution: é para escolher a resolução da imagem cadastrada do carrossel, para esse atributo, pode escolher as seguintes opções: "thumbnail"; "medium"; "medium_large"; "large"; "full";
Qualquer valor diferente dessas opções, ser considerado o valor predefinido: "full".

### spaces
```
[gfw spaces="20"]
```
Em português:
Predefinido: "0"
spaces: é valor numerico para definir espaco entre itens do carrocel.

In English:
Default: "0"
spaces: is a numeric value to define space between items in the carousel. 

En español:
Defecto: "0" 
spaces: é valor numérico para definir o espaço entre itens do carrocel. 

### infinit
```
[gfw infinit="false"]
```
Em português:
Predefinido: "true"
infinit: é um atributo booleano, Se true, irá rolar para o início / fim quando seu respectivo endpoint for alcançado.

In English:
Default: "true"
infinit: is a Boolean attribute, if true, Glider.js will scroll to the beginning/end when its respective endpoint is reached.

En español:
Defecto: "true" 
infinit: es un atributo booleano, Si es verdadero, Glider.js se desplazará al principio / final cuando se alcance su punto final respectivo.
