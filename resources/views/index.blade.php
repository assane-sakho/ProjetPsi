@extends('layout.mainlayout')

@section('content')

  <h2 id="title"></h2>
  </p>
  <div id="content">
  </div>
@endsection
@section('scripts')

<script>
    $(document).ready(function()
    {
        setPage('GroupInfo');
    });

    function setPage(page)
    {
      $("nav").find("a").removeClass("active");
      $("#" + page + "Anchor").addClass("active");

      var title = "Informations";

      title +=" des ";

      switch(page){
        case "GroupInfo" :
            title += " appartenances des individus aux groupes";
          break; 
        case "Group" :
          title += "groupes";
          break;
        case "Person" :
          title += "individus";
          break;
        case"API":
          title += " de l'API";
          break;
      }
      $("#title").text(title);

      $.ajax({
          url:'/' + page + '/GetPartial',
          type:'GET',
          success:function(data){
            $("#content").empty();
            $("#content").append(data);
          } 
      });

    }
</script>
@endsection
