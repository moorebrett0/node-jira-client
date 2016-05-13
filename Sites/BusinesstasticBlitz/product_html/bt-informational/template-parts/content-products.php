<?php
/**
 * Template part for displaying products on the page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bt-informational
 */
 $i = 0;
?>
<div class="products">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Products</h1>
      </div>


{% for products in product %}
    <div class="col-sm-6 col-md-4">

      <div class="product-inner">

      {% for image in products.images %}
          <div class="img-wrapper">

            <img src="{{ image.src | product_img_url: 'medium' }}" />
          </div>
          {% endfor %}
          <div class="product-info">
            <span>{% product.info %}</span>
            <a href="/products/{% product.name %}">More &raquo;</a>
          </div>
      </div>
    </div>

  {% endfor %}
    </div>
  </div>
</div>
