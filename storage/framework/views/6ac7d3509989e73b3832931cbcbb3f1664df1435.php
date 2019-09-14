
Createeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee
 <form method="post" action="<?php echo e(url('/autobuses')); ?>"  enctype="multipart/form-data">
     
     <?php echo e(csrf_field()); ?>


            
            <label for="placas"> <?php echo e('Placas'); ?> </label><input type="text" name="placas" ><br><br>
            <label for="marca"> <?php echo e('Marca'); ?> </label><input type="text" name="marca" ><br><br>
            <label for="modelo"> <?php echo e('Modelo'); ?></label><input type="text" name="modelo"><br><br>
            <label for="no_serie"> <?php echo e('Numero de serie'); ?> </label><input type="text" name="no_serie" ><br><br>
            <label for="estado"><?php echo e(' Estado'); ?> </label><input type="text" name="estado" ><br><br>
            <label for="cupo"><?php echo e(' Cupo'); ?></label><input type="text" name="cupo" ><br><br>
            <label><?php echo e(' Linea'); ?></label> 
            <select name="id_linea">
               
                <option value="2">Linea 2</option>
                <option value="3">Linea 3 </option>
                <option value="4">Linea 4</option>
            </select> <br><br>
            <a href="<?php echo e(url('autobuses')); ?>">ARegresar</a>

            <input type="submit" value="Agregar">


        </form>

