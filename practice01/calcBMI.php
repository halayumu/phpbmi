<?php
require_once "./BMI.php";

$one = new BMI();
$one->setData($_POST['nameNo1'], $_POST['weightNo1'], $_POST['heightNo1']);

$two = new BMI();
$two->setData($_POST['nameNo2'], $_POST['weightNo2'], $_POST['heightNo2']);

$three = new BMI();
$three->setData($_POST['nameNo3'], $_POST['weightNo3'], $_POST['heightNo3']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .name {
            font-size: 20px;
            font-weight: bold;
        }

        .position {
            margin-left: 40px;
        }

        .position_color {
            color: red;
            margin-left: 40px;
            font-size: 35px;
        }

        /*cssで色を付ける*/
    </style>
</head>

<body>
    <div class="a">
        <h2>BMI計算結果</h2>
    </div>

    <!--[1人目]-->
    <p class="name"><?= $one->getname() ?>さんの結果</p>
    <p>身長</p>
    <p class="position"><?= $one->getHeight() ?>cm</p>
    <p>体重</p>
    <p class="position"><?= $one->getweight() ?>kg</p>
    <p>BMI</p>
    <p class="position_color"><?= $one->getBMI() ?></p>
    <p>理想体重</p>
    <p class="position"><?= $one->getIdeaIWeight() ?></p>
    <p>アドバイス</p>
    <p class="position"><?= $one->getAdvice() ?></p>
    <!--[2人目]-->
    <p class="name"><?= $two->getname() ?>さんの結果</p>
    <p>身長</p>
    <p class="position"><?= $two->getHeight() ?>cm</p>
    <p>体重</p>
    <p class="position"><?= $two->getweight() ?>kg</p>
    <p>BMI</p>
    <p class="position_color"><?= $two->getBMI() ?></p>
    <p>理想体重</p>
    <p class="position"><?= $two->getIdeaIWeight() ?></p>
    <p>アドバイス</p>
    <p class="position"><?= $two->getAdvice() ?></p>
    <!--[3人目]-->
    <p class="name"><?= $three->getname() ?>さんの結果</p>
    <p>身長</p>
    <p class="position"><?= $three->getHeight() ?>cm</p>
    <p>体重</p>
    <p class="position"><?= $three->getweight() ?>kg</p>
    <p>BMI</p>
    <p class="position_color"><?= $three->getBMI() ?></p>
    <p>理想体重</p>
    <p class="position"><?= $three->getIdeaIWeight() ?></p>
    <p>アドバイス</p>
    <p class="position"><?= $three->getAdvice() ?></p>
    <a href="./inputBMI.html">入力画面</a>
</body>

</html>