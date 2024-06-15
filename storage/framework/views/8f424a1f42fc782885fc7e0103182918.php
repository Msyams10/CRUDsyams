

<?php $__env->startSection('konten'); ?>

<div class="d-flex mb-3">
    <h4>List Siswa</h4>
    <div class="ms-auto">
        <a class="btn btn-success" href="<?php echo e(route('siswa.tambah')); ?>">Tambah Siswa</a>
    </div>
</div>

<?php if(session('success')): ?>
    <div class="alert alert-success">
        <?php echo e(session('success')); ?>

    </div>
<?php endif; ?>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No HP</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $no => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($no + 1); ?></td>
            <td><?php echo e($data->NIM); ?></td>
            <td><?php echo e($data->Nama); ?></td>
            <td><?php echo e($data->Alamat); ?></td>
            <td><?php echo e($data->No_HP); ?></td>
            <td>
                <a href="<?php echo e(route('siswa.edit', $data->id)); ?>" class="btn btn-warning btn-sm">Edit</a>
                <form action="<?php echo e(route('siswa.delete', $data->id)); ?>" method="post" style="display:inline;">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Crud_syams2\resources\views/siswa/tampil.blade.php ENDPATH**/ ?>