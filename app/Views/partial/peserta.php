<link rel="stylesheet" href="<?= base_url('assets/css/peserta.css') ?>">
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