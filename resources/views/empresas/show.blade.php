@include('includes.header')
<body>
    <main class="container">
        <h1 class="mb-3">Crud - Mostrar Empresa</h1>
        <div class="row">
            <div class="col-6">                                
             <div class="form-group">
                 <label>Nombre:</label>
                 <input class="form-control" type="text" readonly value="{{ $empresa->nombre_empresa }}">
             </div>
             <div class="form-group">
                <label>Direccion:</label>
                <textarea class="form-control" cols="2" readonly>{{ $empresa->direccion_empresa }}</textarea>                
             </div>
             <div class="form-group">
                 <label>Telefono:</label>
                 <input class="form-control" type="text" readonly value="{{ $empresa->telefono_empresa }}">
             </div>
             <div class="form-group">
                 <label>Creado:</label>
                 <input class="form-control" type="text" readonly value="{{ $empresa->created_at->diffForHumans() }}">
             </div>
             <a href="{{ url('empresas') }}">Regresar</a>      
            </div>
        </div>                              
    </main>

</body>
</html>