@extends('layout.mainlayout')

@section('content')
<div class="row">
    <table class="table">
        <thead>
            <tr>Id</tr>
            <tr>Libelle</tr>
        </thead>
        <tbody>
        </tbody>
    </table>
    <form action="" id="form">
        @csrf
        <input type="text" name="groupeName">
        <button id="btnSubmit">sumbit</button>
    </form>
</div>
@endsection

@section('scripts')
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
@endsection

