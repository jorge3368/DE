@include('includes.header')
<body>
    <main class="container">
        <h1 class="mb-3">Crud - Editar Empleado</h1>
        <div class="row">
            <div class="col-6">
               <form id="formActualizar">
                @csrf                    
                   <div class="form-group">
                       <label>Nombre:</label>
                       <input class="form-control" type="text" name="nombre_empleado"  value="{{$empleado->nombre_empleado}}">
                   </div>
                   <div class="form-group">
                       <label>Apellido:</label>
                       <input class="form-control" type="text" name="apellido_empleado"  value="{{$empleado->apellido_empleado}}">
                   </div>
                   <div class="form-group">
                       <label>Empresa:</label>
                       <select class="form-control" name="id_empresa">
                        @foreach ($empresas as $id => $empresa)
                          @if ($id == $empleado->id_empresa)
                              <option value="{{ $id }}" selected>{{ $empresa }}</option>                                                         
                          @else
                              <option value="{{ $id }}">{{ $empresa }}</option>
                          @endif
                         
                        @endforeach                 
                       </select>
                   </div>
                   <div class="form-group">
                       <label>Direccion:</label>
                       <textarea class="form-control" name="direccion_empleado" cols="2"> {{$empleado->direccion_empleado}}</textarea>
                   </div>
                   <div class="form-group">
                       <label>Telefono:</label>
                       <input class="form-control" type="text" name="telefono_empleado" value="{{$empleado->telefono_empleado}}">
                   </div>                   
                   <input onclick="editar()" class="btn btn-primary" type="button" value="Actualizar">
                    <a href="{{ url('empleados') }}">Regresar</a> 
               </form>
            </div>
        </div>                              
    </main>
     <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
        <script type="text/javascript">

            function editar(){
                let token = $('meta[name="csrf-token"]').attr('content'); 
                let data = $('#formActualizar').serialize(); 
                $.post({
                    url:'{{ route('empleado.update', $empleado->id) }}',
                    data:data,
                    headers:{'X-CSRF-TOKEN':token},
                    type: 'put',                    
                    success: function(data){ 
                      alert('registro actualizado');
                      $(location).attr('href', '{{ url('empleados') }}')                                              
                    }
                }).done(function(data){
                                      
                });
            }
           
        </script>
  
</body>
</html>