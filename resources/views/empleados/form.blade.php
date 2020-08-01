@include('includes.header')
<body>
    <main class="container">
        <h1 class="mb-3">Crud - Agregar Empleado</h1>
        <div class="row">
            <div class="col-6">
               <form method="post" action="{{ route('empleado.store') }}">
                @csrf                    
                   <div class="form-group">
                       <label>Nombre:</label>
                       <input class="form-control" type="text" name="nombre_empleado">
                   </div>
                   <div class="form-group">
                       <label>Apellido:</label>
                       <input class="form-control" type="text" name="apellido_empleado">
                   </div>
                   <div class="form-group">
                       <label>Empresa:</label>
                       <select name="id_empresa" class="form-control">
                         @foreach ($empresas as $id => $empresa)
                            <option value="{{ $id }}">{{ $empresa }}</option>
                         @endforeach
                       </select>
                   </div>
                   <div class="form-group">
                       <label>Direccion:</label>
                       <textarea class="form-control" name="direccion_empleado" cols="2"></textarea>
                   </div>
                   <div class="form-group">
                       <label>Telefono:</label>
                       <input class="form-control" type="text" name="telefono_empleado">
                   </div>                   
                   <input class="btn btn-primary" type="submit" value="Guardar">
               </form>
            </div>
        </div>                              
    </main>
  
</body>
</html>