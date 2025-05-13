<?= $this->include('admin/partial/header') ?>
<?= $this->include('admin/partial/sidebar') ?>

<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1><i class="fas fa-users"></i> Tournament List</h1>
    </div>
    <div class="section-body">
      <h4 class="mb-3">📌 Belum Disetujui</h4>
      <table id="table-belum" class="display table table-striped" style="width:100%">
        <thead>
          <tr>
            <th>No</th>
            <th>Title</th>
            <th>Type Sport</th>
            <th>Date/time</th>
            <th>Participant</th>
            <th>Location</th>
            <th>Organizer</th>
            <th>Persetujuan</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $noBelum = 1; foreach ($tournament as $evnt) :
            if ($evnt['Persetujuan'] === 'Belum') : ?>
          <tr>
            <td><?= str_pad($noBelum++, 2, '0', STR_PAD_LEFT); ?></td>
            <td><?= $evnt['title']; ?></td>
            <td><?= $evnt['type_sport']; ?></td>
            <td><?= $evnt['date_column'] . " (" . $evnt['time'] . ")"; ?></td>
            <td><?= $evnt['participant']; ?></td>
            <td><?= $evnt['location']; ?></td>
            <td><?= $evnt['organizer']; ?></td>
            <td><?= $evnt['Persetujuan']; ?></td>
            <td>
            <button class="btn btn-warning btn-sm editBtn"
              data-id="<?= $evnt['id_event']; ?>"
              data-title="<?= $evnt['title']; ?>"
              data-type_sport="<?= $evnt['type_sport']; ?>"
              data-date="<?= $evnt['date_column']; ?>"
              data-time="<?= $evnt['time']; ?>"
              data-participant="<?= $evnt['participant']; ?>"
              data-location="<?= $evnt['location']; ?>"
              data-organizer="<?= $evnt['organizer']; ?>"
              data-persetujuan="<?= $evnt['Persetujuan']; ?>"
              data-toggle="modal"
              data-target="#editModal">
              <i class="fas fa-edit"></i>
            </button>
            </td>
          </tr>
          <?php endif; endforeach; ?>
        </tbody>
      </table>

      <!-- PEMISAH -->
      <hr class="my-5">

      <!-- TABEL BAWAH: SUDAH DISETUJUI -->
      <h4 class="mb-3">✅ Sudah Disetujui</h4>
      <table id="table-sudah" class="display table table-striped" style="width:100%">
        <thead>
          <tr>
            <th>No</th>
            <th>Title</th>
            <th>Type Sport</th>
            <th>Date/time</th>
            <th>Participant</th>
            <th>Location</th>
            <th>Organizer</th>
            <th>Persetujuan</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $noSudah = 1; foreach ($tournament as $evnt) :
            if ($evnt['Persetujuan'] === 'Sudah') : ?>
          <tr>
            <td><?= str_pad($noSudah++, 2, '0', STR_PAD_LEFT); ?></td>
            <td><?= $evnt['title']; ?></td>
            <td><?= $evnt['type_sport']; ?></td>
            <td><?= $evnt['date_column'] . " (" . $evnt['time'] . ")"; ?></td>
            <td><?= $evnt['participant']; ?></td>
            <td><?= $evnt['location']; ?></td>
            <td><?= $evnt['organizer']; ?></td>
            <td><?= $evnt['Persetujuan']; ?></td>
            <td>
            <button class="btn btn-warning btn-sm editBtn"
              data-id="<?= $evnt['id_event']; ?>"
              data-title="<?= $evnt['title']; ?>"
              data-type_sport="<?= $evnt['type_sport']; ?>"
              data-date="<?= $evnt['date_column']; ?>"
              data-time="<?= $evnt['time']; ?>"
              data-participant="<?= $evnt['participant']; ?>"
              data-location="<?= $evnt['location']; ?>"
              data-organizer="<?= $evnt['organizer']; ?>"
              data-persetujuan="<?= $evnt['Persetujuan']; ?>"
              data-toggle="modal"
              data-target="#editModal">
              <i class="fas fa-edit"></i>
            </button>
            </td>
          </tr>
          <?php endif; endforeach; ?>
        </tbody>
      </table>
    </div>
  </section>
</div>

<!-- Modal Pop-up -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form action="<?= base_url('tournament/update') ?>" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit Tournament</h5>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <input type="hidden" name="id" id="edit-id">

          <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control" id="edit-title" required>
          </div>

          <div class="form-group">
            <label>Type Sport</label>
            <select name="type_sport" class="form-control" id="edit-type_sport" required>
              <option value="Esport">Esport</option>
              <option value="Badminton">Badminton</option>
              <option value="Fottball">Fottball</option>
              <option value="Pim_Pong">Pim_Pong</option>
              <option value="Running">Running</option>
            </select>
          </div>

          <div class="form-group">
            <label>Date</label>
            <input type="date" name="date" class="form-control" id="edit-date" required>
          </div>

          <div class="form-group">
            <label>Time</label>
            <input type="time" name="time" class="form-control" id="edit-time" required>
          </div>

          <div class="form-group">
            <label>Participant</label>
            <select name="participant" class="form-control" id="edit-participant" required>
              <option value="8">8</option>
              <option value="16">16</option>
              <option value="32">32</option>
            </select>
          </div>

          <div class="form-group">
            <label>Location</label>
            <input type="text" name="location" class="form-control" id="edit-location" required>
          </div>

          <div class="form-group">
            <label>Organizer</label>
            <input type="text" name="organizer" class="form-control" id="edit-organizer" required>
          </div>

          <div class="form-group">
            <label>Persetujuan</label>
            <select name="Persetujuan" class="form-control" id="edit-Persetujuan" required>
              <option value="Belum">Belum</option>
              <option value="Sudah">Sudah</option>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Save Changes</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </form>
  </div>
</div>


<?= $this->include('admin/partial/footer') ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Jika belum punya Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
$('.editBtn').on('click', function () {
  $('#edit-id').val($(this).data('id'));
  $('#edit-title').val($(this).data('title'));
  $('#edit-type_sport').val($(this).data('type_sport'));
  $('#edit-date').val($(this).data('date'));
  $('#edit-time').val($(this).data('time'));
  $('#edit-participant').val($(this).data('participant'));
  $('#edit-location').val($(this).data('location'));
  $('#edit-organizer').val($(this).data('organizer'));
  $('#edit-Persetujuan').val($(this).data('persetujuan')); // lowercase!
});
</script>


