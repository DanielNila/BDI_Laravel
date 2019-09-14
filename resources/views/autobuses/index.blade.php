index
@if(Session::has('Mensaje')){{
Session::get('Mensaje')
}}
@endif
<a href="{{url('autobuses/create')}}">Agregar Autobus</a>
<table class="table table-light" >
    <thead class="thead-light"
           <tr>
            <th>#</th>
            <th>Placas</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Numero de Serie</th>
            <th>Estado</th>
            <th>Cupo</th>
            <th>Id Linea</th>
            <th>Actualizar</th>
            <th>Eliminar</th>
        </tr>

    <tbody>

        @foreach ($autobuses as $autobus)


        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$autobus->placas}}</td>
            <td>{{$autobus->marca}}</td>
            <td>{{$autobus->modelo}}</td>
            <td>{{$autobus->no_serie}}</td>
            <td>{{$autobus->estado}}</td>
            <td>{{$autobus->cupo}}</td>
            <td>{{$autobus->id_linea}}</td>
            <td>   <a href="{{url('/autobuses/'.$autobus->id_autobus.'/edit')}}">
                    Editar
                </a>



            <td>
                <form method="post" action="{{url('/autobuses/'.$autobus->id_autobus)}}">
                    {{csrf_field() }}
                    {{method_field('DELETE') }}
                    <button type="submit" onclick="return confirm('Borrar?');">Borrar</button>
                </form>
            </td>

        </tr>
        @endforeach
    </tbody>
</table> 