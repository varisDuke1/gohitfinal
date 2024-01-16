<?= $this->include('partial/header2') ?>
<div>

    <div class="landing-container">
        <div class="form-container">
            <img style="height: 170px; width: 170px" src="<?= base_url('assets/image/piala.png') ?>" alt="">
            <h1>Create Your Competition !</h1>
            <h5>Got an event with multiple </h5>
            <h5>tournaments? We got you.</h5>
            <h5>Use Challonge's Event feature</h5>
            <script>
                function scrollToBottom() {
                    var height = document.body.scrollHeight;
                    window.scroll(0, height);
                }
            </script>
            <button class="buy-button" onclick="scrollToBottom()">Check</button>
        </div>
        <img id="background-image" src="<?= base_url('assets/image/bgfull.png') ?>" alt="Background Image">
    </div>

    <div class="below" id="scroll-down">
        <?= $this->include('partial/latest') ?>
    </div>
    <div class="container mt-0" id="scroll-down">
        <h1 class="mb-4 fw-bold"><strong>Choose Your Sport</strong></h1>
        <div class="d-flex justify-content-around flex-wrap">
            <a href="/list/Badminton" class="mx-4 my-3 p-2 d-flex align-items-center "
                style="flex-basis: 25%; text-decoration: none; color: inherit;">
                <img src="<?= base_url('assets/image/badminton-logo.png') ?>" alt="" class="me-3">
                <div>
                    <h2><strong>Badminton</strong></h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere.</p>
                </div>
            </a>
            <a href="/list" class="mx-4 my-3 p-2 d-flex align-items-center "
                style="flex-basis: 25%; text-decoration: none; color: inherit;">
                <img src="<?= base_url('assets/image/football.png') ?>" alt="" class="me-3">
                <div>
                    <h2><strong>FOOTBALL</strong></h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere.</p>
                </div>
            </a>
            <a href="/list" class="mx-4 my-3 p-2 d-flex align-items-center "
                style="flex-basis: 25%; text-decoration: none; color: inherit;">
                <img src="<?= base_url('assets/image/pimpong.png') ?>" alt="" class="me-3">
                <div>
                    <h2><strong>PING - PONG</strong></h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere.</p>
                </div>
            </a>
            <a href="/list" class="mx-4 my-3 p-2 d-flex align-items-center "
                style="flex-basis: 25%; text-decoration: none; color: inherit;">
                <img src="<?= base_url('assets/image/running.png') ?>" alt="" class="me-3">
                <div>
                    <h2><strong>RUNNING</strong></h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere.</p>
                </div>
            </a>
            <a href="/list/Esport" class="mx-4 my-3 p-2 d-flex align-items-center "
                style="flex-basis: 25%; text-decoration: none; color: inherit;">
                <img src="<?= base_url('assets/image/esport.png') ?>" alt="" class="me-3">
                <div>
                    <h2><strong>E-SPORT</strong></h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere.</p>
                </div>
            </a>
        </div>
    </div>
    <div class="container mt-3">
        <center>
            <h1 class="mb-4 fw-bold" id="scroll-down"><strong>Hot Event</strong></h1>
        </center>
        <div class="d-flex justify-content-around flex-wrap card-group mt-4" id="scroll-down">
            <?php if (!empty($compe)) {
                foreach ($compe as $isi) {
                    ?>
                    <a href="/dtt/<?php if (isset($isi['id_event']))
                        echo $isi['id_event'] ?>" class="mx-1 my-3 p-2 d-flex align-items-center "
                            style="flex-basis: 30%; text-decoration: none; color: inherit;">
                            <div class="card">
                                <img src="<?= base_url('assets/image/' . $isi['upload']) ?>" style="height: 350px; width: 400px; "
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <p>
                                    <?php echo $isi['date_column'] ?>
                                </p>
                                <h5 class="card-title"><strong>
                                        <?php echo $isi['title'] ?>
                                    </strong></h5>
                            </div>
                        </div>
                    </a>
                <?php } ?>
            <?php } else { ?>
                <h1 id="scroll-down">Oops tidak ada kompetisi</h1>
            <?php } ?>
        </div>
        <div class="">
            <center>
                <a href="hots">
                    <button type="button" class="btn btn-primary mt-4 "
                        style="font-size: 20px !important; width: 500px !important;">See All Hot Event</button>
                </a>
            </center>
        </div>
    </div>
    <div class="motivasi text-center mt-5" id="scroll-down">
        <img src="<?= base_url('assets/image/motivate-home.png') ?>" alt="" srcset="" style="width: 80%;">
    </div>
    <div class="plan-title" id="scroll-down">
        <H1>Plan</H1>
    </div>
    <div class="plans-container">

        <div class="plan" id="plan-1">
            <h2>Basic</h2>
            <p>Mulai Rp 5.000</p>
            <p></p>
            <ul>
                <li>Join All Event</li>
                <li>Once Free Create Event</li>
                <li>Max 4 Participant / Event</li>
            </ul>
            <?php if (isset($nama)) { ?>
                <button id="pay-button" class="buy-button">Buy Now!</button>
                <script src="https://app.midtrans.com/snap/snap.js" data-client-key="Mid-client-n2aVs3WnHVM-87No"></script>
                <script type="text/javascript">
                    document.getElementById('pay-button').onclick = function () {
                        // SnapToken acquired from previous step
                        var data = {
                            sub: '1'
                        };

                        // Simpan data sesi menggunakan JavaScript
                        for (var key in data) {
                            if (data.hasOwnProperty(key)) {
                                sessionStorage.setItem(key, data[key]);
                            }
                        }
                        snap.pay('<?= $snapToken ?>', {
                            // Optional
                            onSuccess: function (result) {
                                var data = {
                                    sub: '1'
                                };

                                // Simpan data sesi menggunakan JavaScript
                                for (var key in data) {
                                    if (data.hasOwnProperty(key)) {
                                        sessionStorage.setItem(key, data[key]);
                                    }
                                }
                                /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                            },
                            // Optional
                            onPending: function (result) {
                                /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                            },
                            // Optional
                            onError: function (result) {
                                /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                            }
                        });
                    };
                </script>
            <?php } else { ?>
                <a href="/login"><button type="button" class="btn btn-primary fw-bold">Buy Now!</button></a>
            <?php } ?>
        </div>

        <div class="plan" id="plan-2">
            <h2>Novice</h2>
            <p>Mulai Rp 60.000</p>
            <p></p>
            <ul>
                <li>Join All Event</li>
                <li>Free Create 5 Event</li>
                <li>Max 32 Participant / Event</li>
            </ul>
            <?php if (isset($nama)) { ?>
                <button id="pay-button1" class="buy-button">Buy Now!</button>
                <script src="https://app.midtrans.com/snap/snap.js" data-client-key="Mid-client-7nv9Nia0G5lubrMD"></script>
                <script type="text/javascript">
                    document.getElementById('pay-button1').onclick = function () {
                        // SnapToken acquired from previous step

                        snap.pay('<?= $snapToken1 ?>', {
                            // Optional
                            onSuccess: function (result) {
                                var data = {
                                    sub: '2'
                                };

                                // Simpan data sesi menggunakan JavaScript
                                for (var key in data) {
                                    if (data.hasOwnProperty(key)) {
                                        sessionStorage.setItem(key, data[key]);
                                    }
                                }
                                    /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                            },
                            // Optional
                            onPending: function (result) {
                                    /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                            },
                            // Optional
                            onError: function (result) {
                                    /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                            }
                        });
                    };
                </script>
            <?php } else { ?>
                <a href="/login"><button type="button" class="btn btn-primary fw-bold">Buy Now!</button></a>
            <?php } ?>
        </div>

        <div class="plan" id="plan-3">
            <h2>Organizer</h2>
            <p style="margin:0px">Mulai Rp 660.000</p>
            <p style="font-size:9px">*55.000/Month</p>
            <ul>
                <li>Join All Event</li>
                <li>Create Unlimited Event</li>
                <li>Max 32 Participant / Event</li>
            </ul>
            <?php if (isset($nama)) { ?>
                <button id="pay-button2" class="buy-button">Buy Now!</button>
                <script src="https://app.midtrans.com/snap/snap.js" data-client-key="Mid-client-n2aVs3WnHVM-87No"></script>
                <script type="text/javascript">
                    document.getElementById('pay-button2').onclick = function () {
                        // SnapToken acquired from previous step

                        snap.pay('<?= $snapToken2 ?>', {
                            // Optional
                            onSuccess: function (result) {
                                var data = {
                                    sub: '3'
                                };

                                // Simpan data sesi menggunakan JavaScript
                                for (var key in data) {
                                    if (data.hasOwnProperty(key)) {
                                        sessionStorage.setItem(key, data[key]);
                                    }
                                }
                                    /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                            },
                            // Optional
                            onPending: function (result) {
                                    /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                            },
                            // Optional
                            onError: function (result) {
                                    /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                            }
                        });
                    };
                </script>
            <?php } else { ?>
                <a href="/login"><button type="button" class="btn btn-primary fw-bold">Buy Now!</button></a>
            <?php } ?>

        </div>
    </div>

</div>
</div>
<script>
    // Menggunakan JavaScript untuk menangani perubahan transformasi saat pengguliran
    window.addEventListener('scroll', function () {
        var scrolled = window.scrollY;
        document.getElementById('background-image').style.transform = 'translateY(' + -scrolled * 0.5 + 'px)';
        document.getElementById('scroll-down').style.transform = 'translateY(' + -scrolled * 0.1 + 'px)';
    });

    document.getElementById('down').addEventListener('click', function () {
        scrollToSection('section3');
    });

    function scrollToSection(sectionId) {
        var section = document.getElementById(sectionId);
        if (section) {
            section.scrollIntoView({
                behavior: 'smooth'
            });
        }
    }
</script>
<?= $this->include('partial/footer') ?>