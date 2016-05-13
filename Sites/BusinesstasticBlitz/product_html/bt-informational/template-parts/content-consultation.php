<?php
/**
 * Template part for the consultation call to action on static pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bt-informational
 */
?>

<div class="consultation">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-8 col-md-offset-2">
        <div class="entry_body">
          {% for block in blocks %}
          <a href="{% block.link %}" class="btn btn-consultation">{% block.button %}</a>
          {% endfor %}
        </div>
      </div>
    </div>
  </div>
</div>
