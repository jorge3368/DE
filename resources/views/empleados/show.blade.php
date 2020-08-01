@include('includes.header')
<body>
    <main class="container mb-5">
        <h1 class="mb-3">Crud - Mostrar Empleado</h1>
        <div class="row">
            <div class="col-6">                                
             <div class="form-group">
                 <label>Nombre:</label>
                 <input class="form-control" type="text" readonly value="{{ $empleado->nombre_empleado }}">
             </div>
             <div class="form-group">
                 <label>apellido:</label>
                 <input class="form-control" type="text" readonly value="{{ $empleado->apellido_empleado }}">
             </div>
             <div class="form-group">
                <label>Direccion:</label>
                <textarea class="form-control" cols="2" readonly>{{ $empleado->direccion_empleado }}</textarea>              
             </div>
             <div class="form-group">
                 <label>Telefono:</label>
                 <input class="form-control" type="text" readonly value="{{ $empleado->telefono_empleado }}">
             </div>
            <div class="form-group">
                 <label>Empresa:</label>
                 <input class="form-control" type="text" readonly value="{{ $empleado->empresa->nombre_empresa }}">
             </div>
             <div class="form-group">
                 <label>Creado:</label>
                 <input class="form-control" type="text" readonly value="{{ $empleado->created_at->diffForHumans() }}">
             </div>
             <a href="{{ url('empleados') }}">Regresar</a>      
            </div>
        </div>                              
    </main>

</body>
</html>