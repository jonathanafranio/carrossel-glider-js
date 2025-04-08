# Carrossel with Glider.js

🇧🇷: O [Glider.js](https://nickpiscitelli.github.io/Glider.js/), o Carousel em javascript puro (vanilla.js) para WordPress.

🇺🇸: The [Glider.js](https://nickpiscitelli.github.io/Glider.js/), Carousel in pure javascript (vanilla.js) for WordPress 

🇪🇸: El [Glider.js](https://nickpiscitelli.github.io/Glider.js/), el carrusel en javascript puro (vanilla.js) para WordPress 

## Project setup
🇧🇷: Baixe o [plugin](https://wordpress.org/plugins/carousel-glider-js/) e adicionar no seu site/blog em WordPress, no diretorio: wp-content/plugins/ e no painel de admin do WordPress ative o plugin e divirta se.

🇺🇸: Download the [plugin](https://wordpress.org/plugins/carousel-glider-js/) and add it to your WordPress site/blog, in the directory: wp-content/plugins/ and in the WordPress admin panel activate the plugin and have fun.

🇪🇸: Descarga el [plugin](https://wordpress.org/plugins/carousel-glider-js/) y agrégalo a tu sitio/blog de WordPress, en el directorio: wp-content/plugins/ y en el panel de administración de WordPress activa el complemento y diviértete.

## How to use?
🇧🇷: Adicionar o código abaixo na pagina, post e template em que deseja aplicar.

🇺🇸: Add the shortcode below to the page, post and template you want to apply. 

🇪🇸: Agregue el código a continuación a la página, publicación y plantilla que desea aplicar. 

```
[gfw]
```


## Attributes: 
### category
```
[gfw category="slug-taxonomy-carousel"]
```
🇧🇷: Padrão: ""
category: para selecionar o Carousels de uma categoria, nesse atributo preenche o slug da categoria desejada.

🇺🇸: Default: ""
category: to select the Carousels of a category, in this attribute fills the slug of the desired category. 

🇪🇸: Defecto: "" 
category: para seleccionar los carruseles de una categoría, en este atributo se llena el slug de la categoría deseada. 

### desktop-show
```
[gfw desktop-show="3"]
```
🇧🇷: Padrão: "1"
desktop-show: define o numero de quantos item serão exibidos do carousel em resoluçao com largura de 1200px ou superior.

🇺🇸: Default: "1"
desktop-show: defines the number of how many items will be displayed in the carousel in a resolution of 1200px or higher. 

🇪🇸: Defecto: "1" 
desktop-show: define la cantidad de elementos que se mostrarán en el carrusel con una resolución de 1200px o superior. 

### laptop-show
```
[gfw laptop-show="3"]
```
🇧🇷: Padrão: "1"
laptop-show: define o numero de quantos item serão exibidos do carousel em resoluçao com largura de 1024px ou superior.

🇺🇸: Default: "1"
laptop-show: defines the number of how many items will be displayed in the carousel in a resolution of 1024px or higher. 

🇪🇸: Defecto: "1" 
laptop-show: define la cantidad de elementos que se mostrarán en el carrusel con una resolución de 1024px o superior.

### tablet-show
```
[gfw tablet-show="3"]
```
🇧🇷: Padrão: "1"
tablet-show: define o numero de quantos item serão exibidos do carousel em resoluçao com largura de 768px ou superior.

🇺🇸: Default: "1"
tablet-show: defines the number of how many items will be displayed in the carousel in a resolution of 768px or higher. 

🇪🇸: Defecto: "1" 
tablet-show: define la cantidad de elementos que se mostrarán en el carrusel con una resolución de 768px o superior. 

### mobile-show
```
[gfw mobile-show="1"]
```
🇧🇷: Padrão: "1"
mobile-show: define o numero de quantos item serão exibidos do carousel em resoluçao com largura de 767px ou inferior.

🇺🇸: Default: "1"
mobile-show: defines the number of how many items will be displayed in the carousel in a resolution of 767px or less. 

🇪🇸: Defecto: "1" 
mobile-show: define la cantidad de elementos que se mostrarán en el carrusel con una resolución de 767px o menos. 

### desktop-scroll
```
[gfw desktop-scroll="4"]
```
🇧🇷: Padrão: "1"
desktop-scroll: define o numero de quantos item serão trocados do carousel em resoluçao com largura de 1200px ou superior.

🇺🇸: Default: "1"
desktop-scroll: defines the number of how many items will be exchanged from the carousel in a resolution of 1200px or higher.  

🇪🇸: Defecto: "1" 
desktop-scroll: define la cantidad de elementos que se intercambiarán desde el carrusel en una resolución de 1200px o superior. 

### laptop-scroll
```
[gfw laptop-scroll="3"]
```
🇧🇷: Padrão: "1"
laptop-scroll: define o numero de quantos item serão trocados do carousel em resoluçao com largura de 1024px ou superior.

🇺🇸: Default: "1"
laptop-scroll: defines the number of how many items will be exchanged from the carousel in a resolution of 1024px or higher.  

🇪🇸: Defecto: "1" 
laptop-scroll: define la cantidad de elementos que se intercambiarán desde el carrusel en una resolución de 1024px o superior. 

### tablet-scroll
```
[gfw tablet-scroll="2"]
```
🇧🇷: Padrão: "1"
tablet-scroll: define o numero de quantos item serão trocados do carousel em resoluçao com largura de 768px ou superior.

🇺🇸: Default: "1"
tablet-scroll: defines the number of how many items will be exchanged from the carousel in a resolution of 768px or higher.  

🇪🇸: Defecto: "1" 
tablet-scroll: define la cantidad de elementos que se intercambiarán desde el carrusel en una resolución de 768px o superior. 

### mobile-scroll
```
[gfw mobile-scroll="2"]
```
🇧🇷: Padrão: "1"
mobile-scroll: define o numero de quantos item serão trocados do carousel em resoluçao com largura de 767px ou inferior.

🇺🇸: Default: "1"
mobile-scroll: defines the number of how many items will be exchanged from the carousel in a resolution of 767px or less. 

🇪🇸: Defecto: "1" 
mobile-scroll: define la cantidad de elementos que se intercambiarán desde el carrusel en una resolución de 767px o menos.

### dots
```
[gfw dots="false"]
```
🇧🇷: Padrão: "true"
dots: é um atributo booleano, true para exibir os dots de navegação abaixo do carousel. false para ocultar.

🇺🇸: Default: "true"
dots: is a Boolean attribute, true to display the navigation dots below the carousel. false to hide. 

🇪🇸: Defecto: "true" 
dots: es un atributo booleano, true para mostrar los puntos de navegación debajo del carrusel. false para ocultar.

### arrows
```
[gfw arrows="true"]
```
🇧🇷: Padrão: "false"
arrows: é um atributo booleano, true para exibir as flechas de navegação para o proximo ou o anterior carousel. false para ocultar.

🇺🇸: Default: "false"
arrows: is a Boolean attribute, true to display the navigation arrows for the next or previous carousel. false to hide. 

🇪🇸: Defecto: "false" 
arrows: es un atributo booleano, true para mostrar las flechas de navegación del carrusel anterior o siguiente. false para ocultar.

### design
```
[gfw design="text-full-image"]
```
🇧🇷: Padrão: "only-images"
design: é para escolher o layout do carrossel, para esse atributo, pode escolher as seguintes opções: "text-full-image"; "text-half-image"; "only_text"; "small-thumb"; "only-images";
Qualquer valor diferente dessas opções, sera considerado o valor Padrão: "only-images".

🇺🇸: Default: "only-images"
design: it is to choose the carousel layout, for this attribute, you can choose the following options: "text-full-image"; "text-half-image"; "only_text"; "small-thumb"; "only-images";
Any value other than these options will be considered the default value: "only-images". 

🇪🇸: Defecto: "only-images" 
design: é para escolher o layout do carrossel, para esse atributo, pode escolher as seguintes opções: "text-full-image"; "texto-meia-imagem"; "only_text"; "polegar pequeno"; "apenas imagens";
Qualquer valor diferente dessas opções, ser considerado o valor Padrão: "only-images". 

### resolution
```
[gfw resolution="full"]
```
🇧🇷: Padrão: "full"
resolution: é para escolher a resolução da imagem cadastrada do carrossel, para esse atributo, pode escolher as seguintes opções: "thumbnail"; "medium"; "medium_large"; "large"; "full";
Qualquer valor diferente dessas opções, sera considerado o valor Padrão: "full".

🇺🇸: Default: "full"
resolution: it is to choose the carousel layout, for this attribute, you can choose the following options: "thumbnail"; "medium"; "medium_large"; "large"; "full";
Any value other than these options will be considered the default value: "only-images". 

🇪🇸: Defecto: "full" 
resolution: é para escolher a resolução da imagem cadastrada do carrossel, para esse atributo, pode escolher as seguintes opções: "thumbnail"; "medium"; "medium_large"; "large"; "full";
Qualquer valor diferente dessas opções, ser considerado o valor Padrão: "full".

### spaces
```
[gfw spaces="20"]
```
🇧🇷: Padrão: "0"
spaces: é valor numerico para definir espaco entre itens do carrocel.

🇺🇸: Default: "0"
spaces: is a numeric value to define space between items in the carousel. 

🇪🇸: Defecto: "0" 
spaces: é valor numérico para definir o espaço entre itens do carrocel. 

### infinit
```
[gfw infinit="false"]
```
🇧🇷: Padrão: "true"
infinit: é um atributo booleano, Se true, irá rolar para o início / fim quando seu respectivo endpoint for alcançado.

🇺🇸: Default: "true"
infinit: is a Boolean attribute, if true, Glider.js will scroll to the beginning/end when its respective endpoint is reached.

🇪🇸: Defecto: "true" 
infinit: es un atributo booleano, Si es verdadero, Glider.js se desplazará al principio / final cuando se alcance su punto final respectivo.
