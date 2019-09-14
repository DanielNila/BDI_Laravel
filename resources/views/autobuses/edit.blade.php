
eddit
<form method="post" action="{{url('/autobuses/'.$autobus->id_autobus)}}" enctype="multipart/form-data">
    {{csrf_field()}}
    {{method_field('PATCH')}}
     
     

            
    <label for="placas"> {{'Placas'}} </label><input type="text" name="placas"value="{{$autobus->placas}}" ><br><br>
    <label for="marca"> {{'Marca'}} </label><input type="text" name="marca" value="{{$autobus->marca}}"><br><br>
    <label for="modelo"> {{'Modelo'}}</label><input type="text" name="modelo" value="{{$autobus->modelo}}"><br><br>
    <label for="no_serie"> {{'Numero de serie'}} </label><input type="text" name="no_serie" value="{{$autobus->no_serie}}" ><br><br>
    <label for="estado">{{' Estado'}} </label><input type="text" name="estado" value="{{$autobus->estado}}"><br><br>
            <label for="cupo">{{' Cupo'}}</label><input type="text" name="cupo" value="{{$autobus->cupo}}"><br><br>
            <label>{{' Linea'}}</label> 
            <select name="id_linea">
                <option value="{{$autobus->id_linea}}">{{$autobus->id_linea}}</option>
               
                <option value="2">Linea 2</option>
                <option value="3">Linea 3 </option>
                <option value="4">Linea 4</option>
            </select> <br><br>
            <a href="{{url('autobuses')}}">Regresar</a>

            <input type="submit" value="Editar">


        </form>