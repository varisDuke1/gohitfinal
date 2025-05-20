<link rel="stylesheet" href="<?= base_url('assets/css/peserta.css') ?>">
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet" />
<style>
    .entry-player-all-wrap1 {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .entry-player-pair-wrap {
        width: 450px;
        padding: 10px;
        box-sizing: border-box;
    }

    .entry-player-wrap {
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 10px;
    }

    .entry-player-image img {
        max-width: 75%;
        height: auto;
    }

    .entry-player-flag img {
        max-width: 20px;
        height: auto;
        vertical-align: middle;
    }

    .entry-player-flag .l {
        margin-left: 5px;
        vertical-align: middle;
    }

    .hero h1 {
        font-family: "Holtwood One SC", serif;
        font-weight: normal;
        font-size: 5.4em;
        margin: 0 0 20px;
        text-shadow: 0 0 12px rgba(0, 0, 0, 0.5);
        text-transform: uppercase;
        letter-spacing: -1px;
    }

    .hero p {
        font-family: "Abel", sans-serif;
        text-transform: uppercase;
        color: #5cca87;
        letter-spacing: 6px;
        text-shadow: 0 0 12px rgba(0, 0, 0, 0.5);
        font-size: 1.2em;
    }

    .hero-wrap {
        padding: 3.5em 10px;
    }

    .hero p.intro {
        font-family: "Holtwood One SC", serif;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-size: 3em;
        margin-bottom: -40px;
    }

    .hero p.year {
        color: #fff;
        letter-spacing: 20px;
        font-size: 34px;
        margin: -25px 0 25px;
    }

    .hero p.year i {
        font-size: 14px;
        vertical-align: middle;
    }
    .modal-backdrop {
      z-index: 1040 !important;
    }
    .modal-content {
      z-index: 1050 !important;
    }
</style>
<header class="hero">
    <center>
        <div class="hero-wrap">
            <p class="intro" id="intro">Peserta</p>
        </div>
    </center>
</header>
<script>
    function showConfirmation() {
        var confirmation = confirm("Apakah Anda ingin bergabung?");
        if (confirmation) {
            var form = document.getElementById("join-form");
            form.submit();
        } else {
            alert("Cancel");
        }
    }
</script>
<form method="POST" action="/join/add" id="soloJoinForm" style="display:none;">
  <input type="hidden" name="idevent" value="<?= esc($selectedevent[0]['id_event']) ?>" />
  <input type="hidden" name="iduser" value="<?= esc($id_user ?? '') ?>">
</form>
<div class="entry-player-all-wrap1">
    <?php if (!empty($compe)) {
        foreach ($compe as $isi) {
    ?>
            <div class="entry-player-all-wrap">
                <div class="entry-player-pair-wrap">
                    <div class="entry-player-wrap">
                        <div class="entry-player-image">
                            <img src="https://w7.pngwing.com/pngs/529/972/png-transparent-award-prize-medal-computer-icons-award-culture-trophy-symbol-thumbnail.png" class=" b-error">
                        </div>
                        <div class="entry-player-info-wrap">
                            <div class="entry-player-name">
                                <?php echo $isi['nama'] ?></div>
                            <div class="entry-player-flag">
                                <p>Denmark</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    <?php } else { ?>
        <div style="text-align: center;">
            <h1>Tidak ada peserta</h1>
        </div>
    <?php } ?>
</div>
<?php if (isset($nama)) : ?>
    <?php if ($id_user != $selectedevent[0]['id_user']) : ?>

        <!-- Trigger Join -->
        <center>
            <?php
                $eventLevel = $selectedevent[0]['Tingkatan'];
                $userLevel  = $level;
                $canByLevel = ($userLevel === $eventLevel);
            ?>

            <?php if ($show_join_button && $canByLevel) : ?>
                <p>
                Level Anda: <strong><?= esc($userLevel) ?></strong> |
                Poin: <?= esc($user_point) ?><br>
                Slot: <?= esc($current_participants) ?> / <?= esc($max_participants) ?>
                </p>
                <button
                type="button"
                class="btn btn-primary fw-bold"
                style="margin-top: 2cm;"
                onclick="showConfirmation()"
                >JOIN</button>
            <?php else : ?>
                <div class="text-center mt-3">
                    <p><strong>Tidak bisa JOIN:</strong></p>
                    <?php if (!$canByLevel) : ?>
                        <p>Level Anda (<strong><?= esc($userLevel) ?></strong>) tidak sesuai dengan level event (<strong><?= esc($eventLevel) ?></strong>).</p>
                    <?php else : ?>
                        <p><?= esc($join_status_message ?? 'Anda tidak memenuhi syarat poin/level untuk mengikuti event ini.') ?></p>
                    <?php endif; ?>
                    <p>Slot: <?= esc($current_participants) ?> / <?= esc($max_participants) ?></p>
                </div>
            <?php endif; ?>
        </center>


        <!-- Modal Join Tim -->
        <div id="teamModal" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document" style="margin:10% auto; max-width:500px;">
                <div class="modal-content">
                <div class="modal-header d-flex justify-content-between align-items-center">
                    <h5 class="modal-title">Gabung Tim</h5>
                    <button onclick="closeTeamModal()" style="border:none; background:none; font-size:20px;">&times;</button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="/join/add" id="teamJoinForm">
                    <input type="hidden" name="idevent" value="<?= esc($selectedevent[0]['id_event']) ?>" />
                    <input type="hidden" name="iduser" value="<?= esc($id_user) ?>" />

                    <?php for ($i = 1; $i < intval($selectedevent[0]['NOT']); $i++) : ?>
                        <div class="mb-3">
                        <label for="id_user<?= $i ?>">Anggota Tim <?= $i ?></label>
                        <select name="id_user<?= $i ?>" class="form-control" required>
                            <option value="">-- Pilih Anggota --</option>
                            <?php foreach ($allUsers as $u): ?>
                            <?php if ($u['id_user'] != $id_user): ?>
                                <option value="<?= $u['id_user'] ?>"><?= esc($u['nama']) ?></option>
                            <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                        </div>
                    <?php endfor; ?>

                    <div class="text-end">
                        <button type="submit" class="btn btn-success">Gabung</button>
                        <button type="button" class="btn btn-secondary" onclick="closeTeamModal()">Batal</button>
                    </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
<?php endif; ?>

<script>
function showConfirmation() {
  const jumlahAnggota = <?= intval($selectedevent[0]['NOT']) ?>;

  Swal.fire({
    title: 'Yakin ingin bergabung?',
    html: `
      <p>Event: <strong><?= esc($selectedevent[0]['title']) ?></strong></p>
      <p>Level Anda: <strong><?= esc($level) ?></strong></p>
      <p>Slot: <?= esc($current_participants) ?> / <?= esc($max_participants) ?></p>
    `,
    icon: 'question',
    showCancelButton: true,
    confirmButtonText: jumlahAnggota > 1 ? 'Ya, Pilih Tim!' : 'Ya, Gabung!',
    cancelButtonText: 'Tidak',
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#aaa'
  }).then((result) => {
    if (result.isConfirmed) {
      if (jumlahAnggota > 1) {
        showTeamModal(); // Event tim
      } else {
        document.getElementById("soloJoinForm").submit(); // Event solo
      }
    }
  });
}

function showTeamModal() {
  $('#teamModal').modal('show');
}

function closeTeamModal() {
  $('#teamModal').modal('hide');
}
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

