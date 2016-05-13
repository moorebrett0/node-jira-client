<div class="container">
  <div class="col-md-8 col-md-offset-2">
    <div class="content-center">
    <h1 class="text-center">Social Links</h1>
</div>
<div id="field1"></div>
<script type="text/javascript">

  $("#field1").alpaca({
    "data": "Facebook URL"
});
</script>
<div id="field2"></div>
<script type="text/javascript">

  $("#field2").alpaca({
    "data": "Linkedin URL"
});
</script>
<div id="field3"></div>
<script type="text/javascript">

  $("#field3").alpaca({
    "data": "Twitter URL"
});
</script>
<div id="field4"></div>
<script type="text/javascript">

  $("#field4").alpaca({
    "data": "googlePlus URL"
});
</script>
<div id="field5"><span id="output"></span></div>
<script type="text/javascript">
$("#field5").alpaca({
    "options": {
        "label": "form echo",
        "helper": "Type whatever you want to type.",
        "onFieldKeyup": function(e) {
            $('#output').html(this.getValue());
        }
    }
});
</script>
<div id="phone"></div>
<script type="text/javascript">

  $("#phone").alpaca({
    "data": "Phone Number"
});
</script>
<h1>Slider</h1>
<div id="slider"></div>
<script type="text/javascript">

  $("#slider").alpaca({
    "schema": {
        "type": "object",
        "properties": {
            "title": {
                "type": "string"
            },
            "description": {
                "type": "string"
            },
            "image": {
                "type": "string"
            }
        }
    },
    "options": {
        "fields": {
            "title": {
                "type": "text",
                "label": "Title"
            },
            "description": {
                "type": "textarea",
                "label": "Description"
            },
            "image": {
                "type": "image",
                "label": "Image",
                "view": "bootstrap-display"
            }
        }
    },
    "data": {
        "title": "Example",
        "description": "Example image",
        "image": "/assets/images/logo.png"
    }
});
</script>
 <p>Select a file with instant thumbnail preview</p>
<div id="imageInfo">
                              <table>
                                  <tr>
                                      <td nowrap class="imagePreview" style="width: 220px">
                                      </td>
                                      <td width="100%" class="imageProperties">
                                      </td>
                                  </tr>
                              </table>
                          </div>
                          <div id="gallery-section"></div>
<script>
$(function() {
    $("#gallery-section").alpaca({
            "schema": {
                "type": "string",
                "format": "uri"
            },
            "options": {
                "type": "file",
                "label": "Upload an image file",
                "selectionHandler": function(files, data) {
                    var img = $(".imagePreview").html("").append("<img style='max-width: 200px; max-height: 200px' src='" + data[0] + "'>");
                    var p = $(".imageProperties").html("").append("<p></p>");
                    $(p).append("Name: " + files[0].name + "<br/>");
                    $(p).append("Size: " + files[0].size + "<br/>");
                    $(p).append("Type: " + files[0].type + "<br/>");
                    $("#imageInfo").css({
                        "display": "block"
                    });
                }
            }
        });
    });
</script>
<h1> FOUR BUCKETS </h1>
<div id="fourbuckets1"> </div>
<div id="fourbuckets2"> </div>
<div id="fourbuckets3"> </div>
<div id="fourbuckets4"> </div>
<script>
  $("#fourbuckets1").alpaca({
    "schema": {
        "type": "string"
    },
    "options": {
        "type": "textarea",
        "label": "Enter in the description here",
        "placeholder": "Enter the description"
    }
});
$("#fourbuckets2").alpaca({
  "schema": {
      "type": "string"
  },
  "options": {
      "type": "textarea",
      "label": "Enter in the description here",
      "placeholder": "Enter the description"
  }
});
$("#fourbuckets3").alpaca({
  "schema": {
      "type": "string"
  },
  "options": {
      "type": "textarea",
      "label": "Enter in the description here",
      "placeholder": "Enter the description"
  }
});
$("#fourbuckets4").alpaca({
  "schema": {
      "type": "string"
  },
  "options": {
      "type": "textarea",
      "label": "Enter in the description here",
      "placeholder": "Enter the description"
  }
});
</script>
<h1>FORM For Uploading Team Members Info</h1>
<div id="form"></div>
      <script type="text/javascript">
          $(document).ready(function() {
              $("#form").alpaca({
                  "schema": {
                      "title":"Team Member Name",
                      "description":"team member notification",
                      "type":"object",
                      "properties": {
                          "name": {
                              "type":"string",
                              "title":"Name"
                          },
                          "feedback": {
                              "type":"string",
                              "title":"Feedback"
                          },
                          "ranking": {
                              "type":"string",
                              "title":"Ranking",
                              "enum":['junior','staff-level','senior']
                          }
                      }
                  },
                  "options": {
                      "helper": "This is a place to describe your team member",
                      "fields": {
                          "name": {
                              "size": 20,
                              "helper": "Team Member Name",
                              "placeholder": "Enter the name"
                          },
                          "feedback" : {
                              "type": "textarea",
                              "rows": 5,
                              "cols": 40,
                              "helper": "Team member description"
                          },
                          "ranking": {
                              "type": "select",
                              "helper": "Select team ranking.",
                              "optionLabels": ["Awesome!", "It's Ok", "Hmm..."]
                          }
                      }
                  }
              });
          });
      </script>
    </div>
  </div>
</div>
