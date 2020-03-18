<head>

</head>
<table class="table">
    <thead>
        <tr>Id</tr>
        <tr>Libelle</tr>
    </thead>
    <tbody>
    </tbody>
</table>
<div>
    <form action="" id="form">
        @csrf
        <input type="text" name="groupeName">
        <button id="btnSubmit">sumbit</button>
    </form>

</div>
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
        
    });

    function checkIfExist(){
        return $.ajax({
            url:'/Group/AlreadyExist',
            type:'POST',
            data:$(form).serialize(),
        });
    }

    $('#form').submit(function(e){
        e.preventDefault();

        checkIfExist().then(function(response)
        {
            if (response == 'false')
            {
                $.ajax({
                    url:'/Group/AddGroup',
                    type:'POST',
                    data:$(form).serialize(),
                    success:function(data){
                    }
                });
            }
        })
    });

</script>
