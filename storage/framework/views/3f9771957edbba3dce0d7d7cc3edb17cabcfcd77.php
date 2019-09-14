
eddit
<form method="post" action="<?php echo e(url('/autobuses/'.$autobus->id_autobus)); ?>" enctype="multipart/form-data">
    <?php echo e(csrf_field()); ?>

    <?php echo e(method_field('PATCH')); ?>

     
     

            
    <label for="placas"> <?php echo e('Placas'); ?> </label><input type="text" name="placas"value="<?php echo e($autobus->placas); ?>" ><br><br>
    <label for="marca"> <?php echo e('Marca'); ?> </label><input type="text" name="marca" value="<?php echo e($autobus->marca); ?>"><br><br>
    <label for="modelo"> <?php echo e('Modelo'); ?></label><input type="text" name="modelo" value="<?php echo e($autobus->modelo); ?>"><br><br>
    <label for="no_serie"> <?php echo e('Numero de serie'); ?> </label><input type="text" name="no_serie" value="<?php echo e($autobus->no_serie); ?>" ><br><br>
    <label for="estado"><?php echo e(' Estado'); ?> </label><input type="text" name="estado" value="<?php echo e($autobus->estado); ?>"><br><br>
            <label for="cupo"><?php echo e(' Cupo'); ?></label><input type="text" name="cupo" value="<?php echo e($autobus->cupo); ?>"><br><br>
            <label><?php echo e(' Linea'); ?></label> 
            <select name="id_linea">
                <option value="<?php echo e($autobus->id_linea); ?>"><?php echo e($autobus->id_linea); ?></option>
               
                <option value="2">Linea 2</option>
                <option value="3">Linea 3 </option>
                <option value="4">Linea 4</option>
            </select> <br><br>
            <a href="<?php echo e(url('autobuses')); ?>">Regresar</a>

            <input type="submit" value="Editar">


        </form>