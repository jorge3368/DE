@include('includes.header')
    <body>
        <main class="container">
            <h1 class="mb-3">Crud Empleados</h1>
            <div class="row">
                <div class="col-2">
                    <a href="{{ route('empleado.create') }}" class="btn btn-primary">Nuevo</a>
                    <a href="{{ url('/') }}" class="btn btn-light">Atras</a>
                </div>                
            </div>           
             <table class="table table-hover table-bordered mt-3">
                <tr>
                    <th>id</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Direccion</th>
                    <th>Telefono</th>                    
                    <th>Empresa</th>                    
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
                    url:'{{  route('empleado.index') }}',                    
                    success: function(data){                        
                        var empleados = JSON.parse(data);
                        for(var empleado of empleados.data) { 
                            let cuerpo = '<tr><td>'+empleado.id+'</td>';
                            cuerpo += '<td>'+empleado.nombre_empleado+'</td>';
                            cuerpo += '<td>'+empleado.apellido_empleado+'</td>';
                            cuerpo += '<td>'+empleado.direccion_empleado+'</td>';
                            cuerpo += '<td>'+empleado.telefono_empleado+'</td>';
                            cuerpo += '<td>'+empleado.empresa.nombre_empresa+'</td>'     
                            cuerpo += `<td>
                           
                            
                            <button onclick='borrar(`+empleado.id+`)' type='button' class='btnEliminar btn btn-sm btn-danger'>Eliminar</button><br>
                           
                            <a href='empleado/` + empleado.id + `/edit' class='mt-1 btn btn-sm btn-warning'>Editar</a><br>
                            <a href='empleado/` + empleado.id + `' class='mt-1 btn btn-sm btn-light'>ver</a href='product/'>
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
                    url:'empleado/del/'+id,
                    headers:{'X-CSRF-TOKEN':token},
                    type: 'put',
                    contentType: 'json',
                    success: function(data){   
                        alert('registro eliminado');
                        cargarTabla();                                              
                    }
                }).done(function(data){
                   
                });
            }
           
        </script>
       
    </body>
</html>
