function handleFile(e, callback) {
    //Get the files from Upload control
       var files = e.target.files;
       var i, f;
       var result;
    //Loop through files
       for (i = 0, f = files[i]; i != files.length; ++i) {
           var reader = new FileReader();
           var name = f.name;
           reader.onload = function (e) {
               var data = e.target.result;

               var workbook = XLSX.read(data, { type: 'binary' });
               
               var sheet_name_list = workbook.SheetNames;
               sheet_name_list.forEach(function (y) { /* iterate through sheets */
                   //Convert the cell value to Json
                   var roa = XLSX.utils.sheet_to_json(workbook.Sheets[y]);
                   if (roa.length > 0) {
                       result = roa;
                   }
               });
              //Get the result
              callback(result);
           };
           reader.readAsArrayBuffer(f);
       }
   }
