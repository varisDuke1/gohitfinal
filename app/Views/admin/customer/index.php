<?= $this->include('admin/partial/header') ?>
<?= $this->include('admin/partial/sidebar') ?>

<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1><i class="fas fa-users"></i> Data Customer</h1>
    </div>
    <div class="section-body">
      <?php if (session()->getFlashdata('message')): ?>
        <div class="alert alert-success">
          <?= session()->getFlashdata('message') ?>
        </div>
      <?php endif; ?>

      <!-- ✅ Belum Diverifikasi -->
      <h4 class="mb-3">📌 Belum Diverifikasi</h4>
      <table id="belumTable" class="display table table-striped" style="width:100%">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Sertifikat</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $noBelum = 1;
          $adaBelum = false;
          foreach ($customer as $cust) :
            if ($cust['setuju'] === 'belum') :
              $adaBelum = true;
          ?>
            <tr>
              <td><?= str_pad($noBelum++, 2, '0', STR_PAD_LEFT); ?></td>
              <td><?= esc($cust['nama']); ?></td>
              <td><?= esc($cust['email']); ?></td>
              <td>
                <?php if (!empty($cust['serti'])) : ?>
                  <a href="<?= base_url('assets/serti/' . $cust['serti']) ?>" target="_blank">Lihat Sertifikat</a>
                <?php else : ?>
                  Tidak ada file
                <?php endif; ?>
              </td>
              <td><span class="badge badge-warning">Belum</span></td>
              <td>
                <button type="button" class="btn btn-success btn-sm viewPointBtn"
                  data-iduser="<?= $cust['id_user']; ?>"
                  data-name="<?= $cust['nama']; ?>"
                  data-toggle="modal"
                  data-target="#pointModal">
                  Setujui
              </button>
              </td>
            </tr>
          <?php
            endif;
          endforeach;

          if (!$adaBelum) : ?>
            <tr>
              <td colspan="6" class="text-center">Tidak ada verifikasi serti.</td>
            </tr>
          <?php endif; ?>
        </tbody>
      </table>

      <hr class="my-5">

      <!-- ✅ Sudah Diverifikasi -->
      <h4 class="mb-3">✅ Sudah Diverifikasi</h4>
      <table id="sudahTable" class="display table table-striped" style="width:100%">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Sertifikat</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <?php $noSudah = 1;
          foreach ($customer as $cust) :
            if ($cust['setuju'] === 'Sudah') :
          ?>
              <tr>
                <td><?= str_pad($noSudah++, 2, '0', STR_PAD_LEFT); ?></td>
                <td><?= esc($cust['nama']); ?></td>
                <td><?= esc($cust['email']); ?></td>
                <td>
                  <?php if (!empty($cust['serti'])) : ?>
                    <a href="<?= base_url('assets/image/' . $cust['serti']); ?>" target="_blank">Lihat Sertifikat</a>
                  <?php else : ?>
                    Tidak ada file
                  <?php endif; ?>
                </td>
                <td><span class="badge badge-success">Sudah</span></td>
              </tr>
          <?php endif;
          endforeach; ?>
        </tbody>
      </table>

    </div>
  </section>
</div>

<!-- Modal Point Peserta -->
<div class="modal fade" id="pointModal" tabindex="-1" role="dialog" aria-labelledby="pointModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form action="<?= site_url('admin/verifikasi') ?>" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="pointModalLabel">Detail Point Peserta</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span>&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <input type="hidden" name="id_user" id="point-user-id">
          <p><strong>Username:</strong> <span id="point-username"></span></p>

          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Cabang</th>
                <th>Point Saat Ini</th>
                <th>Tambahkan</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Esport</td>
                <td id="point-esport">0</td>
                <td><input type="number" class="form-control" name="add_esport" value="0" required></td>
              </tr>
              <tr>
                <td>Badminton</td>
                <td id="point-badminton">0</td>
                <td><input type="number" class="form-control" name="add_badminton" value="0" required></td>
              </tr>
              <tr>
                <td>Football</td>
                <td id="point-football">0</td>
                <td><input type="number" class="form-control" name="add_football" value="0" required></td>
              </tr>
              <tr>
                <td>Pimpong</td>
                <td id="point-pimpong">0</td>
                <td><input type="number" class="form-control" name="add_pimpong" value="0" required></td>
              </tr>
              <tr>
                <td>Running</td>
                <td id="point-running">0</td>
                <td><input type="number" class="form-control" name="add_running" value="0" required></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Setujui</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        </div>
      </div>
    </form>
  </div>
</div>


<?= $this->include('admin/partial/footer') ?>

<!-- DataTables JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script>
$('.viewPointBtn').on('click', function () {
  const userId = $(this).data('iduser'); // ini sudah ada dan benar
  const username = $(this).data('name');

  // Set hidden input dan label
  $('#point-user-id').val(userId); // ← ✅ PERBAIKI INI
  $('#point-username').text(username);

  // Reset dan loading
  $('#point-esport, #point-badminton, #point-football, #point-pimpong, #point-running').text('Loading...');
  $('input[name="add_esport"], input[name="add_badminton"], input[name="add_football"], input[name="add_pimpong"], input[name="add_running"]').val(0);

  // Ambil data point via AJAX
  $.ajax({
    url: '<?= base_url('admin/detailpoint') ?>/' + userId,
    method: 'GET',
    dataType: 'json',
    success: function (response) {
      if (response.status === 'success') {
        const point = response.data;
        $('#point-esport').text(point.Esport);
        $('#point-badminton').text(point.Badminton);
        $('#point-football').text(point.FootBall);
        $('#point-pimpong').text(point.Pimpong);
        $('#point-running').text(point.Running);
      } else {
        alert('Gagal mengambil data point.');
      }
    },
    error: function () {
      alert('Terjadi kesalahan saat mengambil data point.');
    }
  });
});
</script>

