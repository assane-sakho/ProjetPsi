@extends('layout.mainlayout')

@section('content')

  <h2 id="title"></h2>
  </p>
  <div id="content">
  </div>
  
@endsection
@section('scripts')

<script>
    setPage('Association', true);

    function setPage(page, d)
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
              if(d == true)
              {
                displayToastr('loaded');
              }
              $("#content").empty();
              $("#content").append(data);
            },
            error : function()
            {
              displayToastr('error');
            } 
        });
    }

    function setDataTable()
    {
      var fileName = $("title").text() + " - " +  $("#title").text();
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
        dom: 'Bfrtip',
        buttons: [
          { extend: 'csv', text: 'CSV', title : fileName, exportOptions: { columns: ':visible:not(.not-export-col)'}},
          { extend: 'excel', text: 'Excel', title : fileName, exportOptions: { columns: ':visible:not(.not-export-col)'} },
          { extend: 'pdf', text: 'PDF', title : fileName, exportOptions: { columns: ':visible:not(.not-export-col)'} },
          { extend: 'print', text: 'Imprimer', title : fileName, exportOptions: { columns: ':visible:not(.not-export-col)'} },
          { extend: 'copy', text: 'Copier', title : fileName, exportOptions: { columns: ':visible:not(.not-export-col)'} }
        ]
      });
    }

    function displayToastr(type)
    {
      var title = $("title").text() + " - " + "Administration";
      var timeOut = (type == 'error') ? 2500 : 2000;

      toastr.options = {
      timeOut : timeOut, 
      };

      toastr.clear();
      
      switch(type){
        case "saved":
          toastr.success('Les données ont été ajoutés.'), title;
          break;
        case "error":
          toastr.error('Une erreur est survenue.', title);
          break;
        case "updated":
          toastr.success('Les modifications ont été enregistrés.', title);
          break;
        case "loaded":
          toastr.success('Les données ont été chargés.', title);
          break;
        case "deleted":
          toastr.info('Les données ont été supprimés.', title);
          break;
      }
    }
</script>
@endsection
