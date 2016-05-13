<?php
/**
 * Template part for latest blog post 'From the Blog' section.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bt-informational
 */
?>
{% if %}
<div class="from-the-blog">
  {% when %}
  <h1>{% page.blog.title %}</h1>
  {% for post in posts %}

  <div class="hero-image" style="background-image: url('{% blog.image %}');">
  <!-- THIS IS AN EXCEPTION for an if/else -->{% else %}
  <div class="hero-image">
  {% endfor %}
    <div class="gradient"></div>
    <div class="recent-post">
      <h2>{% blog.title %}</h2>
      <a class="btn btn-secondary" href="{% blog.link %}">Read Full Post</a>
    </div>
  </div>

</div>
