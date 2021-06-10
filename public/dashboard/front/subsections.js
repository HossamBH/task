$("#section").click(function(e){
    e.preventDefault();
    var section_id = $("#section").val();
    if(section_id)
    {
      $.ajax({
        url : 'api/subsections/section/'+section_id,
        type : 'get',
        success : function(data){
          if(data.status == 1)
          {
            $("#subsection").empty();
            $("#subsection").append('<option selected>Choose Subsection...</option>');
            $.each(data.data, function(index, subsection){
            $("#subsection").append('<option value="'+subsection.id+'">'+subsection.name+'</option>');
            });
          }
        },
        error: function (jqXhr, textStatus, errorMessage) {

        }
      });
    }
    else
    {
      $("#subsection").empty();
      $("#subsection").append('<option selected>Choose Subsection...</option>');
    }
});

$("#editsection").click(function(e){
    e.preventDefault();
    var section_id = $("#editsection").val();
    if(section_id)
    {
      $.ajax({
        url : "api/subsections/section/"+section_id,
        type : 'get',
        success : function(data){
          if(data.status == 1)
          {

            $("#editsubsection").empty();
            $("#editsubsection").append('<option selected>Choose Subsection...</option>');
            $.each(data.data, function(index, subsection){
            $("#editsubsection").append('<option value="'+subsection.id+'">'+subsection.name+'</option>');
            });
          }
        },
        error: function (jqXhr, textStatus, errorMessage) {

        }
      });
    }
    else
    {
      $("#editsubsection").empty();
      $("#editsubsection").append('<option selected>Choose Subsection...</option>');
    }
});
