<link rel="stylesheet" type="text/css" href="css/main.css">
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
<link rel="stylesheet" href="<?= base_url('assets/css/style.css.map') ?>">
<link rel="stylesheet" href="<?= base_url('css/main.css') ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<?= $this->include('partial/header2') ?>
<div>
    <div class="limiter">
        <div class="container-login1001" style="background-image: url('images/bg-01.jpg');">
            <div class="wrap-login1001 p-l-55 p-r-55 p-t-65 p-b-54" style="margin-top: 25px; background-color: azure;">
                <form class="login100-form validate-form">
                    <span class="login100-form-title p-b-49">
                        <?php if (isset($selectedevent[0]['title'])) echo $selectedevent[0]['title'] ?>

                    </span>
                    <table class="pp">
                        <tbody>
                            <tr class="mm">
                                <td>Date</td>
                                <td class="ll">:</td>
                                <td class="ll"><?php if (isset($selectedevent[0]['date_column']))  $tgl =  strtotime($selectedevent[0]['date_column']);
                                                echo date("d M Y", $tgl) ?></td>
                            </tr>
                            <tr class="mm">
                                <td>Time</td>
                                <td class="ll">:</td>
                                <td class="ll"><?php if (isset($selectedevent[0]['time'])) echo $selectedevent[0]['time'] ?></td>
                            </tr>
                            <tr class="mm">
                                <td>Organizer</td>
                                <td class="ll">:</td>
                                <td class="ll"><?php if (isset($selectedevent[0]['organizer'])) echo $selectedevent[0]['organizer'] ?></td>
                            </tr>
                            <tr class="mm">
                                <td>Location</td>
                                <td class="ll">:</td>
                                <td class="ll"><?php if (isset($selectedevent[0]['location'])) echo $selectedevent[0]['location'] ?></td>
                            </tr>
                            <tr class="mm">
                                <td>Participant</td>
                                <td class="ll">:</td>
                                <td class="ll"><?php if (isset($selectedevent[0]['participant'])) echo $selectedevent[0]['participant'] ?></td>
                            </tr>
                            <tr class="mm">
                                <td>Contact Person</td>
                                <td class="ll">:</td>
                                <td class="ll"><?php if (isset($selectedevent[0]['time'])) echo $selectedevent[0]['time'] ?></td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
            <div class="card mx-2">
                <img src="<?= base_url('assets/image/' . $selectedevent[0]['upload']) ?>" style="height: 400px; width: 450px; " class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><strong>BELUM ADA YANG MENDAFTAR!!</strong></h5>
                </div>
            </div>
        </div>
    </div>
</div>
<input type="hidden" name="lol" value="<?php echo $nama ?>" class="formbold-form-input" />
    <div class="modal fade" id="approvalModal" tabindex="-1" aria-labelledby="approvalModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header bg-warning text-white">
            <h5 class="modal-title" id="approvalModalLabel">Pemberitahuan</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Event Anda <strong>belum disetujui</strong> oleh admin. Harap tunggu persetujuan sebelum melanjutkan.
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Mengerti</button>
        </div>
        </div>
    </div>
    </div>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Show modal if event not approved -->
    <?php if (isset($selectedevent[0]['Persetujuan']) && $selectedevent[0]['Persetujuan'] == 'Belum') : ?>
    <script>
        window.onload = function() {
            var approvalModal = new bootstrap.Modal(document.getElementById('approvalModal'));
            approvalModal.show();
        };
    </script>
    <?php endif; ?>
<div>
    <?= $this->include('partial/peserta') ?>
</div>
<div>
    <?= $this->include('partial/bracket'.$selectedevent[0]['participant']) ?>
</div>
<div>
    <?= $this->include('partial/podiump') ?>
</div>
<?= $this->include('partial/latest') ?>
<?= $this->include('partial/footer') ?>