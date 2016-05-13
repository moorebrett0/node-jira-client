<?php
/**
 * Template part for the intro block after a hero image on pages
 * A floating block on the left with copy on the right
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bt-informational
 */
?>

<div class="intro-block">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="featured-block">
          <p>We've built our reputation on integrity and strive to establish lasting partnerships with out customers and suppliers.</p>
        </div>
      </div>
      <div class="col-md-8">
        <div class="content">

          <a href="{%  page.button.link  %}" class="btn btn-default">{% page.intro.text %}</a>
        </div>
      </div>
    </div>
  </div>
</div>
