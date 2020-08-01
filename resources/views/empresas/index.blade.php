@include('includes.header')
    <body>
        <main class="container">
            <h1 class="mb-3">Crud Empresas</h1>
            <div class="row">
                <div class="col-2">
                    <a href="{{ route('empresa.create') }}" class="btn btn-primary">Nuevo</a>
                    <a href="{{ url('/') }}" class="btn btn-light">Atras</a>
                </div>                
            </div>           
             <table class="table table-hover table-bordered mt-3">
                <tr>
                    <th>id</th>
                    <th>Nombre</th>
                    <th>Direccion</th>
                    <th>Telefono</th>                    
                    <th>Acciones</th>
                </tr>                 
                <tbody id="contenidoTabla"></tbody>               
                
            </table>                        
        </main>
        <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
        <script type="text/javascript">
            $(function(){              
                cargarTabla();               
            });
            $('#cargar').click(function(){
                cargarTabla();  
            });
            function cargarTabla(){
                $('#contenidoTabla').empty();  
                $.get({
                    url:'{{  route('empresa.index') }}',
                    contentType: 'json',
                    success: function(data){                        
                        var empresas = JSON.parse(data);
                        for(var empresa of empresas.data) { 
                            let cuerpo = '<tr><td>'+empresa.id+'</td>';
                            cuerpo += '<td>'+empresa.nombre_empresa+'</td>';
                            cuerpo += '<td>'+empresa.direccion_empresa+'</td>';
                            cuerpo += '<td>'+empresa.telefono_empresa+'</td>';
                            cuerpo += `<td>
                            <button onclick='borrar(`+empresa.id+`)' type='button' class='btnEliminar btn btn-sm btn-danger'>Eliminar</button><br>
                           
                            <a href='empresa/` + empresa.id + `/edit' class='mt-1 btn btn-sm btn-warning'>Editar</a>
                            <a href='empresa/` + empresa.id + `' class='mt-1 btn btn-sm btn-light'>ver</a href='product/'>
                            </td>`;
                            // cuerpo += '</td>';
                            cuerpo += '</tr>';
                            $('#contenidoTabla').append(cuerpo);                       
                         
                        }
                    },
                    error: function(data){
                        
                        console.log(data);
                    }
                });
            }

            function borrar(id){
                var token = $('meta[name="csrf-token"]').attr('content'); 
                $.post({
                    url:'empresa/del/'+id,
                    headers:{'X-CSRF-TOKEN':token},
                    type: 'put',
                    contentType: 'json',
                    success: function(data){                                               
                    }
                }).done(function(data){
                    alert('registro eliminado');
                    cargarTabla();  
                });
            }
           
        </script>
       
    </body>
</html>
