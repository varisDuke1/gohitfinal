<?= $this->include('admin/partial/header') ?>
<?= $this->include('admin/partial/sidebar') ?>

<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1><i class="fas fa-users"></i> Tournament List</h1>
    </div>
    <div class="section-body">

      <!-- PEMISAH -->
      <hr class="my-5">

      <!-- TABEL BAWAH: SUDAH DISETUJUI -->
      <h4 class="mb-3">✅ Log Point</h4>
      <table id="table-sudah" class="display table table-striped" style="width:100%">
        <thead>
          <tr>
            <th>No</th>
            <th>Id Event</th>
            <th>Nama User</th>
            <th>Kategori</th>
            <th>Point</th>
          </tr>
        </thead>
        <tbody>
          <?php $noSudah = 1; foreach ($tournament as $evnt) :?>
          <tr>
            <td><?= str_pad($noSudah++, 2, '0', STR_PAD_LEFT); ?></td>
            <td><?= $evnt['id_event']; ?></td>
            <td><?= $evnt['nama']; ?></td>
            <td><?= $evnt['Kategori']; ?></td>
            <td><?= $evnt['Point']; ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </section>
</div>


<?= $this->include('admin/partial/footer') ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Jika belum punya Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>


