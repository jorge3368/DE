@include('includes.header')
<body>
    <main class="container">
        <h1 class="mb-3">Crud - Editar Empresa</h1>
        <div class="row">
            <div class="col-6">
               <form id="formActualizar">
                @csrf                    
                   <div class="form-group">
                       <label>Nombre:</label>
                       <input class="form-control" type="text" name="nombre_empresa"  value="{{$empresa->nombre_empresa}}">
                   </div>
                   <div class="form-group">
                       <label>Direccion:</label>
                       <textarea class="form-control" name="direccion_empresa" cols="2"> {{$empresa->direccion_empresa}}</textarea>
                   </div>
                   <div class="form-group">
                       <label>Telefono:</label>
                       <input class="form-control" type="text" name="telefono_empresa" value="{{$empresa->telefono_empresa}}">
                   </div>                   
                   <input onclick="editar()" class="btn btn-primary" type="button" value="Actualizar">
                    <a href="{{ url('empresas') }}">Regresar</a> 
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
                    url:'{{ route('empresa.update', $empresa->id) }}',
                    data:data,
                    headers:{'X-CSRF-TOKEN':token},
                    type: 'put',                    
                    success: function(data){ 
                      alert('registro actualizado');
                      $(location).attr('href', '{{ url('empresas') }}')                                              
                    }
                }).done(function(data){
                                      
                });
            }
           
        </script>
  
</body>
</html>