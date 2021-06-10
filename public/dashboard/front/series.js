$("#subsection").click(function(e){
    e.preventDefault();
    var subsection_id = $("#subsection").val();
    if(subsection_id)
    {
      $.ajax({
        url : 'api/series/subsection/'+subsection_id,
        type : 'get',
        success : function(data){
          if(data.status == 1)
          {
            $("#series").empty();
            $("#series").append('<option selected>Choose Series...</option>');
            $.each(data.data, function(index, series){
            $("#series").append('<option value="'+series.id+'">'+series.name+'</option>');
            });
          }
        },
        error: function (jqXhr, textStatus, errorMessage) {

        }
      });
    }
    else
    {
      $("#series").empty();
      $("#series").append('<option selected>Choose Series...</option>');
    }
});

$("#editsubsection").click(function(e){
    e.preventDefault();
    var subsection_id = $("#editsubsection").val();
    if(subsection_id)
    {
      $.ajax({
        url : "api/series/subsection/"+subsection_id,
        type : 'get',
        success : function(data){
          if(data.status == 1)
          {

            $("#editseries").empty();
            $("#editseries").append('<option selected>Choose Series...</option>');
            $.each(data.data, function(index, series){
            $("#editseries").append('<option value="'+series.id+'">'+series.name+'</option>');
            });
          }
        },
        error: function (jqXhr, textStatus, errorMessage) {

        }
      });
    }
    else
    {
      $("#editseries").empty();
      $("#editseries").append('<option selected>Choose Series...</option>');
    }
});
