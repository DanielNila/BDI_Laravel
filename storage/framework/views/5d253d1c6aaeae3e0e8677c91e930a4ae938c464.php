index
<?php if(Session::has('Mensaje')): ?><?php echo e(Session::get('Mensaje')); ?>

<?php endif; ?>
<a href="<?php echo e(url('autobuses/create')); ?>">Agregar Autobus</a>
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

        <?php $__currentLoopData = $autobuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $autobus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


        <tr>
            <td><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($autobus->placas); ?></td>
            <td><?php echo e($autobus->marca); ?></td>
            <td><?php echo e($autobus->modelo); ?></td>
            <td><?php echo e($autobus->no_serie); ?></td>
            <td><?php echo e($autobus->estado); ?></td>
            <td><?php echo e($autobus->cupo); ?></td>
            <td><?php echo e($autobus->id_linea); ?></td>
            <td>   <a href="<?php echo e(url('/autobuses/'.$autobus->id_autobus.'/edit')); ?>">
                    Editar
                </a>



            <td>
                <form method="post" action="<?php echo e(url('/autobuses/'.$autobus->id_autobus)); ?>">
                    <?php echo e(csrf_field()); ?>

                    <?php echo e(method_field('DELETE')); ?>

                    <button type="submit" onclick="return confirm('Borrar?');">Borrar</button>
                </form>
            </td>

        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table> 