$(document).ready(function() {
          var data = {matchType: 0};
          $.ajax({
          url: "sort.php",
          data: data,
          type: "post",
          dataType: "json",
          success: function(res) {
              var tmpl = $("#matches_tmpl").html();
              var html = Mustache.to_html(tmpl, res);
              $("#start").html(html);
          }
          });
          $("input[type=radio]").change(function(){
                  var matchType = $("input[type=radio]:checked").attr("value");
                  var data = {matchType: matchType};
                    $.ajax({
                    url: "sort.php",
                    data: data,
                    type: "post",
                    dataType: "json",
                    success: function(res) {
                        var tmpl = $("#matches_tmpl").html();
                        var html = Mustache.to_html(tmpl, res);
                        $("#start").html(html);
                    }
                    });

          });

 });

         



