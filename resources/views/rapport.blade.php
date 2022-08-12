<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Invoice</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>
        .page-break {
            page-break-after: always;
        }

        .bg-grey {
            background: #F3F3F3;
        }

        .text-right {
            text-align: right;
        }

        .w-full {
            width: 100%;
        }

        .small-width {
            width: 15%;
        }

        .invoice {
            background: white;
            border: 1px solid #CCC;
            font-size: 14px;
            padding: 20px;
            margin: 10px;
        }

    </style>
</head>

<body class="bg-grey">

    <div class="container container-smaller">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
                <div class="invoice">
                    <div class="row">
                        <div class="col mb-4 bg-light mt-auto">
                            <image img src="/img/top.png" alt="Logo" style="width:100%;"></image>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-offset-6 centered" style="margin: 2em;">
                            <h3>
                                RAPPORT DU SYSTÈME DE GESTION DE LA CLIENTÈLE ET DE RECOUVREMENT À DISTANCE DU …/…/2021
                                au ../…/2021
                            </h3>
                            <h4>OPÉRATEUR :</h4>
                            <h4>VILLAGE :</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="border border-light p-3 mb-4">
                            <div class="text-center">
                                <h3 style=" color:#4472C4;">
                                    DONNÉES GÉNÉRALES
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-offset-6 centered" style="margin: 2em;">
                            <h5>
                                Nombre de comptes :
                            </h5>
                            <h5>
                                Taux de disponibilité du concentrateur :
                            </h5>
                            <h5>
                                Taux moyen de compteurs actifs :
                            </h5>
                        </div>
                    </div>
                    <div class="row">
                        <div>
                            <image img src="/img/footer.png" alt="Logo" style="width:100%;"></image>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
