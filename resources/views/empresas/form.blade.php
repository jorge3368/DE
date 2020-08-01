@include('includes.header')
<body>
    <main class="container">
        <h1 class="mb-3">Crud - Agregar Empresa</h1>
        <div class="row">
            <div class="col-6">
               <form method="post" action="{{ route('empresa.store') }}">
                @csrf                    
                   <div class="form-group">
                       <label>Nombre:</label>
                       <input class="form-control" type="text" name="nombre_empresa">
                   </div>
                   <div class="form-group">
                       <label>Direccion:</label>
                       <textarea class="form-control" name="direccion_empresa" cols="2"></textarea>
                   </div>
                   <div class="form-group">
                       <label>Telefono:</label>
                       <input class="form-control" type="text" name="telefono_empresa">
                   </div>                   
                   <input class="btn btn-primary" type="submit" value="Guardar">
               </form>
            </div>
        </div>                              
    </main>
  
</body>
</html>