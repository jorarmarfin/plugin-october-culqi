# Plugin October Culqi

Please, post your errors or questions on [GitHub](https://github.com/jorarmarfin/plugin-october-culqi) (not in the reviews area)

This plugin adds a button to an htm view

## Culqi page
Esta es la pagina oficial de culqi [Link](https://www.culqi.com/)
## Features
Payment for all types of cards
* Visa
* Mastercar
* Debito

# Documentation
Warning: you need to enable AJAX framework by using following tags on your template:
~~~
{% framework %}
{% framework extras %}
~~~

The component adds a snippet of code
* In the course fields you must add the id of the product to sell
* In the title field the product title is added,
* In the Currency field the currency type is added
* In the description field the product description is added
* In the amount field the product price is added

~~~
<a id="buyButton" class="btn btn-primary">COMPRAR CON TARJETA</a>

<input type="hidden" id="publicKey" value="{{public_Key}}">
<input type="hidden" id="curso" value="{{record.id}}">
<input type="hidden" id="title" value="{{record.nombre}}">
<input type="hidden" id="currency" value="PEN">
<input type="hidden" id="description" value="{{record.resumen}}">
<input type="hidden" id="amount" value="{{record.precio}}">
~~~
