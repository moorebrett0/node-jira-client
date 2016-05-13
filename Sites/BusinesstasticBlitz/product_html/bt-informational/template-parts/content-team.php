<?php
/**
 * Template part for displaying a hero image at the top of the page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bt-informational
 */
 $i = 0;
?>
<div class="the-team">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>{{%page.team.headline%}}</h1>
      </div>
     {% for block in blocks %}

    <div class="col-sm-6 col-md-3">
      <div class="team-member">
        <div class="img-wrapper">

          <img src="{% block | img_tag %}"/>
        </div>
        <div class="team-member-info">
          <h3>{% block.team.title %}</h3>
          <p>{% block.subtitle %}</p>
          <a href="#" data-toggle="modal" data-target="#team-modal-<?php echo $i; ?>">View Bio &raquo;</a>
        </div>
      </div>
    </div>
    <div class="modal fade" id="team-modal-<?php echo $i; ?>">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title text-center">{% block.modal-title %}</h4>
          </div>
          <div class="modal-body">
            <p class="text-center">{% block.modal-content %}</p>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

 {% endfor %}

    </div>
  </div>
</div>
