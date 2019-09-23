@if($errors->any())
    <p>Seu formulário não foi enviado pois o(s) erro(s) abaixo foi(ram) encontrado(s). Corrija-o(s) e reenvie o formulário.</p>
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif