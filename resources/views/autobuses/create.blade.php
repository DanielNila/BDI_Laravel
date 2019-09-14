
Createeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee
 <form method="post" action="{{url('/autobuses')}}"  enctype="multipart/form-data">
     
     {{csrf_field() }}

            
            <label for="placas"> {{'Placas'}} </label><input type="text" name="placas" ><br><br>
            <label for="marca"> {{'Marca'}} </label><input type="text" name="marca" ><br><br>
            <label for="modelo"> {{'Modelo'}}</label><input type="text" name="modelo"><br><br>
            <label for="no_serie"> {{'Numero de serie'}} </label><input type="text" name="no_serie" ><br><br>
            <label for="estado">{{' Estado'}} </label><input type="text" name="estado" ><br><br>
            <label for="cupo">{{' Cupo'}}</label><input type="text" name="cupo" ><br><br>
            <label>{{' Linea'}}</label> 
            <select name="id_linea">
               
                <option value="2">Linea 2</option>
                <option value="3">Linea 3 </option>
                <option value="4">Linea 4</option>
            </select> <br><br>
            <a href="{{url('autobuses')}}">Regresar</a>

            <input type="submit" value="Agregar">


        </form>

