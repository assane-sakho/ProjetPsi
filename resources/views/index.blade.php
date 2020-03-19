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
        setPage('Group');
    });

    function setPage(page)
    {
      $("nav").find("a").removeClass("active");
      $("#" + page + "Anchor").addClass("active");

      var title = "Informations";

      if(page != "API")
      {
        title += " des ";
      }

      switch(page){
        case "Association" :
            title += " appartenances des individus aux groupes";
          break; 
        case "Group" :
          title += "groupes";
          break;
        case "Person" :
          title += "individus";
          break;
        case "API":
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

    function setDataTable()
    {
      var fileName = $("title").text() + " " +  $("#title").text();
      $(".table").DataTable().destroy();
      $(".table").DataTable({
        "language" : {
            "sEmptyTable":     "Aucune donnée disponible dans le tableau",
            "sInfo":           "Affichage de l'élément _START_ à _END_ sur _TOTAL_ éléments",
            "sInfoEmpty":      "Affichage de l'élément 0 à 0 sur 0 élément",
            "sInfoFiltered":   "(filtré à partir de _MAX_ éléments au total)",
            "sInfoPostFix":    "",
            "sInfoThousands":  ",",
            "sLengthMenu":     "Afficher _MENU_ éléments",
            "sLoadingRecords": "Chargement...",
            "sProcessing":     "Traitement...",
            "sSearch":         "Rechercher :",
            "sZeroRecords":    "Aucun élément correspondant trouvé",
            "oPaginate": {
                "sFirst":    "Premier",
                "sLast":     "Dernier",
                "sNext":     "Suivant",
                "sPrevious": "Précédent"
            },
            "oAria": {
                "sSortAscending":  ": activer pour trier la colonne par ordre croissant",
                "sSortDescending": ": activer pour trier la colonne par ordre décroissant"
            },
            "select": {
                    "rows": {
                        "_": "%d lignes sélectionnées",
                        "0": "Aucune ligne sélectionnée",
                        "1": "1 ligne sélectionnée"
                    } 
            }
        },
        dom: 'Brtip',
        buttons: [
          {
              extend: 'csv',
              title: fileName,
              exportOptions: {
              columns: ':visible:not(.not-export-col)'
            }
          },  
          {
              extend: 'excel',
              title: fileName,
              exportOptions: {
                  columns: ':visible:not(.not-export-col)'
            }
          },  
          {
              extend: 'pdf',
              title: fileName,
              exportOptions: {
                  columns: ':visible:not(.not-export-col)'
              }
          },  
          {
              extend: 'print',
              title: fileName,
              text: 'Imprimer',
                exportOptions: {
                  columns: ':visible:not(.not-export-col)'
              }
          },
        ]
      });
    }
</script>
@endsection
