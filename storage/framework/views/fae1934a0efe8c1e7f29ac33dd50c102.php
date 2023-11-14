
<?php $__env->startSection('content'); ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Tambah Data Pembayaran</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Pembayaran</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- jquery validation -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Form Tambah Data Pembayaran</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="<?php echo e(route('pembayaran.update', $pembayaran->id_pembayaran)); ?>" method="POST">
              <?php echo csrf_field(); ?>
              <div class="card-body">
                <div class="form-group">
                  <label for="petugas">Petugas</label>
                  <input type="text" name="petugas" class="form-control" id="petugas" value="<?php echo e($pembayaran->nama_petugas); ?>" readonly>
                </div>
                <input type="hidden" name="id_petugas" class="form-control" id="id_petugas" value="<?php echo e($pembayaran->id_petugas); ?>">

                <div class="form-group">
                    <label for="nisn">NISN</label>
                    <input type="number" name="nisn" class="form-control" id="nisn" placeholder="Masukkan NISN" value="<?php echo e(old('nisn', $pembayaran->nisn)); ?>" readonly>
                </div>

                <div class="form-group">
                    <label for="tanggal_bayar">Tanggal Bayar</label>
                    <input type="date" name="tanggal_bayar" class="form-control <?php $__errorArgs = ['tanggal_bayar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="tanggal_bayar" placeholder="Masukkan Tanggal Bayar" value="<?php echo e(old(date('Y-m-d'), $pembayaran->tanggal_bayar)); ?>">
                    <?php $__errorArgs = ['tanggal_bayar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback">
                            <?php echo e($message); ?>

                        </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="form-group">
                  <label for="bulan_dibayar">Bulan Dibayar</label>
                  <select name="bulan_dibayar" class="form-control <?php $__errorArgs = ['bulan_dibayar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="bulan_dibayar">
                    <option value="">-- Pilih --</option>
                    <?php $__currentLoopData = $bulan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bln): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e(old('bulan_dibayar', $bln)); ?>"><?php echo e($bln); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                  <?php $__errorArgs = ['bulan_dibayar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <div class="invalid-feedback">
                          <?php echo e($message); ?>

                      </div>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="form-group">
                  <label for="tahun_dibayar">Tahun Dibayar</label>
                  <select name="tahun_dibayar" class="form-control <?php $__errorArgs = ['tahun_dibayar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="tahun_dibayar">
                    <option value="">-- Pilih --</option>
                    <?php $__currentLoopData = $tahun; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $th): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e(old('tahun_dibayar', $th)); ?>"><?php echo e($th); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                  <?php $__errorArgs = ['tahun_dibayar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <div class="invalid-feedback">
                          <?php echo e($message); ?>

                      </div>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>         
                
                <div class="form-group">
                  <label for="id_spp">SPP</label>
                  <select name="id_spp" class="form-control <?php $__errorArgs = ['id_spp'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="id_spp">
                    <option value="">-- Pilih --</option>
                    <?php $__currentLoopData = $spp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e(old('id_spp', $dt->id_spp)); ?>"><?php echo e($dt->tahun); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                  <?php $__errorArgs = ['id_spp'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <div class="invalid-feedback">
                          <?php echo e($message); ?>

                      </div>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="form-group">
                  <label for="jumlah_bayar">Jumlah Bayar</label>
                  <input type="number" name="jumlah_bayar" class="form-control <?php $__errorArgs = ['jumlah_bayar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="jumlah_bayar" placeholder="Masukkan jumlah bayar" value="<?php echo e(old('jumlah_bayar')); ?>">
                  <?php $__errorArgs = ['jumlah_bayar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <div class="invalid-feedback">
                          <?php echo e($message); ?>

                      </div>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="<?php echo e(route('siswa.index')); ?>" class="btn btn-danger">Kembali</a>
              </div>
            </form>
          </div>
          <!-- /.card -->
          </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">

        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
  <?php $__env->stopSection(); ?>

  <?php $__env->startPush('js'); ?>
  <script type="text/javascript">
    $(document).on('blur', '#nisn', function(e){
      e.preventDefault();
      let nisn = $('#nisn').val();
      $.ajax({
          type: 'GET',
          data: {
            nisn: nisn
          },
          url: "<?php echo e(url('getSiswa')); ?>",
          success: function(data) {
            if(data.nisn === undefined) {
              $(".identitas").html('Data tidak ditemukan!');
            }
            else {
              $(".identitas").html('NISN: '+ data.nisn + '<br>');
              $(".identitas").append('Nama: '+ data.nama + '<br>');
              $(".identitas").append('Kelas: '+ data.nama_kelas + '<br>');
              $(".identitas").append('Kompetensi Keahlian: '+ data.kompetensi_keahlian + '<br>');
            }
          }
      });
	});

  $(document).on('change', '#id_spp', function(e){
      e.preventDefault();
      let id_spp = $('#id_spp').val();
      console.log(id_spp);
      $.ajax({
          type: 'GET',
          data: {
            id_spp: id_spp
          },
          url: "<?php echo e(url('getSpp')); ?>",
          success: function(data) {
            $("#jumlah_bayar").val(data.nominal);
          }
      });
    });
  </script>
  <?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp8\htdocs\templating\resources\views/pembayaran/edit.blade.php ENDPATH**/ ?>