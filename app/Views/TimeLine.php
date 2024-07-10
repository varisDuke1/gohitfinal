<?= $this->include('partial/header2') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/time.css') ?>">
    <link rel="stylesheet" type="text/css" href="assets/css/time.css">
    <title>Time Line</title>
</head>

<body>
    <div class="wkwww" id="data-container">
        <?php 
        if (!empty($compe)) {
            $counter = 0;
            foreach ($compe as $isi) {
                $class = ($counter % 2 == 0) ? 'lol left' : 'lol right'; // Alternate between left and right
        ?>
                <div class="<?php echo $class; ?> item" style="display: <?php echo $counter < 3 ? 'block' : 'none'; ?>">
                    <div class="hmm">
                        <a href="/dtt/<?php if (isset($isi['id_event'])) echo $isi['id_event'] ?>" class="mx-1 my-3 p-2 d-flex align-items-center" style="flex-basis: 30%; text-decoration: none; color: inherit;">
                            <div class="card">
                                <img src="<?= base_url('assets/image/' . $isi['upload']) ?>" style="height: 350px; width: 400px;" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p><?php echo $isi['date_column'] ?></p>
                                    <h5 class="card-title"><strong><?php echo $isi['title'] ?></strong></h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
        <?php 
                $counter++;
            }
        } else { 
        ?>
            <h1 id="scroll-down">Oops tidak ada kompetisi</h1>
        <?php 
        } 
        ?>
    </div>
    <?php if (!empty($compe) && count($compe) > 3) { ?>
        <div style="text-align: center; margin-top: 20px; margin-bottom: 20px;">
            <button id="load-more" class="btn btn-primary">Load More</button>
        </div>
    <?php } ?>

    <script>
        document.getElementById('load-more').addEventListener('click', function() {
            const items = document.querySelectorAll('.item');
            let visibleItems = Array.from(items).filter(item => item.style.display === 'block').length;
            let itemsToShow = visibleItems + 3;

            for (let i = visibleItems; i < itemsToShow && i < items.length; i++) {
                items[i].style.display = 'block';
            }

            if (itemsToShow >= items.length) {
                document.getElementById('load-more').style.display = 'none';
            }
        });
    </script>
</body>
</html>
<?= $this->include('partial/footer') ?>
