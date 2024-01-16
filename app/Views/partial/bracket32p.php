<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script|Herr+Von+Muellerhoff' rel='stylesheet'
        type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Istok+Web|Roboto+Condensed:700' rel='stylesheet'
        type='text/css'>

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
                            <div>
                                <div>
                                    <div class="entry-player-wrap">
                                        <div class="entry-player-image">
                                            <img src="https://cdn.icon-icons.com/icons2/3019/PNG/512/chess_horse_icon_188626.png"
                                                class="b-error">
                                        </div>
                                        <div class="entry-player-info-wrap">
                                            <div class="entry-player-name">
                                                <?php if (isset($HH1['nama'])): ?>
                                                    <?php echo $HH1['nama']; ?>
                                                <?php endif; ?>
                                            </div>
                                            <div class="entry-player-flag">
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/2000px-Flag_of_Indonesia.svg.png"
                                                    class="b-error1">
                                                <span class="l">Indonesia</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="team team-bottom">
                            <div>
                                <div>
                                    <div class="entry-player-wrap">
                                        <div class="entry-player-image">
                                            <img src="https://cdn.icon-icons.com/icons2/3019/PNG/512/chess_horse_icon_188626.png"
                                                class="b-error">
                                        </div>
                                        <div class="entry-player-info-wrap">
                                            <div class="entry-player-name">
                                                <?php if (isset($HH2['nama'])): ?>
                                                    <?php echo $HH2['nama']; ?>
                                                <?php endif; ?>
                                            </div>
                                            <div class="entry-player-flag">
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/2000px-Flag_of_Indonesia.svg.png"
                                                    class="b-error1">
                                                <span class="l">Indonesia</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="matchup" style="margin-top: 100px;">
                        <li class="team team-top">
                            <div>
                                <div>
                                    <div class="entry-player-wrap">
                                        <div class="entry-player-image">
                                            <img src="https://cdn.icon-icons.com/icons2/3019/PNG/512/chess_horse_icon_188626.png"
                                                class="b-error">
                                        </div>
                                        <div class="entry-player-info-wrap">
                                            <div class="entry-player-name">
                                                <?php if (isset($HH3['nama'])): ?>
                                                    <?php echo $HH3['nama']; ?>
                                                <?php endif; ?>
                                            </div>
                                            <div class="entry-player-flag">
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/2000px-Flag_of_Indonesia.svg.png"
                                                    class="b-error1">
                                                <span class="l">Indonesia</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="team team-bottom">
                            <div>
                                <div>
                                    <div class="entry-player-wrap">
                                        <div class="entry-player-image">
                                            <img src="https://cdn.icon-icons.com/icons2/3019/PNG/512/chess_horse_icon_188626.png"
                                                class="b-error">
                                        </div>
                                        <div class="entry-player-info-wrap">
                                            <div class="entry-player-name">
                                                <?php if (isset($HH4['nama'])): ?>
                                                    <?php echo $HH4['nama']; ?>
                                                <?php endif; ?>
                                            </div>
                                            <div class="entry-player-flag">
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/2000px-Flag_of_Indonesia.svg.png"
                                                    class="b-error1">
                                                <span class="l">Indonesia</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="matchup" style="margin-top: 100px;">
                        <li class="team team-top">
                            <div>
                                <div>
                                    <div class="entry-player-wrap">
                                        <div class="entry-player-image">
                                            <img src="https://cdn.icon-icons.com/icons2/3019/PNG/512/chess_horse_icon_188626.png"
                                                class="b-error">
                                        </div>
                                        <div class="entry-player-info-wrap">
                                            <div class="entry-player-name">
                                                <?php if (isset($HH11['nama'])): ?>
                                                    <?php echo $HH11['nama']; ?>
                                                <?php endif; ?>
                                            </div>
                                            <div class="entry-player-flag">
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/2000px-Flag_of_Indonesia.svg.png"
                                                    class="b-error1">
                                                <span class="l">Indonesia</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="team team-bottom">
                            <div>
                                <div>
                                    <div class="entry-player-wrap">
                                        <div class="entry-player-image">
                                            <img src="https://cdn.icon-icons.com/icons2/3019/PNG/512/chess_horse_icon_188626.png"
                                                class="b-error">
                                        </div>
                                        <div class="entry-player-info-wrap">
                                            <div class="entry-player-name">
                                                <?php if (isset($HH12['nama'])): ?>
                                                    <?php echo $HH12['nama']; ?>
                                                <?php endif; ?>
                                            </div>
                                            <div class="entry-player-flag">
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/2000px-Flag_of_Indonesia.svg.png"
                                                    class="b-error1">
                                                <span class="l">Indonesia</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="matchup" style="margin-top: 100px;">
                        <li class="team team-top">
                            <div>
                                <div>
                                    <div class="entry-player-wrap">
                                        <div class="entry-player-image">
                                            <img src="https://cdn.icon-icons.com/icons2/3019/PNG/512/chess_horse_icon_188626.png"
                                                class="b-error">
                                        </div>
                                        <div class="entry-player-info-wrap">
                                            <div class="entry-player-name">
                                                <?php if (isset($HH13['nama'])): ?>
                                                    <?php echo $HH13['nama']; ?>
                                                <?php endif; ?>
                                            </div>
                                            <div class="entry-player-flag">
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/2000px-Flag_of_Indonesia.svg.png"
                                                    class="b-error1">
                                                <span class="l">Indonesia</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="team team-bottom">
                            <div>
                                <div>
                                    <div class="entry-player-wrap">
                                        <div class="entry-player-image">
                                            <img src="https://cdn.icon-icons.com/icons2/3019/PNG/512/chess_horse_icon_188626.png"
                                                class="b-error">
                                        </div>
                                        <div class="entry-player-info-wrap">
                                            <div class="entry-player-name">
                                                <?php if (isset($HH14['nama'])): ?>
                                                    <?php echo $HH14['nama']; ?>
                                                <?php endif; ?>
                                            </div>
                                            <div class="entry-player-flag">
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/2000px-Flag_of_Indonesia.svg.png"
                                                    class="b-error1">
                                                <span class="l">Indonesia</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div> <!-- END ROUND TWO -->

                <div class="round round-three">
                    <div class="round-details">Round 3<br /><span class="date">March 22</span></div>
                    <ul class="matchup" style="margin-top: 1cm;">
                        <li class="team team-top">
                            <div>
                                <div>
                                    <div class="entry-player-wrap">
                                        <div class="entry-player-image">
                                            <img src="https://cdn.icon-icons.com/icons2/3019/PNG/512/chess_horse_icon_188626.png"
                                                class="b-error">
                                        </div>
                                        <div class="entry-player-info-wrap">
                                            <div class="entry-player-name">
                                                <?php if (isset($HH5['nama'])): ?>
                                                    <?php echo $HH5['nama']; ?>
                                                <?php endif; ?>
                                            </div>
                                            <div class="entry-player-flag">
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/2000px-Flag_of_Indonesia.svg.png"
                                                    class="b-error1">
                                                <span class="l">Indonesia</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="team team-bottom">
                            <div>
                                <div>
                                    <div class="entry-player-wrap">
                                        <div class="entry-player-image">
                                            <img src="https://cdn.icon-icons.com/icons2/3019/PNG/512/chess_horse_icon_188626.png"
                                                class="b-error">
                                        </div>
                                        <div class="entry-player-info-wrap">
                                            <div class="entry-player-name">
                                                <?php if (isset($HH6['nama'])): ?>
                                                    <?php echo $HH6['nama']; ?>
                                                <?php endif; ?>
                                            </div>
                                            <div class="entry-player-flag">
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/2000px-Flag_of_Indonesia.svg.png"
                                                    class="b-error1">
                                                <span class="l">Indonesia</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="matchup" style="margin-top: 3cm;">
                        <li class="team team-top">
                            <div>
                                <div>
                                    <div class="entry-player-wrap">
                                        <div class="entry-player-image">
                                            <img src="https://cdn.icon-icons.com/icons2/3019/PNG/512/chess_horse_icon_188626.png"
                                                class="b-error">
                                        </div>
                                        <div class="entry-player-info-wrap">
                                            <div class="entry-player-name">
                                                <?php if (isset($HH81['nama'])): ?>
                                                    <?php echo $HH81['nama']; ?>
                                                <?php endif; ?>
                                            </div>
                                            <div class="entry-player-flag">
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/2000px-Flag_of_Indonesia.svg.png"
                                                    class="b-error1">
                                                <span class="l">Indonesia</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="team team-bottom">
                            <div>
                                <div>
                                    <div class="entry-player-wrap">
                                        <div class="entry-player-image">
                                            <img src="https://cdn.icon-icons.com/icons2/3019/PNG/512/chess_horse_icon_188626.png"
                                                class="b-error">
                                        </div>
                                        <div class="entry-player-info-wrap">
                                            <div class="entry-player-name">
                                                <?php if (isset($HH82['nama'])): ?>
                                                    <?php echo $HH82['nama']; ?>
                                                <?php endif; ?>
                                            </div>
                                            <div class="entry-player-flag">
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/2000px-Flag_of_Indonesia.svg.png"
                                                    class="b-error1">
                                                <span class="l">Indonesia</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div> <!-- END ROUND THREE -->
            </div>

            <div class="champion">
                <div class="semis-l">
                    <div class="round-details">west semifinals <br /><span class="date">March 26-28</span></div>
                    <ul class="matchup">
                        <li class="team team-top">
                            <div>
                                <div>
                                    <div class="entry-player-wrap">
                                        <div class="entry-player-image">
                                            <img src="https://cdn.icon-icons.com/icons2/3019/PNG/512/chess_horse_icon_188626.png"
                                                class="b-error">
                                        </div>
                                        <div class="entry-player-info-wrap">
                                            <div class="entry-player-name">
                                                <?php if (isset($HH21['nama'])): ?>
                                                    <?php echo $HH21['nama']; ?>
                                                <?php endif; ?>
                                            </div>
                                            <div class="entry-player-flag">
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/2000px-Flag_of_Indonesia.svg.png"
                                                    class="b-error1">
                                                <span class="l">Indonesia</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="team team-bottom">
                            <div>
                                <div>
                                    <div class="entry-player-wrap">
                                        <div class="entry-player-image">
                                            <img src="https://cdn.icon-icons.com/icons2/3019/PNG/512/chess_horse_icon_188626.png"
                                                class="b-error">
                                        </div>
                                        <div class="entry-player-info-wrap">
                                            <div class="entry-player-name">
                                                <?php if (isset($HH22['nama'])): ?>
                                                    <?php echo $HH22['nama']; ?>
                                                <?php endif; ?>
                                            </div>
                                            <div class="entry-player-flag">
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/2000px-Flag_of_Indonesia.svg.png"
                                                    class="b-error1">
                                                <span class="l">Indonesia</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="final" style="margin-top: 4cm;">
                    <i class="fa fa-trophy"></i>
                    <div class="round-details">championship <br /><span class="date">March 30 - Apr. 1</span></div>
                    <ul class="matchup">
                        <li class="team team-top">
                            <div>
                                <div>
                                    <div class="entry-player-wrap">
                                        <div class="entry-player-image">
                                            <img src="https://cdn.icon-icons.com/icons2/3019/PNG/512/chess_horse_icon_188626.png"
                                                class="b-error">
                                        </div>
                                        <div class="entry-player-info-wrap">
                                            <div class="entry-player-name">
                                                <?php if (isset($F1['nama'])): ?>
                                                    <?php echo $F1['nama']; ?>
                                                <?php endif; ?>
                                            </div>
                                            <div class="entry-player-flag">
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/2000px-Flag_of_Indonesia.svg.png"
                                                    class="b-error1">
                                                <span class="l">Indonesia</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="team team-bottom">
                            <div>
                                <div>
                                    <div class="entry-player-wrap">
                                        <div class="entry-player-image">
                                            <img src="https://cdn.icon-icons.com/icons2/3019/PNG/512/chess_horse_icon_188626.png"
                                                class="b-error">
                                        </div>
                                        <div class="entry-player-info-wrap">
                                            <div class="entry-player-name">
                                                <?php if (isset($F2['nama'])): ?>
                                                    <?php echo $F2['nama']; ?>
                                                <?php endif; ?>
                                            </div>
                                            <div class="entry-player-flag">
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/2000px-Flag_of_Indonesia.svg.png"
                                                    class="b-error1">
                                                <span class="l">Indonesia</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="semis-r" style="margin-top: 200px;">
                    <div class="round-details">east semifinals <br /><span class="date">March 26-28</span></div>
                    <ul class="matchup">
                        <li class="team team-top">
                            <div>
                                <div>
                                    <div class="entry-player-wrap">
                                        <div class="entry-player-image">
                                            <img src="https://cdn.icon-icons.com/icons2/3019/PNG/512/chess_horse_icon_188626.png"
                                                class="b-error">
                                        </div>
                                        <div class="entry-player-info-wrap">
                                            <div class="entry-player-name">
                                                <?php if (isset($HH24['nama'])): ?>
                                                    <?php echo $HH24['nama']; ?>
                                                <?php endif; ?>
                                            </div>
                                            <div class="entry-player-flag">
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/2000px-Flag_of_Indonesia.svg.png"
                                                    class="b-error1">
                                                <span class="l">Indonesia</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="team team-bottom">
                            <div>
                                <div>
                                    <div class="entry-player-wrap">
                                        <div class="entry-player-image">
                                            <img src="https://cdn.icon-icons.com/icons2/3019/PNG/512/chess_horse_icon_188626.png"
                                                class="b-error">
                                        </div>
                                        <div class="entry-player-info-wrap">
                                            <div class="entry-player-name">
                                                <?php if (isset($HH23['nama'])): ?>
                                                    <?php echo $HH23['nama']; ?>
                                                <?php endif; ?>
                                            </div>
                                            <div class="entry-player-flag">
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/2000px-Flag_of_Indonesia.svg.png"
                                                    class="b-error1">
                                                <span class="l">Indonesia</span>
                                            </div>
                                        </div>
                                    </div>
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
                            <div>
                                <div>
                                    <div class="entry-player-wrap">
                                        <div class="entry-player-image">
                                            <img src="https://cdn.icon-icons.com/icons2/3019/PNG/512/chess_horse_icon_188626.png"
                                                class="b-error">
                                        </div>
                                        <div class="entry-player-info-wrap">
                                            <div class="entry-player-name">
                                                <?php if (isset($HH90['nama'])): ?>
                                                    <?php echo $HH90['nama']; ?>
                                                <?php endif; ?>
                                            </div>
                                            <div class="entry-player-flag">
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/2000px-Flag_of_Indonesia.svg.png"
                                                    class="b-error1">
                                                <span class="l">Indonesia</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="team team-bottom">
                            <div>
                                <div>
                                    <div class="entry-player-wrap">
                                        <div class="entry-player-image">
                                            <img src="https://cdn.icon-icons.com/icons2/3019/PNG/512/chess_horse_icon_188626.png"
                                                class="b-error">
                                        </div>
                                        <div class="entry-player-info-wrap">
                                            <div class="entry-player-name">
                                                <?php if (isset($HH91['nama'])): ?>
                                                    <?php echo $HH91['nama']; ?>
                                                <?php endif; ?>
                                            </div>
                                            <div class="entry-player-flag">
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/2000px-Flag_of_Indonesia.svg.png"
                                                    class="b-error1">
                                                <span class="l">Indonesia</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="matchup" style="margin-top: 3cm;">
                        <li class="team team-top">
                            <div>
                                <div>
                                    <div class="entry-player-wrap">
                                        <div class="entry-player-image">
                                            <img src="https://cdn.icon-icons.com/icons2/3019/PNG/512/chess_horse_icon_188626.png"
                                                class="b-error">
                                        </div>
                                        <div class="entry-player-info-wrap">
                                            <div class="entry-player-name">
                                                <?php if (isset($HH19['nama'])): ?>
                                                    <?php echo $HH19['nama']; ?>
                                                <?php endif; ?>
                                            </div>
                                            <div class="entry-player-flag">
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/2000px-Flag_of_Indonesia.svg.png"
                                                    class="b-error1">
                                                <span class="l">Indonesia</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="team team-bottom">
                            <div>
                                <div>
                                    <div class="entry-player-wrap">
                                        <div class="entry-player-image">
                                            <img src="https://cdn.icon-icons.com/icons2/3019/PNG/512/chess_horse_icon_188626.png"
                                                class="b-error">
                                        </div>
                                        <div class="entry-player-info-wrap">
                                            <div class="entry-player-name">
                                                <?php if (isset($HH20['nama'])): ?>
                                                    <?php echo $HH20['nama']; ?>
                                                <?php endif; ?>
                                            </div>
                                            <div class="entry-player-flag">
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/2000px-Flag_of_Indonesia.svg.png"
                                                    class="b-error1">
                                                <span class="l">Indonesia</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div> <!-- END ROUND THREE -->

                <div class="round round-two">
                    <div class="round-details">Round 2<br /><span class="date">March 18</span></div>
                    <ul class="matchup">
                        <li class="team team-top">
                            <div>
                                <div>
                                    <div class="entry-player-wrap">
                                        <div class="entry-player-image">
                                            <img src="https://cdn.icon-icons.com/icons2/3019/PNG/512/chess_horse_icon_188626.png"
                                                class="b-error">
                                        </div>
                                        <div class="entry-player-info-wrap">
                                            <div class="entry-player-name">
                                                <?php if (isset($HH7['nama'])): ?>
                                                    <?php echo $HH7['nama']; ?>
                                                <?php endif; ?>
                                            </div>
                                            <div class="entry-player-flag">
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/2000px-Flag_of_Indonesia.svg.png"
                                                    class="b-error1">
                                                <span class="l">Indonesia</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="team team-bottom">
                            <div>
                                <div>
                                    <div class="entry-player-wrap">
                                        <div class="entry-player-image">
                                            <img src="https://cdn.icon-icons.com/icons2/3019/PNG/512/chess_horse_icon_188626.png"
                                                class="b-error">
                                        </div>
                                        <div class="entry-player-info-wrap">
                                            <div class="entry-player-name">
                                                <?php if (isset($HH8['nama'])): ?>
                                                    <?php echo $HH8['nama']; ?>
                                                <?php endif; ?>
                                            </div>
                                            <div class="entry-player-flag">
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/2000px-Flag_of_Indonesia.svg.png"
                                                    class="b-error1">
                                                <span class="l">Indonesia</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="matchup" style="margin-top: 100px;">
                        <li class="team team-top">
                            <div>
                                <div>
                                    <div class="entry-player-wrap">
                                        <div class="entry-player-image">
                                            <img src="https://cdn.icon-icons.com/icons2/3019/PNG/512/chess_horse_icon_188626.png"
                                                class="b-error">
                                        </div>
                                        <div class="entry-player-info-wrap">
                                            <div class="entry-player-name">
                                                <?php if (isset($HH9['nama'])): ?>
                                                    <?php echo $HH9['nama']; ?>
                                                <?php endif; ?>
                                            </div>
                                            <div class="entry-player-flag">
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/2000px-Flag_of_Indonesia.svg.png"
                                                    class="b-error1">
                                                <span class="l">Indonesia</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="team team-bottom">
                            <div>
                                <div>
                                    <div class="entry-player-wrap">
                                        <div class="entry-player-image">
                                            <img src="https://cdn.icon-icons.com/icons2/3019/PNG/512/chess_horse_icon_188626.png"
                                                class="b-error">
                                        </div>
                                        <div class="entry-player-info-wrap">
                                            <div class="entry-player-name">
                                                <?php if (isset($HH10['nama'])): ?>
                                                    <?php echo $HH10['nama']; ?>
                                                <?php endif; ?>
                                            </div>
                                            <div class="entry-player-flag">
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/2000px-Flag_of_Indonesia.svg.png"
                                                    class="b-error1">
                                                <span class="l">Indonesia</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="matchup" style="margin-top: 100px;">
                        <li class="team team-top">
                            <div>
                                <div>
                                    <div class="entry-player-wrap">
                                        <div class="entry-player-image">
                                            <img src="https://cdn.icon-icons.com/icons2/3019/PNG/512/chess_horse_icon_188626.png"
                                                class="b-error">
                                        </div>
                                        <div class="entry-player-info-wrap">
                                            <div class="entry-player-name">
                                                <?php if (isset($HH15['nama'])): ?>
                                                    <?php echo $HH15['nama']; ?>
                                                <?php endif; ?>
                                            </div>
                                            <div class="entry-player-flag">
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/2000px-Flag_of_Indonesia.svg.png"
                                                    class="b-error1">
                                                <span class="l">Indonesia</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="team team-bottom">
                            <div>
                                <div>
                                    <div class="entry-player-wrap">
                                        <div class="entry-player-image">
                                            <img src="https://cdn.icon-icons.com/icons2/3019/PNG/512/chess_horse_icon_188626.png"
                                                class="b-error">
                                        </div>
                                        <div class="entry-player-info-wrap">
                                            <div class="entry-player-name">
                                                <?php if (isset($HH16['nama'])): ?>
                                                    <?php echo $HH16['nama']; ?>
                                                <?php endif; ?>
                                            </div>
                                            <div class="entry-player-flag">
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/2000px-Flag_of_Indonesia.svg.png"
                                                    class="b-error1">
                                                <span class="l">Indonesia</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="matchup" style="margin-top: 100px;">
                        <li class="team team-top">
                            <div>
                                <div>
                                    <div class="entry-player-wrap">
                                        <div class="entry-player-image">
                                            <img src="https://cdn.icon-icons.com/icons2/3019/PNG/512/chess_horse_icon_188626.png"
                                                class="b-error">
                                        </div>
                                        <div class="entry-player-info-wrap">
                                            <div class="entry-player-name">
                                                <?php if (isset($HH17['nama'])): ?>
                                                    <?php echo $HH17['nama']; ?>
                                                <?php endif; ?>
                                            </div>
                                            <div class="entry-player-flag">
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/2000px-Flag_of_Indonesia.svg.png"
                                                    class="b-error1">
                                                <span class="l">Indonesia</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="team team-bottom">
                            <div>
                                <div>
                                    <div class="entry-player-wrap">
                                        <div class="entry-player-image">
                                            <img src="https://cdn.icon-icons.com/icons2/3019/PNG/512/chess_horse_icon_188626.png"
                                                class="b-error">
                                        </div>
                                        <div class="entry-player-info-wrap">
                                            <div class="entry-player-name">
                                                <?php if (isset($HH18['nama'])): ?>
                                                    <?php echo $HH18['nama']; ?>
                                                <?php endif; ?>
                                            </div>
                                            <div class="entry-player-flag">
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/2000px-Flag_of_Indonesia.svg.png"
                                                    class="b-error1">
                                                <span class="l">Indonesia</span>
                                            </div>
                                        </div>
                                    </div>
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