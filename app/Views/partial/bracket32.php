<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script|Herr+Von+Muellerhoff' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Istok+Web|Roboto+Condensed:700' rel='stylesheet' type='text/css'>

    <title>March Madness Stock Matchup</title>

    <style>
        body {
            font-family: 'Istok Web', sans-serif;
            background-size: cover;
            min-height: 100%;
            margin: 0;
        }

        #bracket {
            overflow: hidden;
            background-color: #e1e1e1;
            background-color: rgba(225, 225, 225, 0.9);
            padding-top: 20px;
            font-size: 12px;
            margin-top: 200px;
            padding: 40px 0;
        }

        .container {
            max-width: 11000px;
            max-height: 11000px;
            margin: 0 auto;
            display: block;
            display: -webkit-box;
            display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: -webkit-flex;
            display: flex;
            -webkit-flex-direction: row;
            flex-direction: row;
        }

        .split {
            display: block;
            float: left;
            display: -webkit-box;
            display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            width: 42%;
            height: 1000px;
            -webkit-flex-direction: row;
            -moz-flex-direction: row;
            flex-direction: row;
        }

        .champion {
            float: left;
            display: block;
            width: 16%;
            -webkit-flex-direction: row;
            flex-direction: row;
            -webkit-align-self: center;
            align-self: center;
            margin-top: -200px;
            text-align: center;
            padding: 230px 0\9;
        }

        .champion i {
            color: #a0a6a8;
            font-size: 45px;
            padding: 10px 0;
        }

        .round {
            display: block;
            float: left;
            display: -webkit-box;
            display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-flex-direction: column;
            flex-direction: column;
            width: 95%;
            width: 30.8333%\9;
        }

        .split-two {}

        .split-one .round {
            margin: 0 2.5% 0 0;
        }

        .split-two .round {
            margin: 0 0 0 2.5%;
        }

        .matchup {
            margin: 0;
            width: 100%;
            padding: 10px 0;
            height: 60px;
            -webkit-transition: all 0.2s;
            transition: all 0.2s;
        }

        .matchup2 {
            margin-top: 70px;
            width: 100%;
            padding: 10px 0;
            height: 60px;
            -webkit-transition: all 0.2s;
            transition: all 0.2s;
        }

        .matchup3 {
            margin-top: 45px;
            width: 100%;
            padding: 10px 0;
            height: 60px;
            -webkit-transition: all 0.2s;
            transition: all 0.2s;
        }

        .score {
            font-size: 11px;
            text-transform: uppercase;
            float: right;
            color: #2C7399;
            font-weight: bold;
            font-family: 'Roboto Condensed', sans-serif;
            position: absolute;
            right: 5px;
        }

        .team {
            padding: 0 5px;
            margin: 3px 0;
            height: 80px;
            line-height: 25px;
            white-space: nowrap;
            overflow: hidden;
            position: relative;
        }

        .team2 {
            padding: 0 5px;
            margin: 3px 0;
            height: 40px;
            line-height: 25px;
            white-space: nowrap;
            overflow: hidden;
            position: relative;
        }

        .round-two .matchup {
            margin: 0;
            height: 60px;
            padding: 50px 0;
        }

        .round-three .matchup {
            margin: 0;
            height: 60px;
            padding: 130px 0;
        }

        .round-details {
            font-family: 'Roboto Condensed', sans-serif;
            font-size: 13px;
            color: #2C7399;
            text-transform: uppercase;
            text-align: center;
            height: 40px;
        }

        .champion li,
        .round li {
            background-color: #fff;
            box-shadow: none;
            opacity: 0.45;
        }

        .current li {
            opacity: 1;
        }

        .current li.team {
            background-color: #fff;
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.1);
            opacity: 1;
        }

        .vote-options {
            display: block;
            height: 52px;
        }

        .share .container {
            margin: 0 auto;
            text-align: center;
        }

        .share-icon {
            font-size: 24px;
            color: #fff;
            padding: 25px;
        }

        .share-wrap {
            max-width: 1100px;
            text-align: center;
            margin: 60px auto;
        }

        .final {
            margin: 4.5em 0;
        }

        @-webkit-keyframes pulse {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1);
            }

            50% {
                -webkit-transform: scale(1.3);
                transform: scale(1.3);
            }

            100% {
                -webkit-transform: scale(1);
                transform: scale(1);
            }
        }

        @keyframes pulse {
            0% {
                -webkit-transform: scale(1);
                -ms-transform: scale(1);
                transform: scale(1);
            }

            50% {
                -webkit-transform: scale(1.3);
                -ms-transform: scale(1.3);
                transform: scale(1.3);
            }

            100% {
                -webkit-transform: scale(1);
                -ms-transform: scale(1);
                transform: scale(1);
            }
        }

        .share-icon {
            color: #fff;
            opacity: 0.35;
        }

        .share-icon:hover {
            opacity: 1;
            -webkit-animation: pulse 0.5s;
            animation: pulse 0.5s;
        }

        .date {
            font-size: 10px;
            letter-spacing: 2px;
            font-family: 'Istok Web', sans-serif;
            color: #3F915F;
        }



        @media screen and (min-width: 981px) and (max-width: 1099px) {
            .container {
                margin: 0 1%;
            }

            .champion {
                width: 14%;
            }

            .split {
                width: 43%;
            }

            .split-one .vote-box {
                margin-left: 138px;
            }

            .hero p.intro {
                font-size: 28px;
            }

            .hero p.year {
                margin: 5px 0 10px;
            }

        }

        @media screen and (max-width: 980px) {
            .container {
                -webkit-flex-direction: column;
                -moz-flex-direction: column;
                flex-direction: column;
            }

            .split,
            .champion {
                width: 90%;
                margin: 35px 5%;
            }

            .champion {
                -webkit-box-ordinal-group: 3;
                -moz-box-ordinal-group: 3;
                -ms-flex-order: 3;
                -webkit-order: 3;
                order: 3;
            }

            .split {
                border-bottom: 1px solid #b6b6b6;
                padding-bottom: 20px;
            }

            .hero p.intro {
                font-size: 24px;
            }

            .hero h1 {
                font-size: 3em;
                margin: 15px 0;
            }

            .hero p {
                font-size: 1em;
            }
        }


        @media screen and (max-width: 400px) {

            .split {
                width: 95%;
                margin: 25px 2.5%;
            }

            .round {
                width: 21%;
            }

            .current {
                -webkit-flex-grow: 1;
                -moz-flex-grow: 1;
                flex-grow: 1;
            }

            .hero h1 {
                font-size: 2.15em;
                letter-spacing: 0;
                margin: 0;
            }

            .hero p.intro {
                font-size: 1.15em;
                margin-bottom: -10px;
            }

            .round-details {
                font-size: 90%;
            }

            .hero-wrap {
                padding: 2.5em;
            }

            .hero p.year {
                margin: 5px 0 10px;
                font-size: 18px;
            }

        }
    </style>
</head>

<body>
    <section id="bracket">
        <div class="container">
            <div class="split split-one">
                <div class="round round-one current">
                    <div class="round-details">Round 1<br /><span class="date">March 16</span></div>
                    <ul class="matchup" style="margin-top: 1cm;">
                        <li class="team2 team-top">
                            <?php
                            if (isset($bra[7]['nama'])) {
                                echo $bra[7]['nama'];
                            } else {
                                echo "Data not available";
                            }
                            ?>
                        </li>
                        <li class="team2 team-bottom">
                            <?php
                            if (isset($bra[1]['nama'])) {
                                echo $bra[1]['nama'];
                            } else {
                                echo "Data not available";
                            }
                            ?>
                        </li>
                    </ul>
                    <ul class="matchup" style="margin-top: 1cm;">
                        <li class="team2 team-top">
                            <?php
                            if (isset($bra[0]['nama'])) {
                                echo $bra[0]['nama'];
                            } else {
                                echo "Data not available";
                            }
                            ?>
                        </li>
                        <li class="team2 team-bottom">
                            <?php
                            if (isset($bra[6]['nama'])) {
                                echo $bra[6]['nama'];
                            } else {
                                echo "Data not available";
                            }
                            ?>
                        </li>
                    </ul>
                    <ul class="matchup" style="margin-top: 1cm;">
                        <li class="team2 team-top">
                            <?php
                            if (isset($bra[5]['nama'])) {
                                echo $bra[5]['nama'];
                            } else {
                                echo "Data not available";
                            }
                            ?>
                        </li>
                        <li class="team2 team-bottom">

                            <?php
                            if (isset($bra[3]['nama'])) {
                                echo $bra[3]['nama'];
                            } else {
                                echo "Data not available";
                            }
                            ?>
                        </li>
                    </ul>
                    <ul class="matchup" style="margin-top: 1cm;">
                        <li class="team2 team-top">
                            <?php
                            if (isset($bra[2]['nama'])) {
                                echo $bra[2]['nama'];
                            } else {
                                echo "Data not available";
                            }
                            ?>
                        </li>
                        <li class="team2 team-bottom">

                            <?php
                            if (isset($bra[4]['nama'])) {
                                echo $bra[4]['nama'];
                            } else {
                                echo "Data not available";
                            }
                            ?>
                        </li>
                    </ul>
                    <ul class="matchup" style="margin-top: 1cm;">
                        <li class="team2 team-top">
                            <?php
                            if (isset($bra[23]['nama'])) {
                                echo $bra[23]['nama'];
                            } else {
                                echo "Data not available";
                            }
                            ?>
                        </li>
                        <li class="team2 team-bottom">

                            <?php
                            if (isset($bra[24]['nama'])) {
                                echo $bra[24]['nama'];
                            } else {
                                echo "Data not available";
                            }
                            ?>
                        </li>
                    </ul>
                    <ul class="matchup" style="margin-top: 1cm;">
                        <li class="team2 team-top">
                            <?php
                            if (isset($bra[22]['nama'])) {
                                echo $bra[22]['nama'];
                            } else {
                                echo "Data not available";
                            }
                            ?>
                        </li>
                        <li class="team2 team-bottom">

                            <?php
                            if (isset($bra[26]['nama'])) {
                                echo $bra[26]['nama'];
                            } else {
                                echo "Data not available";
                            }
                            ?>
                        </li>
                    </ul>
                    <ul class="matchup" style="margin-top: 1cm;">
                        <li class="team2 team-top">

                            <?php
                            if (isset($bra[25]['nama'])) {
                                echo $bra[25]['nama'];
                            } else {
                                echo "Data not available";
                            }
                            ?>
                        </li>
                        <li class="team2 team-bottom">

                            <?php
                            if (isset($bra[27]['nama'])) {
                                echo $bra[27]['nama'];
                            } else {
                                echo "Data not available";
                            }
                            ?>
                        </li>
                    </ul>
                    <ul class="matchup" style="margin-top: 1cm;">
                        <li class="team2 team-top">

                            <?php
                            if (isset($bra[21]['nama'])) {
                                echo $bra[21]['nama'];
                            } else {
                                echo "Data not available";
                            }
                            ?>
                        </li>
                        <li class="team2 team-bottom">

                            <?php
                            if (isset($bra[20]['nama'])) {
                                echo $bra[20]['nama'];
                            } else {
                                echo "Data not available";
                            }
                            ?>
                        </li>
                    </ul>
                </div> <!-- END ROUND ONE -->

                <div class="round round-two">
                    <div class="round-details">Round 2<br /><span class="date">March 18</span></div>
                    <ul class="matchup">
                        <li class="team team-top">
                            <div class="entry-player-info-wrap">
                                <div class="entry-player-name">
                                    <select class="form-control player-dropdown" id="playerDropdown1">
                                        <option value="">--Pilih--</option>
                                        <?php if (isset($bra[7]['id_user']) && isset($bra[7]['nama'])) : ?>
                                            <option value="<?php echo $bra[7]['id_user'] ?>"><?php echo $bra[7]['nama'] ?></option>
                                        <?php endif; ?>
                                        <?php if (isset($bra[1]['id_user']) && isset($bra[1]['nama'])) : ?>
                                            <option value="<?php echo $bra[1]['id_user'] ?>"><?php echo $bra[1]['nama'] ?></option>
                                        <?php endif; ?>
                                        <!-- Tambahkan pilihan nama lain sesuai kebutuhan -->
                                    </select>
                                </div>
                                <div class="entry-player-flag">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/2000px-Flag_of_Indonesia.svg.png" class="b-error1">
                                    <span class="l">Indonesia</span>
                                </div>
                            </div>
                        </li>
                        <li class="team team-bottom">
                            <div class="entry-player-info-wrap">
                                <div class="entry-player-name">
                                    <select class="form-control player-dropdown1" id="playerDropdown1">
                                        <option value="">--Pilih--</option>
                                        <?php if (isset($bra[0]['id_user']) && isset($bra[0]['nama'])) : ?>
                                            <option value="<?php echo $bra[0]['id_user'] ?>"><?php echo $bra[0]['nama'] ?></option>
                                        <?php endif; ?>
                                        <?php if (isset($bra[6]['id_user']) && isset($bra[6]['nama'])) : ?>
                                            <option value="<?php echo $bra[6]['id_user'] ?>"><?php echo $bra[6]['nama'] ?></option>
                                        <?php endif; ?>
                                        <!-- Tambahkan pilihan nama lain sesuai kebutuhan -->
                                    </select>
                                </div>
                                <div class="entry-player-flag">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/2000px-Flag_of_Indonesia.svg.png" class="b-error1">
                                    <span class="l">Indonesia</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="matchup" style="margin-top: 100px;">
                        <li class="team team-top">
                            <div class="entry-player-info-wrap">
                                <div class="entry-player-name">
                                    <select class="form-control player-dropdown2" id="playerDropdown1">
                                        <option value="">--Pilih--</option>
                                        <?php if (isset($bra[5]['id_user']) && isset($bra[5]['nama'])) : ?>
                                            <option value="<?php echo $bra[5]['id_user'] ?>"><?php echo $bra[5]['nama'] ?></option>
                                        <?php endif; ?>
                                        <?php if (isset($bra[3]['id_user']) && isset($bra[3]['nama'])) : ?>
                                            <option value="<?php echo $bra[3]['id_user'] ?>"><?php echo $bra[3]['nama'] ?></option>
                                        <?php endif; ?>
                                        <!-- Tambahkan pilihan nama lain sesuai kebutuhan -->
                                    </select>
                                </div>
                                <div class="entry-player-flag">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/2000px-Flag_of_Indonesia.svg.png" class="b-error1">
                                    <span class="l">Indonesia</span>
                                </div>
                            </div>
                        </li>
                        <li class="team team-bottom">
                            <div class="entry-player-info-wrap">
                                <div class="entry-player-name">
                                    <select class="form-control player-dropdown3" id="playerDropdown1">
                                        <option value="">--Pilih--</option>
                                        <?php if (isset($bra[2]['id_user']) && isset($bra[2]['nama'])) : ?>
                                            <option value="<?php echo $bra[2]['id_user'] ?>"><?php echo $bra[2]['nama'] ?></option>
                                        <?php endif; ?>
                                        <?php if (isset($bra[4]['id_user']) && isset($bra[4]['nama'])) : ?>
                                            <option value="<?php echo $bra[4]['id_user'] ?>"><?php echo $bra[4]['nama'] ?></option>
                                        <?php endif; ?>
                                        <!-- Tambahkan pilihan nama lain sesuai kebutuhan -->
                                    </select>
                                </div>
                                <div class="entry-player-flag">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/2000px-Flag_of_Indonesia.svg.png" class="b-error1">
                                    <span class="l">Indonesia</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="matchup" style="margin-top: 100px;">
                        <li class="team team-top">
                            <div class="entry-player-info-wrap">
                                <div class="entry-player-name">
                                    <select class="form-control player-dropdown4" id="playerDropdown1">
                                        <option value="">--Pilih--</option>
                                        <?php if (isset($bra[23]['id_user']) && isset($bra[23]['nama'])) : ?>
                                            <option value="<?php echo $bra[23]['id_user'] ?>"><?php echo $bra[23]['nama'] ?></option>
                                        <?php endif; ?>
                                        <?php if (isset($bra[24]['id_user']) && isset($bra[24]['nama'])) : ?>
                                            <option value="<?php echo $bra[24]['id_user'] ?>"><?php echo $bra[24]['nama'] ?></option>
                                        <?php endif; ?>
                                        <!-- Tambahkan pilihan nama lain sesuai kebutuhan -->
                                    </select>
                                </div>
                                <div class="entry-player-flag">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/2000px-Flag_of_Indonesia.svg.png" class="b-error1">
                                    <span class="l">Indonesia</span>
                                </div>
                            </div>
                        </li>
                        <li class="team team-bottom">
                            <div class="entry-player-info-wrap">
                                <div class="entry-player-name">
                                    <select class="form-control player-dropdown5" id="playerDropdown1">
                                        <option value="">--Pilih--</option>
                                        <?php if (isset($bra[22]['id_user']) && isset($bra[22]['nama'])) : ?>
                                            <option value="<?php echo $bra[22]['id_user'] ?>"><?php echo $bra[22]['nama'] ?></option>
                                        <?php endif; ?>
                                        <?php if (isset($bra[26]['id_user']) && isset($bra[26]['nama'])) : ?>
                                            <option value="<?php echo $bra[26]['id_user'] ?>"><?php echo $bra[26]['nama'] ?></option>
                                        <?php endif; ?>
                                        <!-- Tambahkan pilihan nama lain sesuai kebutuhan -->
                                    </select>
                                </div>
                                <div class="entry-player-flag">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/2000px-Flag_of_Indonesia.svg.png" class="b-error1">
                                    <span class="l">Indonesia</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="matchup" style="margin-top: 100px;">
                        <li class="team team-top">
                            <div class="entry-player-info-wrap">
                                <div class="entry-player-name">
                                    <select class="form-control player-dropdown6" id="playerDropdown1">
                                        <option value="">--Pilih--</option>
                                        <?php if (isset($bra[25]['id_user']) && isset($bra[25]['nama'])) : ?>
                                            <option value="<?php echo $bra[25]['id_user'] ?>"><?php echo $bra[25]['nama'] ?></option>
                                        <?php endif; ?>
                                        <?php if (isset($bra[27]['id_user']) && isset($bra[27]['nama'])) : ?>
                                            <option value="<?php echo $bra[27]['id_user'] ?>"><?php echo $bra[27]['nama'] ?></option>
                                        <?php endif; ?>
                                        <!-- Tambahkan pilihan nama lain sesuai kebutuhan -->
                                    </select>
                                </div>
                                <div class="entry-player-flag">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/2000px-Flag_of_Indonesia.svg.png" class="b-error1">
                                    <span class="l">Indonesia</span>
                                </div>
                            </div>
                        </li>
                        <li class="team team-bottom">
                            <div class="entry-player-info-wrap">
                                <div class="entry-player-name">
                                    <select class="form-control player-dropdown7" id="playerDropdown1">
                                        <option value="">--Pilih--</option>
                                        <?php if (isset($bra[21]['id_user']) && isset($bra[21]['nama'])) : ?>
                                            <option value="<?php echo $bra[21]['id_user'] ?>"><?php echo $bra[21]['nama'] ?></option>
                                        <?php endif; ?>
                                        <?php if (isset($bra[20]['id_user']) && isset($bra[20]['nama'])) : ?>
                                            <option value="<?php echo $bra[20]['id_user'] ?>"><?php echo $bra[20]['nama'] ?></option>
                                        <?php endif; ?>
                                        <!-- Tambahkan pilihan nama lain sesuai kebutuhan -->
                                    </select>
                                </div>
                                <div class="entry-player-flag">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/2000px-Flag_of_Indonesia.svg.png" class="b-error1">
                                    <span class="l">Indonesia</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div> <!-- END ROUND TWO -->

                <div class="round round-three">
                    <div class="round-details">Round 3<br /><span class="date">March 22</span></div>
                    <ul class="matchup" style="margin-top: 1cm;">
                        <li class="team team-top">
                            <div class="entry-player-info-wrap">
                                <div class="entry-player-name">
                                    <select class="form-control player-dropdownQ1" id="playerDropdown1">
                                        <option value="">--Pilih--</option>
                                        <?php if (isset($HH1['id_user']) && isset($HH1['nama'])) : ?>
                                            <option value="<?php echo $HH1['id_user'] ?>"><?php echo $HH1['nama'] ?></option>
                                        <?php endif; ?>
                                        <?php if (isset($HH2['id_user']) && isset($HH2['nama'])) : ?>
                                            <option value="<?php echo $HH2['id_user'] ?>"><?php echo $HH2['nama'] ?></option>
                                        <?php endif; ?>
                                        <!-- Tambahkan pilihan nama lain sesuai kebutuhan -->
                                    </select>
                                </div>
                                <div class="entry-player-flag">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/2000px-Flag_of_Indonesia.svg.png" class="b-error1">
                                    <span class="l">Indonesia</span>
                                </div>
                            </div>
                        </li>
                        <li class="team team-bottom">
                            <div class="entry-player-info-wrap">
                                <div class="entry-player-name">
                                    <select class="form-control player-dropdownQ2" id="playerDropdown1">
                                        <option value="">--Pilih--</option>
                                        <?php if (isset($HH3['id_user']) && isset($HH3['nama'])) : ?>
                                            <option value="<?php echo $HH3['id_user'] ?>"><?php echo $HH3['nama'] ?></option>
                                        <?php endif; ?>
                                        <?php if (isset($HH4['id_user']) && isset($HH4['nama'])) : ?>
                                            <option value="<?php echo $HH4['id_user'] ?>"><?php echo $HH4['nama'] ?></option>
                                        <?php endif; ?>
                                        <!-- Tambahkan pilihan nama lain sesuai kebutuhan -->
                                    </select>
                                </div>
                                <div class="entry-player-flag">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/2000px-Flag_of_Indonesia.svg.png" class="b-error1">
                                    <span class="l">Indonesia</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="matchup" style="margin-top: 3cm;">
                        <li class="team team-top">
                            <div class="entry-player-info-wrap">
                                <div class="entry-player-name">
                                    <select class="form-control player-dropdownQ3" id="playerDropdown1">
                                        <option value="">--Pilih--</option>
                                        <?php if (isset($HH11['id_user']) && isset($HH11['nama'])) : ?>
                                            <option value="<?php echo $HH11['id_user'] ?>"><?php echo $HH11['nama'] ?></option>
                                        <?php endif; ?>
                                        <?php if (isset($HH12['id_user']) && isset($HH12['nama'])) : ?>
                                            <option value="<?php echo $HH12['id_user'] ?>"><?php echo $HH12['nama'] ?></option>
                                        <?php endif; ?>
                                        <!-- Tambahkan pilihan nama lain sesuai kebutuhan -->
                                    </select>
                                </div>
                                <div class="entry-player-flag">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/2000px-Flag_of_Indonesia.svg.png" class="b-error1">
                                    <span class="l">Indonesia</span>
                                </div>
                            </div>
                        </li>
                        <li class="team team-bottom">
                            <div class="entry-player-info-wrap">
                                <div class="entry-player-name">
                                    <select class="form-control player-dropdownQ4" id="playerDropdown1">
                                        <option value="">--Pilih--</option>
                                        <?php if (isset($HH13['id_user']) && isset($HH13['nama'])) : ?>
                                            <option value="<?php echo $HH13['id_user'] ?>"><?php echo $HH13['nama'] ?></option>
                                        <?php endif; ?>
                                        <?php if (isset($HH14['id_user']) && isset($HH14['nama'])) : ?>
                                            <option value="<?php echo $HH14['id_user'] ?>"><?php echo $HH14['nama'] ?></option>
                                        <?php endif; ?>
                                        <!-- Tambahkan pilihan nama lain sesuai kebutuhan -->
                                    </select>
                                </div>
                                <div class="entry-player-flag">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/2000px-Flag_of_Indonesia.svg.png" class="b-error1">
                                    <span class="l">Indonesia</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div> <!-- END ROUND THREE -->
            </div>

            <div class="champion">
                <div class="semis-l">
                    <div class="round-details">west semifinals <br /><span class="date">March 26-28</span></div>
                    <ul class="matchup championship">
                        <li class="team team-top">
                            <div class="entry-player-info-wrap">
                                <div class="entry-player-name">
                                    <select class="form-control player-dropdownS1" id="playerDropdown1">
                                        <option value="">--Pilih--</option>
                                        <?php if (isset($HH5['id_user']) && isset($HH5['nama'])) : ?>
                                            <option value="<?php echo $HH5['id_user'] ?>"><?php echo $HH5['nama'] ?></option>
                                        <?php endif; ?>
                                        <?php if (isset($HH6['id_user']) && isset($HH6['nama'])) : ?>
                                            <option value="<?php echo $HH6['id_user'] ?>"><?php echo $HH6['nama'] ?></option>
                                        <?php endif; ?>
                                        <!-- Tambahkan pilihan nama lain sesuai kebutuhan -->
                                    </select>
                                </div>
                                <div class="entry-player-flag">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/2000px-Flag_of_Indonesia.svg.png" class="b-error1">
                                    <span class="l">Indonesia</span>
                                </div>
                            </div>
                        </li>
                        <li class="team team-bottom">
                            <div class="entry-player-info-wrap">
                                <div class="entry-player-name">
                                    <select class="form-control player-dropdownS2" id="playerDropdown1">
                                        <option value="">--Pilih--</option>
                                        <?php if (isset($HH90['id_user']) && isset($HH90['nama'])) : ?>
                                            <option value="<?php echo $HH90['id_user'] ?>"><?php echo $HH90['nama'] ?></option>
                                        <?php endif; ?>
                                        <?php if (isset($HH91['id_user']) && isset($HH91['nama'])) : ?>
                                            <option value="<?php echo $HH91['id_user'] ?>"><?php echo $HH91['nama'] ?></option>
                                        <?php endif; ?>
                                        <!-- Tambahkan pilihan nama lain sesuai kebutuhan -->
                                    </select>
                                </div>
                                <div class="entry-player-flag">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/2000px-Flag_of_Indonesia.svg.png" class="b-error1">
                                    <span class="l">Indonesia</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="final" style="margin-top: 4cm;">
                    <i class="fa fa-trophy"></i>
                    <div class="round-details">championship <br /><span class="date">March 30 - Apr. 1</span></div>
                    <ul class="matchup championship">
                        <li class="team team-top">
                            <div class="entry-player-info-wrap">
                                <div class="entry-player-name">
                                    <select class="form-control player-dropdownF1" id="playerDropdown1">
                                        <option value="">--Pilih--</option>
                                        <?php if (isset($HH21['id_user']) && isset($HH21['nama'])) : ?>
                                            <option value="<?php echo $HH21['id_user'] ?>"><?php echo $HH21['nama'] ?></option>
                                        <?php endif; ?>
                                        <?php if (isset($HH22['id_user']) && isset($HH22['nama'])) : ?>
                                            <option value="<?php echo $HH22['id_user'] ?>"><?php echo $HH22['nama'] ?></option>
                                        <?php endif; ?>
                                        <!-- Tambahkan pilihan nama lain sesuai kebutuhan -->
                                    </select>
                                </div>
                                <div class="entry-player-flag">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/2000px-Flag_of_Indonesia.svg.png" class="b-error1">
                                    <span class="l">Indonesia</span>
                                </div>
                            </div>
                        </li>
                        <li class="team team-bottom">
                            <div class="entry-player-info-wrap">
                                <div class="entry-player-name">
                                    <select class="form-control player-dropdownF2" id="playerDropdown1">
                                        <option value="">--Pilih--</option>
                                        <?php if (isset($HH23['id_user']) && isset($HH23['nama'])) : ?>
                                            <option value="<?php echo $HH23['id_user'] ?>"><?php echo $HH23['nama'] ?></option>
                                        <?php endif; ?>
                                        <?php if (isset($HH24['id_user']) && isset($HH24['nama'])) : ?>
                                            <option value="<?php echo $HH24['id_user'] ?>"><?php echo $HH24['nama'] ?></option>
                                        <?php endif; ?>
                                        <!-- Tambahkan pilihan nama lain sesuai kebutuhan -->
                                    </select>
                                </div>
                                <div class="entry-player-flag">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/2000px-Flag_of_Indonesia.svg.png" class="b-error1">
                                    <span class="l">Indonesia</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="semis-r" style="margin-top: 200px;">
                    <div class="round-details">east semifinals <br /><span class="date">March 26-28</span></div>
                    <ul class="matchup championship">
                        <li class="team team-top">
                            <div class="entry-player-info-wrap">
                                <div class="entry-player-name">
                                    <select class="form-control player-dropdownS3" id="playerDropdown1">
                                        <option value="">--Pilih--</option>
                                        <?php if (isset($HH81['id_user']) && isset($HH81['nama'])) : ?>
                                            <option value="<?php echo $HH81['id_user'] ?>"><?php echo $HH81['nama'] ?></option>
                                        <?php endif; ?>
                                        <?php if (isset($HH82['id_user']) && isset($HH82['nama'])) : ?>
                                            <option value="<?php echo $HH82['id_user'] ?>"><?php echo $HH82['nama'] ?></option>
                                        <?php endif; ?>
                                        <!-- Tambahkan pilihan nama lain sesuai kebutuhan -->
                                    </select>
                                </div>
                                <div class="entry-player-flag">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/2000px-Flag_of_Indonesia.svg.png" class="b-error1">
                                    <span class="l">Indonesia</span>
                                </div>
                            </div>
                        </li>
                        <li class="team team-bottom">
                            <div class="entry-player-info-wrap">
                                <div class="entry-player-name">
                                    <select class="form-control player-dropdownS4" id="playerDropdown1">
                                        <option value="">--Pilih--</option>
                                        <?php if (isset($HH19['id_user']) && isset($HH19['nama'])) : ?>
                                            <option value="<?php echo $HH19['id_user'] ?>"><?php echo $HH19['nama'] ?></option>
                                        <?php endif; ?>
                                        <?php if (isset($HH20['id_user']) && isset($HH20['nama'])) : ?>
                                            <option value="<?php echo $HH20['id_user'] ?>"><?php echo $HH20['nama'] ?></option>
                                        <?php endif; ?>
                                        <!-- Tambahkan pilihan nama lain sesuai kebutuhan -->
                                    </select>
                                </div>
                                <div class="entry-player-flag">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/2000px-Flag_of_Indonesia.svg.png" class="b-error1">
                                    <span class="l">Indonesia</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>


            <div class="split split-two">


                <div class="round round-three">
                    <div class="round-details">Round 3<br /><span class="date">March 22</span></div>
                    <ul class="matchup" style="margin-top: 1cm;">
                        <li class="team team-top">
                            <div class="entry-player-info-wrap">
                                <div class="entry-player-name">
                                    <select class="form-control player-dropdownQ5" id="playerDropdown1">
                                        <option value="">--Pilih--</option>
                                        <?php if (isset($HH7['id_user']) && isset($HH7['nama'])) : ?>
                                            <option value="<?php echo $HH7['id_user'] ?>"><?php echo $HH7['nama'] ?></option>
                                        <?php endif; ?>
                                        <?php if (isset($HH8['id_user']) && isset($HH8['nama'])) : ?>
                                            <option value="<?php echo $HH8['id_user'] ?>"><?php echo $HH8['nama'] ?></option>
                                        <?php endif; ?>
                                        <!-- Tambahkan pilihan nama lain sesuai kebutuhan -->
                                    </select>
                                </div>
                                <div class="entry-player-flag">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/2000px-Flag_of_Indonesia.svg.png" class="b-error1">
                                    <span class="l">Indonesia</span>
                                </div>
                            </div>
                        </li>
                        <li class="team team-bottom">
                            <div class="entry-player-info-wrap">
                                <div class="entry-player-name">
                                    <select class="form-control player-dropdownQ6" id="playerDropdown1">
                                        <option value="">--Pilih--</option>
                                        <?php if (isset($HH9['id_user']) && isset($HH9['nama'])) : ?>
                                            <option value="<?php echo $HH9['id_user'] ?>"><?php echo $HH9['nama'] ?></option>
                                        <?php endif; ?>
                                        <?php if (isset($HH10['id_user']) && isset($HH10['nama'])) : ?>
                                            <option value="<?php echo $HH10['id_user'] ?>"><?php echo $HH10['nama'] ?></option>
                                        <?php endif; ?>
                                        <!-- Tambahkan pilihan nama lain sesuai kebutuhan -->
                                    </select>
                                </div>
                                <div class="entry-player-flag">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/2000px-Flag_of_Indonesia.svg.png" class="b-error1">
                                    <span class="l">Indonesia</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="matchup" style="margin-top: 3cm;">
                        <li class="team team-top">
                            <div class="entry-player-info-wrap">
                                <div class="entry-player-name">
                                    <select class="form-control player-dropdownQ7" id="playerDropdown1">
                                        <option value="">--Pilih--</option>
                                        <?php if (isset($HH15['id_user']) && isset($HH15['nama'])) : ?>
                                            <option value="<?php echo $HH15['id_user'] ?>"><?php echo $HH15['nama'] ?></option>
                                        <?php endif; ?>
                                        <?php if (isset($HH16['id_user']) && isset($HH16['nama'])) : ?>
                                            <option value="<?php echo $HH16['id_user'] ?>"><?php echo $HH16['nama'] ?></option>
                                        <?php endif; ?>
                                        <!-- Tambahkan pilihan nama lain sesuai kebutuhan -->
                                    </select>
                                </div>
                                <div class="entry-player-flag">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/2000px-Flag_of_Indonesia.svg.png" class="b-error1">
                                    <span class="l">Indonesia</span>
                                </div>
                            </div>
                        </li>
                        <li class="team team-bottom">
                            <div class="entry-player-info-wrap">
                                <div class="entry-player-name">
                                    <select class="form-control player-dropdownQ8" id="playerDropdown1">
                                        <option value="">--Pilih--</option>
                                        <?php if (isset($HH17['id_user']) && isset($HH17['nama'])) : ?>
                                            <option value="<?php echo $HH17['id_user'] ?>"><?php echo $HH17['nama'] ?></option>
                                        <?php endif; ?>
                                        <?php if (isset($HH18['id_user']) && isset($HH18['nama'])) : ?>
                                            <option value="<?php echo $HH18['id_user'] ?>"><?php echo $HH18['nama'] ?></option>
                                        <?php endif; ?>
                                        <!-- Tambahkan pilihan nama lain sesuai kebutuhan -->
                                    </select>
                                </div>
                                <div class="entry-player-flag">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/2000px-Flag_of_Indonesia.svg.png" class="b-error1">
                                    <span class="l">Indonesia</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div> <!-- END ROUND THREE -->

                <div class="round round-two">
                    <div class="round-details">Round 2<br /><span class="date">March 18</span></div>
                    <ul class="matchup">
                        <li class="team team-top">
                            <div class="entry-player-info-wrap">
                                <div class="entry-player-name">
                                    <select class="form-control player-dropdown8" id="playerDropdown1">
                                        <option value="">--Pilih--</option>
                                        <?php if (isset($bra[12]['id_user']) && isset($bra[12]['nama'])) : ?>
                                            <option value="<?php echo $bra[12]['id_user'] ?>"><?php echo $bra[12]['nama'] ?></option>
                                        <?php endif; ?>
                                        <?php if (isset($bra[11]['id_user']) && isset($bra[11]['nama'])) : ?>
                                            <option value="<?php echo $bra[11]['id_user'] ?>"><?php echo $bra[11]['nama'] ?></option>
                                        <?php endif; ?>
                                        <!-- Tambahkan pilihan nama lain sesuai kebutuhan -->
                                    </select>
                                </div>
                                <div class="entry-player-flag">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/2000px-Flag_of_Indonesia.svg.png" class="b-error1">
                                    <span class="l">Indonesia</span>
                                </div>
                            </div>
                        </li>
                        <li class="team team-bottom">
                            <div class="entry-player-info-wrap">
                                <div class="entry-player-name">
                                    <select class="form-control player-dropdown9" id="playerDropdown1">
                                        <option value="">--Pilih--</option>
                                        <?php if (isset($bra[13]['id_user']) && isset($bra[13]['nama'])) : ?>
                                            <option value="<?php echo $bra[13]['id_user'] ?>"><?php echo $bra[13]['nama'] ?></option>
                                        <?php endif; ?>
                                        <?php if (isset($bra[10]['id_user']) && isset($bra[10]['nama'])) : ?>
                                            <option value="<?php echo $bra[10]['id_user'] ?>"><?php echo $bra[10]['nama'] ?></option>
                                        <?php endif; ?>
                                        <!-- Tambahkan pilihan nama lain sesuai kebutuhan -->
                                    </select>
                                </div>
                                <div class="entry-player-flag">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/2000px-Flag_of_Indonesia.svg.png" class="b-error1">
                                    <span class="l">Indonesia</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="matchup" style="margin-top: 100px;">
                        <li class="team team-top">
                            <div class="entry-player-info-wrap">
                                <div class="entry-player-name">
                                    <select class="form-control player-dropdown10" id="playerDropdown1">
                                        <option value="">--Pilih--</option>
                                        <?php if (isset($bra[14]['id_user']) && isset($bra[14]['nama'])) : ?>
                                            <option value="<?php echo $bra[14]['id_user'] ?>"><?php echo $bra[14]['nama'] ?></option>
                                        <?php endif; ?>
                                        <?php if (isset($bra[9]['id_user']) && isset($bra[9]['nama'])) : ?>
                                            <option value="<?php echo $bra[9]['id_user'] ?>"><?php echo $bra[9]['nama'] ?></option>
                                        <?php endif; ?>
                                        <!-- Tambahkan pilihan nama lain sesuai kebutuhan -->
                                    </select>
                                </div>
                                <div class="entry-player-flag">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/2000px-Flag_of_Indonesia.svg.png" class="b-error1">
                                    <span class="l">Indonesia</span>
                                </div>
                            </div>
                        </li>
                        <li class="team team-bottom">
                            <div class="entry-player-info-wrap">
                                <div class="entry-player-name">
                                    <select class="form-control player-dropdown11" id="playerDropdown1">
                                        <option value="">--Pilih--</option>
                                        <?php if (isset($bra[15]['id_user']) && isset($bra[15]['nama'])) : ?>
                                            <option value="<?php echo $bra[15]['id_user'] ?>"><?php echo $bra[15]['nama'] ?></option>
                                        <?php endif; ?>
                                        <?php if (isset($bra[8]['id_user']) && isset($bra[8]['nama'])) : ?>
                                            <option value="<?php echo $bra[8]['id_user'] ?>"><?php echo $bra[8]['nama'] ?></option>
                                        <?php endif; ?>
                                        <!-- Tambahkan pilihan nama lain sesuai kebutuhan -->
                                    </select>
                                </div>
                                <div class="entry-player-flag">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/2000px-Flag_of_Indonesia.svg.png" class="b-error1">
                                    <span class="l">Indonesia</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="matchup" style="margin-top: 100px;">
                        <li class="team team-top">
                            <div class="entry-player-info-wrap">
                                <div class="entry-player-name">
                                    <select class="form-control player-dropdown12" id="playerDropdown1">
                                        <option value="">--Pilih--</option>
                                        <?php if (isset($bra[31]['id_user']) && isset($bra[31]['nama'])) : ?>
                                            <option value="<?php echo $bra[31]['id_user'] ?>"><?php echo $bra[31]['nama'] ?></option>
                                        <?php endif; ?>
                                        <?php if (isset($bra[16]['id_user']) && isset($bra[16]['nama'])) : ?>
                                            <option value="<?php echo $bra[16]['id_user'] ?>"><?php echo $bra[16]['nama'] ?></option>
                                        <?php endif; ?>
                                        <!-- Tambahkan pilihan nama lain sesuai kebutuhan -->
                                    </select>
                                </div>
                                <div class="entry-player-flag">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/2000px-Flag_of_Indonesia.svg.png" class="b-error1">
                                    <span class="l">Indonesia</span>
                                </div>
                            </div>
                        </li>
                        <li class="team team-bottom">
                            <div class="entry-player-info-wrap">
                                <div class="entry-player-name">
                                    <select class="form-control player-dropdown13" id="playerDropdown1">
                                        <option value="">--Pilih--</option>
                                        <?php if (isset($bra[30]['id_user']) && isset($bra[30]['nama'])) : ?>
                                            <option value="<?php echo $bra[30]['id_user'] ?>"><?php echo $bra[30]['nama'] ?></option>
                                        <?php endif; ?>
                                        <?php if (isset($bra[29]['id_user']) && isset($bra[29]['nama'])) : ?>
                                            <option value="<?php echo $bra[29]['id_user'] ?>"><?php echo $bra[29]['nama'] ?></option>
                                        <?php endif; ?>
                                        <!-- Tambahkan pilihan nama lain sesuai kebutuhan -->
                                    </select>
                                </div>
                                <div class="entry-player-flag">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/2000px-Flag_of_Indonesia.svg.png" class="b-error1">
                                    <span class="l">Indonesia</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="matchup" style="margin-top: 100px;">
                        <li class="team team-top">
                            <div class="entry-player-info-wrap">
                                <div class="entry-player-name">
                                    <select class="form-control player-dropdown14" id="playerDropdown1">
                                        <option value="">--Pilih--</option>
                                        <?php if (isset($bra[17]['id_user']) && isset($bra[17]['nama'])) : ?>
                                            <option value="<?php echo $bra[17]['id_user'] ?>"><?php echo $bra[17]['nama'] ?></option>
                                        <?php endif; ?>
                                        <?php if (isset($bra[19]['id_user']) && isset($bra[19]['nama'])) : ?>
                                            <option value="<?php echo $bra[19]['id_user'] ?>"><?php echo $bra[19]['nama'] ?></option>
                                        <?php endif; ?>
                                        <!-- Tambahkan pilihan nama lain sesuai kebutuhan -->
                                    </select>
                                </div>
                                <div class="entry-player-flag">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/2000px-Flag_of_Indonesia.svg.png" class="b-error1">
                                    <span class="l">Indonesia</span>
                                </div>
                            </div>
                        </li>
                        <li class="team team-bottom">
                            <div class="entry-player-info-wrap">
                                <div class="entry-player-name">
                                    <select class="form-control player-dropdown15" id="playerDropdown1">
                                        <option value="">--Pilih--</option>
                                        <?php if (isset($bra[18]['id_user']) && isset($bra[18]['nama'])) : ?>
                                            <option value="<?php echo $bra[18]['id_user'] ?>"><?php echo $bra[18]['nama'] ?></option>
                                        <?php endif; ?>
                                        <?php if (isset($bra[28]['id_user']) && isset($bra[28]['nama'])) : ?>
                                            <option value="<?php echo $bra[28]['id_user'] ?>"><?php echo $bra[28]['nama'] ?></option>
                                        <?php endif; ?>
                                        <!-- Tambahkan pilihan nama lain sesuai kebutuhan -->
                                    </select>
                                </div>
                                <div class="entry-player-flag">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/2000px-Flag_of_Indonesia.svg.png" class="b-error1">
                                    <span class="l">Indonesia</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div> <!-- END ROUND TWO -->
                <div class="round round-one current">
                    <div class="round-details">Round 1<br /><span class="date">March 16</span></div>
                    <ul class="matchup" style="margin-top: 1cm;">
                        <li class="team2 team-top">
                            <?php
                            if (isset($bra[12]['nama'])) {
                                echo $bra[12]['nama'];
                            } else {
                                echo "Data not available";
                            }
                            ?>
                        </li>
                        <li class="team2 team-bottom">
                            <?php
                            if (isset($bra[11]['nama'])) {
                                echo $bra[11]['nama'];
                            } else {
                                echo "Data not available";
                            }
                            ?>
                        </li>
                    </ul>
                    <ul class="matchup" style="margin-top: 1cm;">
                        <li class="team2 team-top">
                            <?php
                            if (isset($bra[13]['nama'])) {
                                echo $bra[13]['nama'];
                            } else {
                                echo "Data not available";
                            }
                            ?>
                        </li>
                        <li class="team2 team-bottom">
                            <?php
                            if (isset($bra[10]['nama'])) {
                                echo $bra[10]['nama'];
                            } else {
                                echo "Data not available";
                            }
                            ?>
                        </li>
                    </ul>
                    <ul class="matchup" style="margin-top: 1cm;">
                        <li class="team2 team-top">
                            <?php
                            if (isset($bra[14]['nama'])) {
                                echo $bra[14]['nama'];
                            } else {
                                echo "Data not available";
                            }
                            ?>
                        </li>
                        <li class="team2 team-bottom">
                            <?php
                            if (isset($bra[9]['nama'])) {
                                echo $bra[9]['nama'];
                            } else {
                                echo "Data not available";
                            }
                            ?>
                        </li>
                    </ul>
                    <ul class="matchup" style="margin-top: 1cm;">
                        <li class="team2 team-top">
                            <?php
                            if (isset($bra[15]['nama'])) {
                                echo $bra[15]['nama'];
                            } else {
                                echo "Data not available";
                            }
                            ?>
                        </li>
                        <li class="team2 team-bottom">
                            <?php
                            if (isset($bra[8]['nama'])) {
                                echo $bra[8]['nama'];
                            } else {
                                echo "Data not available";
                            }
                            ?>
                        </li>
                    </ul>
                    <ul class="matchup" style="margin-top: 1cm;">
                        <li class="team2 team-top">
                            <?php
                            if (isset($bra[31]['nama'])) {
                                echo $bra[31]['nama'];
                            } else {
                                echo "Data not available";
                            }
                            ?>
                        </li>
                        <li class="team2 team-bottom">
                            <?php
                            if (isset($bra[16]['nama'])) {
                                echo $bra[16]['nama'];
                            } else {
                                echo "Data not available";
                            }
                            ?>
                        </li>
                    </ul>
                    <ul class="matchup" style="margin-top: 1cm;">
                        <li class="team2 team-top">
                            <?php
                            if (isset($bra[30]['nama'])) {
                                echo $bra[30]['nama'];
                            } else {
                                echo "Data not available";
                            }
                            ?>
                        </li>
                        <li class="team2 team-bottom">
                            <?php
                            if (isset($bra[29]['nama'])) {
                                echo $bra[29]['nama'];
                            } else {
                                echo "Data not available";
                            }
                            ?>
                        </li>
                    </ul>
                    <ul class="matchup" style="margin-top: 1cm;">
                        <li class="team2 team-top">
                            <?php
                            if (isset($bra[17]['nama'])) {
                                echo $bra[17]['nama'];
                            } else {
                                echo "Data not available";
                            }
                            ?>
                        </li>
                        <li class="team2 team-bottom">
                            <?php
                            if (isset($bra[19]['nama'])) {
                                echo $bra[19]['nama'];
                            } else {
                                echo "Data not available";
                            }
                            ?>
                        </li>
                    </ul>
                    <ul class="matchup" style="margin-top: 1cm;">
                        <li class="team2 team-top">
                            <?php
                            if (isset($bra[18]['nama'])) {
                                echo $bra[18]['nama'];
                            } else {
                                echo "Data not available";
                            }
                            ?>
                        </li>
                        <li class="team2 team-bottom">
                            <?php
                            if (isset($bra[28]['nama'])) {
                                echo $bra[28]['nama'];
                            } else {
                                echo "Data not available";
                            }
                            ?>
                    </ul>
                </div> <!-- END ROUND ONE -->
            </div>
        </div>
    </section>
    
</body>
<script>
    const playerDropdowns = document.querySelectorAll('.player-dropdown');
    const playerDropdowns1 = document.querySelectorAll('.player-dropdown1');
    const playerDropdowns2 = document.querySelectorAll('.player-dropdown2');
    const playerDropdowns3 = document.querySelectorAll('.player-dropdown3');
    const playerDropdowns4 = document.querySelectorAll('.player-dropdown4');
    const playerDropdowns5 = document.querySelectorAll('.player-dropdown5');
    const playerDropdowns6 = document.querySelectorAll('.player-dropdown6');
    const playerDropdowns7 = document.querySelectorAll('.player-dropdown7');
    const playerDropdowns8 = document.querySelectorAll('.player-dropdown8');
    const playerDropdowns9 = document.querySelectorAll('.player-dropdown9');
    const playerDropdowns10 = document.querySelectorAll('.player-dropdown10');
    const playerDropdowns11 = document.querySelectorAll('.player-dropdown11');
    const playerDropdowns12 = document.querySelectorAll('.player-dropdown12');
    const playerDropdowns13 = document.querySelectorAll('.player-dropdown13');
    const playerDropdowns14 = document.querySelectorAll('.player-dropdown14');
    const playerDropdowns15 = document.querySelectorAll('.player-dropdown15');
    const playerDropdownsQ1 = document.querySelectorAll('.player-dropdownQ1');
    const playerDropdownsQ2 = document.querySelectorAll('.player-dropdownQ2');
    const playerDropdownsQ3 = document.querySelectorAll('.player-dropdownQ3');
    const playerDropdownsQ4 = document.querySelectorAll('.player-dropdownQ4');
    const playerDropdownsQ5 = document.querySelectorAll('.player-dropdownQ5');
    const playerDropdownsQ6 = document.querySelectorAll('.player-dropdownQ6');
    const playerDropdownsQ7 = document.querySelectorAll('.player-dropdownQ7');
    const playerDropdownsQ8 = document.querySelectorAll('.player-dropdownQ8');
    const playerDropdownsS1 = document.querySelectorAll('.player-dropdownS1');
    const playerDropdownsS2 = document.querySelectorAll('.player-dropdownS2');
    const playerDropdownsS3 = document.querySelectorAll('.player-dropdownS3');
    const playerDropdownsS4 = document.querySelectorAll('.player-dropdownS4');
    const playerDropdownsF1 = document.querySelectorAll('.player-dropdownF1');
    const playerDropdownsF2 = document.querySelectorAll('.player-dropdownF2');

    playerDropdowns.forEach((dropdown) => {
        dropdown.addEventListener('change', function() {
            const selectedPlayer = "<?php echo $selectedevent[0]['id_event'] ?>";
            const matchupNumber = this.value;

            if (matchupNumber) {
                const confirmMsg = `Apakah Anda yakin ingin memilih `;
                if (confirm(confirmMsg)) {
                    fetch('/save-data', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                            },
                            body: JSON.stringify({
                                player: selectedPlayer,
                                matchup: matchupNumber,
                            }),
                        })
                        .then((response) => response.json())
                        .then((data) => {
                            alert(data.message);
                        })
                        .catch((error) => {
                            console.error('Error:', error);
                        });
                } else {
                    this.selectedIndex = 0;
                }
            }
        });
    });

    playerDropdowns1.forEach((dropdown) => {
        dropdown.addEventListener('change', function() {
            const selectedPlayer = "<?php echo $selectedevent[0]['id_event'] ?>";
            const matchupNumber = this.value;

            if (matchupNumber) {
                const confirmMsg = `Apakah Anda yakin ingin memilih`;
                if (confirm(confirmMsg)) {
                    fetch('/save-data1', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                            },
                            body: JSON.stringify({
                                player: selectedPlayer,
                                matchup: matchupNumber,
                            }),
                        })
                        .then((response) => response.json())
                        .then((data) => {
                            alert(data.message);
                        })
                        .catch((error) => {
                            console.error('Error:', error);
                        });
                } else {
                    this.selectedIndex = 0;
                }
            }
        });
    });

    playerDropdowns2.forEach((dropdown) => {
        dropdown.addEventListener('change', function() {
            const selectedPlayer = "<?php echo $selectedevent[0]['id_event'] ?>";
            const matchupNumber = this.value;

            if (matchupNumber) {
                const confirmMsg = `Apakah Anda yakin ingin memilih`;
                if (confirm(confirmMsg)) {
                    fetch('/save-data2', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                            },
                            body: JSON.stringify({
                                player: selectedPlayer,
                                matchup: matchupNumber,
                            }),
                        })
                        .then((response) => response.json())
                        .then((data) => {
                            alert(data.message);
                        })
                        .catch((error) => {
                            console.error('Error:', error);
                        });
                } else {
                    this.selectedIndex = 0;
                }
            }
        });
    });
    playerDropdowns3.forEach((dropdown) => {
        dropdown.addEventListener('change', function() {
            const selectedPlayer = "<?php echo $selectedevent[0]['id_event'] ?>";
            const matchupNumber = this.value;

            if (matchupNumber) {
                const confirmMsg = `Apakah Anda yakin ingin memilih`;
                if (confirm(confirmMsg)) {
                    fetch('/save-data3', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                            },
                            body: JSON.stringify({
                                player: selectedPlayer,
                                matchup: matchupNumber,
                            }),
                        })
                        .then((response) => response.json())
                        .then((data) => {
                            alert(data.message);
                        })
                        .catch((error) => {
                            console.error('Error:', error);
                        });
                } else {
                    this.selectedIndex = 0;
                }
            }
        });
    });
    playerDropdowns4.forEach((dropdown) => {
        dropdown.addEventListener('change', function() {
            const selectedPlayer = "<?php echo $selectedevent[0]['id_event'] ?>";
            const matchupNumber = this.value;

            if (matchupNumber) {
                const confirmMsg = `Apakah Anda yakin ingin memilih`;
                if (confirm(confirmMsg)) {
                    fetch('/save-data4', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                            },
                            body: JSON.stringify({
                                player: selectedPlayer,
                                matchup: matchupNumber,
                            }),
                        })
                        .then((response) => response.json())
                        .then((data) => {
                            alert(data.message);
                        })
                        .catch((error) => {
                            console.error('Error:', error);
                        });
                } else {
                    this.selectedIndex = 0;
                }
            }
        });
    });
    playerDropdowns5.forEach((dropdown) => {
        dropdown.addEventListener('change', function() {
            const selectedPlayer = "<?php echo $selectedevent[0]['id_event'] ?>";
            const matchupNumber = this.value;

            if (matchupNumber) {
                const confirmMsg = `Apakah Anda yakin ingin memilih`;
                if (confirm(confirmMsg)) {
                    fetch('/save-data5', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                            },
                            body: JSON.stringify({
                                player: selectedPlayer,
                                matchup: matchupNumber,
                            }),
                        })
                        .then((response) => response.json())
                        .then((data) => {
                            alert(data.message);
                        })
                        .catch((error) => {
                            console.error('Error:', error);
                        });
                } else {
                    this.selectedIndex = 0;
                }
            }
        });
    });
    playerDropdowns6.forEach((dropdown) => {
        dropdown.addEventListener('change', function() {
            const selectedPlayer = "<?php echo $selectedevent[0]['id_event'] ?>";
            const matchupNumber = this.value;

            if (matchupNumber) {
                const confirmMsg = `Apakah Anda yakin ingin memilih`;
                if (confirm(confirmMsg)) {
                    fetch('/save-data6', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                            },
                            body: JSON.stringify({
                                player: selectedPlayer,
                                matchup: matchupNumber,
                            }),
                        })
                        .then((response) => response.json())
                        .then((data) => {
                            alert(data.message);
                        })
                        .catch((error) => {
                            console.error('Error:', error);
                        });
                } else {
                    this.selectedIndex = 0;
                }
            }
        });
    });
    playerDropdowns7.forEach((dropdown) => {
        dropdown.addEventListener('change', function() {
            const selectedPlayer = "<?php echo $selectedevent[0]['id_event'] ?>";
            const matchupNumber = this.value;

            if (matchupNumber) {
                const confirmMsg = `Apakah Anda yakin ingin memilih`;
                if (confirm(confirmMsg)) {
                    fetch('/save-data7', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                            },
                            body: JSON.stringify({
                                player: selectedPlayer,
                                matchup: matchupNumber,
                            }),
                        })
                        .then((response) => response.json())
                        .then((data) => {
                            alert(data.message);
                        })
                        .catch((error) => {
                            console.error('Error:', error);
                        });
                } else {
                    this.selectedIndex = 0;
                }
            }
        });
    });
    playerDropdowns8.forEach((dropdown) => {
        dropdown.addEventListener('change', function() {
            const selectedPlayer = "<?php echo $selectedevent[0]['id_event'] ?>";
            const matchupNumber = this.value;

            if (matchupNumber) {
                const confirmMsg = `Apakah Anda yakin ingin memilih`;
                if (confirm(confirmMsg)) {
                    fetch('/save-data8', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                            },
                            body: JSON.stringify({
                                player: selectedPlayer,
                                matchup: matchupNumber,
                            }),
                        })
                        .then((response) => response.json())
                        .then((data) => {
                            alert(data.message);
                        })
                        .catch((error) => {
                            console.error('Error:', error);
                        });
                } else {
                    this.selectedIndex = 0;
                }
            }
        });
    });
    playerDropdowns9.forEach((dropdown) => {
        dropdown.addEventListener('change', function() {
            const selectedPlayer = "<?php echo $selectedevent[0]['id_event'] ?>";
            const matchupNumber = this.value;

            if (matchupNumber) {
                const confirmMsg = `Apakah Anda yakin ingin memilih`;
                if (confirm(confirmMsg)) {
                    fetch('/save-data9', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                            },
                            body: JSON.stringify({
                                player: selectedPlayer,
                                matchup: matchupNumber,
                            }),
                        })
                        .then((response) => response.json())
                        .then((data) => {
                            alert(data.message);
                        })
                        .catch((error) => {
                            console.error('Error:', error);
                        });
                } else {
                    this.selectedIndex = 0;
                }
            }
        });
    });
    playerDropdowns10.forEach((dropdown) => {
        dropdown.addEventListener('change', function() {
            const selectedPlayer = "<?php echo $selectedevent[0]['id_event'] ?>";
            const matchupNumber = this.value;

            if (matchupNumber) {
                const confirmMsg = `Apakah Anda yakin ingin memilih`;
                if (confirm(confirmMsg)) {
                    fetch('/save-data10', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                            },
                            body: JSON.stringify({
                                player: selectedPlayer,
                                matchup: matchupNumber,
                            }),
                        })
                        .then((response) => response.json())
                        .then((data) => {
                            alert(data.message);
                        })
                        .catch((error) => {
                            console.error('Error:', error);
                        });
                } else {
                    this.selectedIndex = 0;
                }
            }
        });
    });
    playerDropdowns11.forEach((dropdown) => {
        dropdown.addEventListener('change', function() {
            const selectedPlayer = "<?php echo $selectedevent[0]['id_event'] ?>";
            const matchupNumber = this.value;

            if (matchupNumber) {
                const confirmMsg = `Apakah Anda yakin ingin memilih`;
                if (confirm(confirmMsg)) {
                    fetch('/save-data11', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                            },
                            body: JSON.stringify({
                                player: selectedPlayer,
                                matchup: matchupNumber,
                            }),
                        })
                        .then((response) => response.json())
                        .then((data) => {
                            alert(data.message);
                        })
                        .catch((error) => {
                            console.error('Error:', error);
                        });
                } else {
                    this.selectedIndex = 0;
                }
            }
        });
    });
    playerDropdowns12.forEach((dropdown) => {
        dropdown.addEventListener('change', function() {
            const selectedPlayer = "<?php echo $selectedevent[0]['id_event'] ?>";
            const matchupNumber = this.value;

            if (matchupNumber) {
                const confirmMsg = `Apakah Anda yakin ingin memilih`;
                if (confirm(confirmMsg)) {
                    fetch('/save-data12', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                            },
                            body: JSON.stringify({
                                player: selectedPlayer,
                                matchup: matchupNumber,
                            }),
                        })
                        .then((response) => response.json())
                        .then((data) => {
                            alert(data.message);
                        })
                        .catch((error) => {
                            console.error('Error:', error);
                        });
                } else {
                    this.selectedIndex = 0;
                }
            }
        });
    });
    playerDropdowns13.forEach((dropdown) => {
        dropdown.addEventListener('change', function() {
            const selectedPlayer = "<?php echo $selectedevent[0]['id_event'] ?>";
            const matchupNumber = this.value;

            if (matchupNumber) {
                const confirmMsg = `Apakah Anda yakin ingin memilih`;
                if (confirm(confirmMsg)) {
                    fetch('/save-data13', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                            },
                            body: JSON.stringify({
                                player: selectedPlayer,
                                matchup: matchupNumber,
                            }),
                        })
                        .then((response) => response.json())
                        .then((data) => {
                            alert(data.message);
                        })
                        .catch((error) => {
                            console.error('Error:', error);
                        });
                } else {
                    this.selectedIndex = 0;
                }
            }
        });
    });
    playerDropdowns14.forEach((dropdown) => {
        dropdown.addEventListener('change', function() {
            const selectedPlayer = "<?php echo $selectedevent[0]['id_event'] ?>";
            const matchupNumber = this.value;

            if (matchupNumber) {
                const confirmMsg = `Apakah Anda yakin ingin memilih`;
                if (confirm(confirmMsg)) {
                    fetch('/save-data14', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                            },
                            body: JSON.stringify({
                                player: selectedPlayer,
                                matchup: matchupNumber,
                            }),
                        })
                        .then((response) => response.json())
                        .then((data) => {
                            alert(data.message);
                        })
                        .catch((error) => {
                            console.error('Error:', error);
                        });
                } else {
                    this.selectedIndex = 0;
                }
            }
        });
    });
    playerDropdowns15.forEach((dropdown) => {
        dropdown.addEventListener('change', function() {
            const selectedPlayer = "<?php echo $selectedevent[0]['id_event'] ?>";
            const matchupNumber = this.value;

            if (matchupNumber) {
                const confirmMsg = `Apakah Anda yakin ingin memilih`;
                if (confirm(confirmMsg)) {
                    fetch('/save-data15', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                            },
                            body: JSON.stringify({
                                player: selectedPlayer,
                                matchup: matchupNumber,
                            }),
                        })
                        .then((response) => response.json())
                        .then((data) => {
                            alert(data.message);
                        })
                        .catch((error) => {
                            console.error('Error:', error);
                        });
                } else {
                    this.selectedIndex = 0;
                }
            }
        });
    });
    playerDropdownsQ1.forEach((dropdown) => {
        dropdown.addEventListener('change', function() {
            const selectedPlayer = "<?php echo $selectedevent[0]['id_event'] ?>";
            const matchupNumber = this.value;

            if (matchupNumber) {
                const confirmMsg = `Apakah Anda yakin ingin memilih`;
                if (confirm(confirmMsg)) {
                    fetch('/save-dataQ1', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                            },
                            body: JSON.stringify({
                                player: selectedPlayer,
                                matchup: matchupNumber,
                            }),
                        })
                        .then((response) => response.json())
                        .then((data) => {
                            alert(data.message);
                        })
                        .catch((error) => {
                            console.error('Error:', error);
                        });
                } else {
                    this.selectedIndex = 0;
                }
            }
        });
    });
    playerDropdownsQ2.forEach((dropdown) => {
        dropdown.addEventListener('change', function() {
            const selectedPlayer = "<?php echo $selectedevent[0]['id_event'] ?>";
            const matchupNumber = this.value;

            if (matchupNumber) {
                const confirmMsg = `Apakah Anda yakin ingin memilih`;
                if (confirm(confirmMsg)) {
                    fetch('/save-dataQ2', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                            },
                            body: JSON.stringify({
                                player: selectedPlayer,
                                matchup: matchupNumber,
                            }),
                        })
                        .then((response) => response.json())
                        .then((data) => {
                            alert(data.message);
                        })
                        .catch((error) => {
                            console.error('Error:', error);
                        });
                } else {
                    this.selectedIndex = 0;
                }
            }
        });
    });
    playerDropdownsQ3.forEach((dropdown) => {
        dropdown.addEventListener('change', function() {
            const selectedPlayer = "<?php echo $selectedevent[0]['id_event'] ?>";
            const matchupNumber = this.value;

            if (matchupNumber) {
                const confirmMsg = `Apakah Anda yakin ingin memilih`;
                if (confirm(confirmMsg)) {
                    fetch('/save-dataQ3', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                            },
                            body: JSON.stringify({
                                player: selectedPlayer,
                                matchup: matchupNumber,
                            }),
                        })
                        .then((response) => response.json())
                        .then((data) => {
                            alert(data.message);
                        })
                        .catch((error) => {
                            console.error('Error:', error);
                        });
                } else {
                    this.selectedIndex = 0;
                }
            }
        });
    });
    playerDropdownsQ4.forEach((dropdown) => {
        dropdown.addEventListener('change', function() {
            const selectedPlayer = "<?php echo $selectedevent[0]['id_event'] ?>";
            const matchupNumber = this.value;

            if (matchupNumber) {
                const confirmMsg = `Apakah Anda yakin ingin memilih`;
                if (confirm(confirmMsg)) {
                    fetch('/save-dataQ4', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                            },
                            body: JSON.stringify({
                                player: selectedPlayer,
                                matchup: matchupNumber,
                            }),
                        })
                        .then((response) => response.json())
                        .then((data) => {
                            alert(data.message);
                        })
                        .catch((error) => {
                            console.error('Error:', error);
                        });
                } else {
                    this.selectedIndex = 0;
                }
            }
        });
    });
    playerDropdownsQ5.forEach((dropdown) => {
        dropdown.addEventListener('change', function() {
            const selectedPlayer = "<?php echo $selectedevent[0]['id_event'] ?>";
            const matchupNumber = this.value;

            if (matchupNumber) {
                const confirmMsg = `Apakah Anda yakin ingin memilih`;
                if (confirm(confirmMsg)) {
                    fetch('/save-dataQ5', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                            },
                            body: JSON.stringify({
                                player: selectedPlayer,
                                matchup: matchupNumber,
                            }),
                        })
                        .then((response) => response.json())
                        .then((data) => {
                            alert(data.message);
                        })
                        .catch((error) => {
                            console.error('Error:', error);
                        });
                } else {
                    this.selectedIndex = 0;
                }
            }
        });
    });
    playerDropdownsQ6.forEach((dropdown) => {
        dropdown.addEventListener('change', function() {
            const selectedPlayer = "<?php echo $selectedevent[0]['id_event'] ?>";
            const matchupNumber = this.value;

            if (matchupNumber) {
                const confirmMsg = `Apakah Anda yakin ingin memilih`;
                if (confirm(confirmMsg)) {
                    fetch('/save-dataQ6', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                            },
                            body: JSON.stringify({
                                player: selectedPlayer,
                                matchup: matchupNumber,
                            }),
                        })
                        .then((response) => response.json())
                        .then((data) => {
                            alert(data.message);
                        })
                        .catch((error) => {
                            console.error('Error:', error);
                        });
                } else {
                    this.selectedIndex = 0;
                }
            }
        });
    });
    playerDropdownsQ7.forEach((dropdown) => {
        dropdown.addEventListener('change', function() {
            const selectedPlayer = "<?php echo $selectedevent[0]['id_event'] ?>";
            const matchupNumber = this.value;

            if (matchupNumber) {
                const confirmMsg = `Apakah Anda yakin ingin memilih`;
                if (confirm(confirmMsg)) {
                    fetch('/save-dataQ7', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                            },
                            body: JSON.stringify({
                                player: selectedPlayer,
                                matchup: matchupNumber,
                            }),
                        })
                        .then((response) => response.json())
                        .then((data) => {
                            alert(data.message);
                        })
                        .catch((error) => {
                            console.error('Error:', error);
                        });
                } else {
                    this.selectedIndex = 0;
                }
            }
        });
    });
    playerDropdownsQ8.forEach((dropdown) => {
        dropdown.addEventListener('change', function() {
            const selectedPlayer = "<?php echo $selectedevent[0]['id_event'] ?>";
            const matchupNumber = this.value;

            if (matchupNumber) {
                const confirmMsg = `Apakah Anda yakin ingin memilih`;
                if (confirm(confirmMsg)) {
                    fetch('/save-dataQ8', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                            },
                            body: JSON.stringify({
                                player: selectedPlayer,
                                matchup: matchupNumber,
                            }),
                        })
                        .then((response) => response.json())
                        .then((data) => {
                            alert(data.message);
                        })
                        .catch((error) => {
                            console.error('Error:', error);
                        });
                } else {
                    this.selectedIndex = 0;
                }
            }
        });
    });
    playerDropdownsS1.forEach((dropdown) => {
        dropdown.addEventListener('change', function() {
            const selectedPlayer = "<?php echo $selectedevent[0]['id_event'] ?>";
            const matchupNumber = this.value;

            if (matchupNumber) {
                const confirmMsg = `Apakah Anda yakin ingin memilih`;
                if (confirm(confirmMsg)) {
                    fetch('/save-dataS1', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                            },
                            body: JSON.stringify({
                                player: selectedPlayer,
                                matchup: matchupNumber,
                            }),
                        })
                        .then((response) => response.json())
                        .then((data) => {
                            alert(data.message);
                        })
                        .catch((error) => {
                            console.error('Error:', error);
                        });
                } else {
                    this.selectedIndex = 0;
                }
            }
        });
    });
    playerDropdownsS2.forEach((dropdown) => {
        dropdown.addEventListener('change', function() {
            const selectedPlayer = "<?php echo $selectedevent[0]['id_event'] ?>";
            const matchupNumber = this.value;

            if (matchupNumber) {
                const confirmMsg = `Apakah Anda yakin ingin memilih`;
                if (confirm(confirmMsg)) {
                    fetch('/save-dataS2', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                            },
                            body: JSON.stringify({
                                player: selectedPlayer,
                                matchup: matchupNumber,
                            }),
                        })
                        .then((response) => response.json())
                        .then((data) => {
                            alert(data.message);
                        })
                        .catch((error) => {
                            console.error('Error:', error);
                        });
                } else {
                    this.selectedIndex = 0;
                }
            }
        });
    });
    playerDropdownsS3.forEach((dropdown) => {
        dropdown.addEventListener('change', function() {
            const selectedPlayer = "<?php echo $selectedevent[0]['id_event'] ?>";
            const matchupNumber = this.value;

            if (matchupNumber) {
                const confirmMsg = `Apakah Anda yakin ingin memilih`;
                if (confirm(confirmMsg)) {
                    fetch('/save-dataS3', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                            },
                            body: JSON.stringify({
                                player: selectedPlayer,
                                matchup: matchupNumber,
                            }),
                        })
                        .then((response) => response.json())
                        .then((data) => {
                            alert(data.message);
                        })
                        .catch((error) => {
                            console.error('Error:', error);
                        });
                } else {
                    this.selectedIndex = 0;
                }
            }
        });
    });
    playerDropdownsS4.forEach((dropdown) => {
        dropdown.addEventListener('change', function() {
            const selectedPlayer = "<?php echo $selectedevent[0]['id_event'] ?>";
            const matchupNumber = this.value;

            if (matchupNumber) {
                const confirmMsg = `Apakah Anda yakin ingin memilih`;
                if (confirm(confirmMsg)) {
                    fetch('/save-dataS4', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                            },
                            body: JSON.stringify({
                                player: selectedPlayer,
                                matchup: matchupNumber,
                            }),
                        })
                        .then((response) => response.json())
                        .then((data) => {
                            alert(data.message);
                        })
                        .catch((error) => {
                            console.error('Error:', error);
                        });
                } else {
                    this.selectedIndex = 0;
                }
            }
        });
    });
    playerDropdownsF1.forEach((dropdown) => {
        dropdown.addEventListener('change', function() {
            const selectedPlayer = "<?php echo $selectedevent[0]['id_event'] ?>";
            const matchupNumber = this.value;

            if (matchupNumber) {
                const confirmMsg = `Apakah Anda yakin ingin memilih`;
                if (confirm(confirmMsg)) {
                    fetch('/save-data81', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                            },
                            body: JSON.stringify({
                                player: selectedPlayer,
                                matchup: matchupNumber,
                            }),
                        })
                        .then((response) => response.json())
                        .then((data) => {
                            alert(data.message);
                        })
                        .catch((error) => {
                            console.error('Error:', error);
                        });
                } else {
                    this.selectedIndex = 0;
                }
            }
        });
    });
    playerDropdownsF2.forEach((dropdown) => {
        dropdown.addEventListener('change', function() {
            const selectedPlayer = "<?php echo $selectedevent[0]['id_event'] ?>";
            const matchupNumber = this.value;

            if (matchupNumber) {
                const confirmMsg = `Apakah Anda yakin ingin memilih`;
                if (confirm(confirmMsg)) {
                    fetch('/save-data82', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                            },
                            body: JSON.stringify({
                                player: selectedPlayer,
                                matchup: matchupNumber,
                            }),
                        })
                        .then((response) => response.json())
                        .then((data) => {
                            alert(data.message);
                        })
                        .catch((error) => {
                            console.error('Error:', error);
                        });
                } else {
                    this.selectedIndex = 0;
                }
            }
        });
    });
</script>