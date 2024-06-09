<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        header {
            background-color: #254336 !important;
        }

        footer {
            background-color: #ffffff;
            padding: 10px 0;
            text-align: center;
            position: relative;
            bottom: 0;
            width: 100%;
        }

        .paraguay-map {
            position: relative;
            width: 60%;
            margin: 0 auto;
        }

        .dot-1 {
            position: absolute;
            top: 17%;
            /*sobre eje y*/
            left: 43%;
            /*sobre eje x*/
            width: 10px;
            height: 10px;
            background-color: #A1DD70;
            border-radius: 50%;
            box-shadow: 0 0 10px 5px rgba(161, 221, 112, 0.7);
        }

        .dot-2 {
            position: absolute;
            top: 33%;
            /*sobre eje y*/
            left: 22%;
            /*sobre eje x*/
            width: 10px;
            height: 10px;
            background-color: #A1DD70;
            border-radius: 50%;
            box-shadow: 0 0 10px 5px rgba(161, 221, 112, 0.7);
        }

        .dot-3 {
            position: absolute;
            top: 52%;
            /*sobre eje y*/
            left: 48%;
            /*sobre eje x*/
            width: 10px;
            height: 10px;
            background-color: #A1DD70;
            border-radius: 50%;
            box-shadow: 0 0 10px 5px rgba(161, 221, 112, 0.7);
        }

        .dot-4 {
            position: absolute;
            top: 43%;
            /*sobre eje y*/
            left: 63%;
            /*sobre eje x*/
            width: 10px;
            height: 10px;
            background-color: #A1DD70;
            border-radius: 50%;
            box-shadow: 0 0 10px 5px rgba(161, 221, 112, 0.7);
        }

        .dot-5 {
            position: absolute;
            top: 43%;
            /*sobre eje y*/
            left: 77.5%;
            /*sobre eje x*/
            width: 10px;
            height: 10px;
            background-color: #A1DD70;
            border-radius: 50%;
            box-shadow: 0 0 10px 5px rgba(161, 221, 112, 0.7);
        }

        .dot-6 {
            position: absolute;
            top: 60%;
            /*sobre eje y*/
            left: 85%;
            /*sobre eje x*/
            width: 10px;
            height: 10px;
            background-color: #A1DD70;
            border-radius: 50%;
            box-shadow: 0 0 10px 5px rgba(161, 221, 112, 0.7);
        }

        .dot-7 {
            position: absolute;
            top: 60%;
            /*sobre eje y*/
            left: 70%;
            /*sobre eje x*/
            width: 10px;
            height: 10px;
            background-color: #A1DD70;
            border-radius: 50%;
            box-shadow: 0 0 10px 5px rgba(161, 221, 112, 0.7);
        }

        .dot-8 {
            position: absolute;
            top: 67%;
            /*sobre eje y*/
            left: 86%;
            /*sobre eje x*/
            width: 10px;
            height: 10px;
            background-color: #A1DD70;
            border-radius: 50%;
            box-shadow: 0 0 10px 5px rgba(161, 221, 112, 0.7);
        }

        .dot-9 {
            position: absolute;
            top: 70%;
            /*sobre eje y*/
            left: 78%;
            /*sobre eje x*/
            width: 10px;
            height: 10px;
            background-color: #A1DD70;
            border-radius: 50%;
            box-shadow: 0 0 10px 5px rgba(161, 221, 112, 0.7);
        }

        .dot-10 {
            position: absolute;
            top: 73%;
            /*sobre eje y*/
            left: 67%;
            /*sobre eje x*/
            width: 10px;
            height: 10px;
            background-color: #A1DD70;
            border-radius: 50%;
            box-shadow: 0 0 10px 5px rgba(161, 221, 112, 0.7);
        }

        .dot-11 {
            position: absolute;
            top: 75%;
            /*sobre eje y*/
            left: 60.5%;
            /*sobre eje x*/
            width: 10px;
            height: 10px;
            background-color: #A1DD70;
            border-radius: 50%;
            box-shadow: 0 0 10px 5px rgba(161, 221, 112, 0.7);
        }

        .dot-12 {
            position: absolute;
            top: 79%;
            /*sobre eje y*/
            left: 65%;
            /*sobre eje x*/
            width: 10px;
            height: 10px;
            background-color: #A1DD70;
            border-radius: 50%;
            box-shadow: 0 0 10px 5px rgba(161, 221, 112, 0.7);
        }

        .dot-13 {
            position: absolute;
            top: 78.5%;
            /*sobre eje y*/
            left: 73%;
            /*sobre eje x*/
            width: 10px;
            height: 10px;
            background-color: #A1DD70;
            border-radius: 50%;
            box-shadow: 0 0 10px 5px rgba(161, 221, 112, 0.7);
        }

        .dot-14 {
            position: absolute;
            top: 87%;
            /*sobre eje y*/
            left: 55%;
            /*sobre eje x*/
            width: 10px;
            height: 10px;
            background-color: #A1DD70;
            border-radius: 50%;
            box-shadow: 0 0 10px 5px rgba(161, 221, 112, 0.7);
        }

        .dot-15 {
            position: absolute;
            top: 90%;
            /*sobre eje y*/
            left: 65%;
            /*sobre eje x*/
            width: 10px;
            height: 10px;
            background-color: #A1DD70;
            border-radius: 50%;
            box-shadow: 0 0 10px 5px rgba(161, 221, 112, 0.7);
        }

        .dot-16 {
            position: absolute;
            top: 80%;
            /*sobre eje y*/
            left: 79%;
            /*sobre eje x*/
            width: 10px;
            height: 10px;
            background-color: #A1DD70;
            border-radius: 50%;
            box-shadow: 0 0 10px 5px rgba(161, 221, 112, 0.7);
        }

        .dot-17 {
            position: absolute;
            top: 90%;
            /*sobre eje y*/
            left: 80%;
            /*sobre eje x*/
            width: 10px;
            height: 10px;
            background-color: #A1DD70;
            border-radius: 50%;
            box-shadow: 0 0 10px 5px rgba(161, 221, 112, 0.7);
        }

        .months-container {
            justify-content: center;
            display: flex;
            flex-wrap: wrap;
        }

        .month-square {
            width: 50px;
            height: 50px;
            margin-right: 7px;
            background-color: gray;
            text-align: center;
        }

        .reserve-container {
            justify-content: center;
            display: flex;
            flex-wrap: wrap;
        }

        .reserve-square {
            width: 50px;
            height: 50px;
            margin: 5px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            border: 1px solid #ccc;
        }

        .frutation-name {
            font-weight: bold;
        }

        .frutation-status {
            font-size: 12px;
        }

        .page-content {
            padding: 20px;
        }

        .danger {
            color: red;
            background-color: #ffe6e6;
            padding: 5px;
            border-radius: 5px;
        }

        .safe {
            color: green;
            background-color: #e6ffe6;
            padding: 5px;
            border-radius: 5px;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .mdl-card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            margin: 1%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .mdl-card__title {
            color: #fff;
            background-size: cover;
            background-position: center;
            height: 200px;
        }

        .mdl-card__title h2 {
            margin-top: 0;
            text-shadow:
                -1px -1px 0 #254336,
                1px -1px 0 #254336,
                -1px 1px 0 #254336,
                1px 1px 0 #254336;
        }

        .mdl-card__supporting-text {
            width: 100%;
        }

        .mdl-card__supporting-text p {

            margin: 5px 0;
        }

        .mdl-card-img-carrusel {
            color: #fff;
            background-size: cover;
            background-position: center;
            height: 500px;
        }

        .carousel-item {
            height: 500px;
        }

        .carousel-item img {
            height: 100%;
            width: 100%;
            object-fit: cover;
        }

        @media (max-width: 1200px) {
            .mdl-card {
                width: 30%;
            }
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                align-items: center;
            }

            .mdl-card {
                width: 100%;
                margin-bottom: 20px;
            }
        }

        .center-card-container {
            display: flex;
            justify-content: center;
        }

        .center-card {
            width: 60%;
            margin: 0 auto;
        }

        @media (max-width: 768px) {
            .center-card {
                width: 100%;
            }
        }

        @media (max-width: 768px) {
            .months-container {
                flex-wrap: wrap;
                justify-content: space-between;
            }

            .month-square {
                width: calc(25% - 10px);
                margin-bottom: 10px;
            }
        }
    </style>
</head>

<body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
                <span class="mdl-layout-title">Ñande Yvyra</span>
            </div>
        </header>
        <main class="mdl-layout__content">
            <div class="page-content">
                @yield('content')
            </div>
        </main>
        <footer>
            <p>Información de uso público proporcionada por la Itaipu Binacional.</p>
        </footer>
    </div>
</body>

</html>
