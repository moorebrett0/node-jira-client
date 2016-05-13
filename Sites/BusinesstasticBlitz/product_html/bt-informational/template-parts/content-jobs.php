
<?php
/**
 * Displays CTA asking people about looking for jobs.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bt-informational
 */
?>
<div class="jobs-cta">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-8 col-md-offset-2">
        <h1 class="text-center">{% block.jobs.header %}</h1>
        <p>{% blocks.jobs.text %}</p>
        <a href="{% blocks.jobs.link %}" class="btn btn-default">{% blocks.jobs.button-text %}</a>
      </div>
    </div>
  </div>
</div>
