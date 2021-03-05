<!DOCTYPE html>
<html>

<head>
    <title>Tutorial Laravel #30 : Membuat Upload File Dengan Laravel</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
    <div class="row">
        <div class="container">

            <h2 class="text-center my-5">Tutorial Laravel #30 : Membuat Upload File Dengan Laravel
                <div class="col-lg-8 mx-auto my-5">

                    <?php if(count($errors) > 0): ?>
                    <div class="alert alert-danger">
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e($error); ?> <br />
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <?php endif; ?>

                    <form action="/upload/proses" method="POST" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>


                        <div class="form-group">
                            <b>File Gambar</b><br />
                            <input type="file" name="file">
                        </div>

                        <div class="form-group">
                            <b>Keterangan</b>
                            <textarea class="form-control" name="desc"></textarea>
                        </div>

                        <input type="submit" value="Upload" class="btn btn-primary">
                    </form>
                    <h4 class="my-5">Data</h4>

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th width="1%">File</th>
                                <th>Keterangan</th>
                                <th width="1%">OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $gambar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><img width="150px" src="<?php echo e(url('/data_file/'.$g->file)); ?>"></td>
                                <td><?php echo e($g->desc); ?></td>
                                <td><a class="btn btn-danger" href="/upload/hapus/<?php echo e($g->id); ?>">HAPUS</a></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
        </div>
    </div>
</body>

</html><?php /**PATH C:\xampp\htdocs\tukau\resources\views/upload.blade.php ENDPATH**/ ?>