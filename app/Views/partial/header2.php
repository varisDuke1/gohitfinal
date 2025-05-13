<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <title>
        <?= esc($title) ?>
    </title>
    <style>
        .section {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 2em;
        }

        .down {
            background-color: #ff2e6e;
            color: #fff;
            padding: 10px 20px;
            cursor: pointer;
        }

        .below {
            padding-top: 100vh;
        }

        .landing-container {
            position: relative;
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 40px;
            box-sizing: border-box;
            height: 100vh;
        }

        .form-container {
            flex: 1;
            max-width: 400px;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            z-index: 2;
        }

        .landing-container h1,
        .landing-container button {
            position: relative;
            z-index: 3;
        }

        #background-image {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            z-index: 1;
        }

        #down {
            margin-top: 100%;
            padding-bottom: 25%;
        }

        .plan-title h1 {
            display: flex;
            padding-top: 50px;
            justify-content: center;
            margin: 0 auto;
            color: black;
        }

        .plans-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: stretch;
            max-width: 1000px;
            background-color: #fff;
            padding: 20px;
            margin: 0 auto;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .plan {
            flex: 1;
            border: 2px solid #3498db;
            border-radius: 10px;
            padding: 20px;
            margin: 10px;
            text-align: center;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100%;
        }

        .plan h2 {
            color: #3498db;
        }

        .plan p {
            color: #555;
        }

        .buy-button {
            background-color: #3498db;
            color: #fff;
            border: none;
            padding: 12px 24px;
            border-radius: 3px;
            cursor: pointer;
        }

        .dropdown-menu {
            display: none;
            position: absolute;
            right: 0;
            margin-top: 10px;
            background: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 150px;
            text-align: left;
            z-index: 10;
        }

        .dropdown-menu a {
            display: block;
            padding: 10px;
            color: #333;
            text-decoration: none;
        }

        .dropdown-menu a:hover {
            background-color: #f1f1f1;
        }
        
    </style>
</head>

<body>
    <header class="p-5 d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 bg-white">
        <a href="/"><img src="<?= base_url('assets/image/logo.png') ?>" alt="" class="d-flex align-items-center"></a>
        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="/" class="nav-link px-2 link-dark fw-bold" style="font-size: 24px !important;">Home</a>
            </li>
            <li><a href="/event" class="mx-5 nav-link px-2 link-dark fw-bold" style="font-size: 24px !important;">My
                    Competition</a></li>
            <li><a href="/late" class="nav-link px-2 link-dark fw-bold" style="font-size: 24px !important;">News</a>
            </li>
        </ul>
        <div class="relative">
            <?php if (isset($nama)) { ?>
                <div id="profileMenu" class="cursor-pointer px-4 py-2 bg-gray-100 rounded-lg flex items-center space-x-2 hover:bg-gray-200">
                    <p class="text-red-500 font-bold">Hallo, <?php echo $nama; ?></p>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition-transform duration-200" id="dropdownIcon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M19.5 9l-7.5 7.5L4.5 9" />
                    </svg>
                </div>
                <div id="dropdownMenu" class="absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-lg shadow-lg opacity-0 scale-95 transform origin-top-right transition-all duration-200 invisible">
                    <a href="/change-password" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100">
                        <i class="fas fa-key mr-2"></i> Ganti Password
                    </a>
                    <a href="/settings" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100">
                        <i class="fas fa-cog mr-2"></i> Settings
                    </a>
                    <hr>
                    <a href="/logout" class="flex items-center px-4 py-2 text-red-500 hover:bg-gray-100">
                        <i class="fas fa-sign-out-alt mr-2"></i> Logout
                    </a>
                </div>
            <?php } else { ?>
                <a href="/login">
                    <button type="button" class="px-4 py-2 bg-red-500 text-white font-bold rounded-lg hover:bg-red-600">
                        SIGN IN
                    </button>
                </a>
            <?php } ?>
        </div>
    </header>

        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const profileMenu = document.getElementById("profileMenu");
                const dropdownMenu = document.getElementById("dropdownMenu");
                const dropdownIcon = document.getElementById("dropdownIcon");

                profileMenu.addEventListener("click", function () {
                    const isOpen = dropdownMenu.classList.contains("opacity-100");
                    dropdownMenu.classList.toggle("opacity-100", !isOpen);
                    dropdownMenu.classList.toggle("scale-100", !isOpen);
                    dropdownMenu.classList.toggle("opacity-0", isOpen);
                    dropdownMenu.classList.toggle("scale-95", isOpen);
                    dropdownMenu.classList.toggle("invisible", isOpen);
                    dropdownIcon.classList.toggle("rotate-180", !isOpen);
                });

                document.addEventListener("click", function (event) {
                    if (!profileMenu.contains(event.target) && !dropdownMenu.contains(event.target)) {
                        dropdownMenu.classList.add("opacity-0", "scale-95", "invisible");
                        dropdownMenu.classList.remove("opacity-100", "scale-100");
                        dropdownIcon.classList.remove("rotate-180");
                    }
                });
            });
        </script>
</body>
</html>
