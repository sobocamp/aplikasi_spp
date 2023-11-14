

<?php $__env->startSection('content'); ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Riwayat Pembayaran</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data SPP</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Riwayat Pembayaran [<?php echo e(session('user')->nama); ?>]</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <?php if(session()->has('success')): ?>
                  <div class="alert alert-info alert-dismissible">
                    <h5><i class="icon fas fa-info"></i> Informasi</h5>
                    <?php echo e(session()->get('success')); ?>

                  </div>
                <?php endif; ?>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">No</th>
                      <th>Tanggal Bayar</th>
                      <th>Bulan</th>
                      <th>Tahun</th>
                      <th>Jumlah Bayar</th>
                      <th>Petugas</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $no = 1;
                    ?>
                    <?php $__empty_1 = true; $__currentLoopData = $pembayaran; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                      <td><?php echo e($no++); ?></td>
                      <td><?php echo e($data->tanggal_bayar); ?></td>
                      <td><?php echo e($data->bulan_dibayar); ?></td>
                      <td><?php echo e($data->tahun_dibayar); ?></td>
                      <td><?php echo e(number_format($data->jumlah_bayar)); ?></td>
                      <td><?php echo e($data->nama_petugas); ?></td>
                    </tr>
                  </tbody>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                  Belum ada data pembayaran
                  <?php endif; ?>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->  
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp8\htdocs\templating\resources\views/siswa/history.blade.php ENDPATH**/ ?>