<?php
$name="wajeeh";

$job="eid";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $job = $_POST['job'];
} else {
    /*     header("Location: index.php");
    exit; */
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <style>
        body {
            direction: rtl;
            overflow-x: hidden;
            background-color: #fbfbfb;
        }

        .form-data {

            display: flex;
            flex-direction: column;
            margin-top: 4px;
            justify-content: center;
            align-items: center;
            font-size: 32px;
        }

        .footer {
            margin-top: 50px;
            display: flex;
            flex-direction: row;
            justify-content: space-around;
        }

        img {
            max-width: 100%;
            max-height: 100%;
        }
    </style>

</head>

<body>
    <div id="myHtml">
        <img src="img/finale2.jpeg">
        <div class=" form-data">
            <div class="dataName"><?php echo $name ?></div>
            <div class="dataJob"><?php echo $job ?></div><br>

        </div>
        <div class="footer">
            <div id="htmlContent">ترخيص رقم 1440</div>
            <div class="">
                <i class="fas fa-home"></i>
                46200 - 001 - 0006080021344
            </div>
            <div class="">
                <i class="fas fa-home"></i>
                INFO @ D S . ORG .SA
            </div>
            <div class="">
                <i class="fas fa-home"></i>
                <i class="fas fa-home"></i>
                <i class="fas fa-home"></i>
                DSORGA
            </div>
        </div>
    </div>
    <button id="btn_convert"> download</button>
</body>

<script type="text/javascript">
    $(document).ready(function() {

        $("#btn_convert").on('click', function() {
            html2canvas(document.getElementById("myHtml"), {
                allowTaint: true,
                useCORS: true
            }).then(function(canvas) {
                var anchorTag = document.createElement("a");
                document.body.appendChild(anchorTag);
                document.getElementById("previewImg").appendChild(canvas);
                anchorTag.download = "filename.jpg";
                anchorTag.href = canvas.toDataURL();
                anchorTag.target = '_blank';
                anchorTag.click();
            });
        });

    });
</script>

</html>