$("#series").click(function(e){
    e.preventDefault();
    var series_id = $("#series").val();
    if(series_id)
    {
      $.ajax({
        url : 'api/seasons/series/'+series_id,
        type : 'get',
        success : function(data){
          if(data.status == 1)
          {
            $("#season").empty();
            $("#season").append('<option selected>Choose Season...</option>');
            $.each(data.data, function(index, season){
            $("#season").append('<option value="'+season.id+'">'+season.name+'</option>');
            });
          }
        },
        error: function (jqXhr, textStatus, errorMessage) {

        }
      });
    }
    else
    {
      $("#season").empty();
      $("#season").append('<option selected>Choose Season...</option>');
    }
});

$("#editseries").click(function(e){
    e.preventDefault();
    var series_id = $("#editseries").val();
    if(series_id)
    {
      $.ajax({
        url : "api/seasons/series/"+series_id,
        type : 'get',
        success : function(data){
          if(data.status == 1)
          {

            $("#editseason").empty();
            $("#editseason").append('<option selected>Choose Season...</option>');
            $.each(data.data, function(index, season){
            $("#editseason").append('<option value="'+season.id+'">'+season.name+'</option>');
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
