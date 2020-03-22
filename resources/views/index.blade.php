@extends('layout.mainlayout')

@section('content')

  <h2 id="title"></h2>
  </p>
  <div id="content">
  </div>
  
@endsection
@section('scripts')

<script>
    let statusTitleArray = [];
    let directoryNameArray = [];
    let ajaxArray = [];

    setPage('', true);

    function setPage(page, displayToastr_)
    {
        var aPage = window.location.href.split('#')[1];
        if(page == '')
        {
          if(aPage != "" && ["Groups", "Association", "People", "API"].includes(aPage))
          {
            page = aPage;
          }
          else
          {
            page = "Associations";
          }
        }

        $("nav").find("a").removeClass("active");
        $("#" + page + "Anchor").addClass("active");

        var title = "Informations";

        if(page != "API")
        {
          title += " des ";
        }

        switch(page){
          case "Associations" :
              title += " appartenances des individus aux groupes";
            break; 
          case "Groups" :
            title += "groupes";
            break;
          case "People" :
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
              if(displayToastr_ == true)
              {
                displayToastr('loaded');
              }
              $("#content").empty();
              $("#content").append(data);
              setSelect2();
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
      $("#dataTable").DataTable().destroy();
      $("#dataTable").DataTable({
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

    function displayToastr(type, message)
    {
      var title = $("title").text() + " - " + "Administration";
      var timeOut = (type == 'error' || type == 'errorMsg' || type == 'warning') ? 3000 : 2000;

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
        case "warning":
          toastr.warning("<i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i> Attention<p/>" + message, title);
          break;
        case "checked":
            toastr.info('Vérification terminé', title);
          break;
        case "errorMsg":
          toastr.error("<i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i> Attention<p/>" + message, title);
          break;
      }
    }

    function appendToSelect(selectId, data)
    {
      var optionText;
      var optionId;

      $.each(data, function(key, value) { 
        optionId = value.id;

        if(value.title)
        {
          optionText = value.title;
        }
        else if(value.name)
        {
          optionText = value.name;
        }
        else if(value.year)
        {
          optionId = value.year;
          optionText = value.year + " - " + (value.year+1);
        }
        else
        {
          optionText = value.firstname + " " + value.lastname;
        }

        $('#' + selectId).append($("<option></option>")
              .attr("value",optionId)
              .text(optionText)); 
      });
    }

    function setSelect2()
    {
      $("select").select2();
    }
</script>
@endsection
