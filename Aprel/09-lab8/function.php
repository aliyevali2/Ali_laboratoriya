<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
    <style>
        .error{
            color: red;
        }
    </style>
</head>
<body>
<?php
function CalcAverage(): float {
    if (isset($_POST["submit"])) {
        if (empty($_POST["ad"])) {
            $GLOBALS['adError'] = "Adinizi daxil edin!";
        }
        if (empty($_POST["sa"])) {
            $GLOBALS['saError'] = "Soyadinizi daxil edin!";
        }
        if (empty($_POST["q1"]) or ($_POST["q1"] < 0) or ($_POST["q1"] > 1-0)) {
            $GLOBALS['q1Error'] = "1-ci qiymeti daxil edin!(Qiymet araligi: 0-100)";
        }
        if (empty($_POST["q2"]) or ($_POST["q2"] < 0) or ($_POST["q2"] > 10)) {
            $GLOBALS['q2Error'] = "2-ci qiymeti daxil edin!(Qiymet araligi: 0-100)";
        }
        if (empty($_POST["q3"]) or ($_POST["q3"] < 0) or ($_POST["q3"] > 100)) {
            $GLOBALS['q3Error'] = "3-cu qiymeti daxil edin!(Qiymet araligi: 0-100)";
        }

        if (empty($_POST["ad"]) || empty($_POST["sa"]) || empty($_POST["q1"]) || empty($_POST["q2"]) || empty($_POST["q3"]) ||
            ($_POST["q1"] < 0) || ($_POST["q1"] > 100) || ($_POST["q2"] < 0) || ($_POST["q2"] > 100) || ($_POST["q3"] < 0) || ($_POST["q3"] > 100)) {
            return 0;
        }

        $q1 = (float)$_POST["q1"];
        $q2 = (float)$_POST["q2"];
        $q3 = (float)$_POST["q3"];
        $CA = ($q1 + $q2 + $q3) / 3;
        return $CA;
    }
    return 0;
}
function RateAverage($average): string {
    if ($average > 45) {
        return "Ortalama 45-den boyukdur. Kecdiniz";
    } elseif ($average < 45) {
        return "Ortalama 45-den kicikdir. Kesildiniz";
    } else {
        return "Ortalama 45-e beraberdir. Kesildiniz";
    }
}
$adError=" ";
$saError=" ";
$q1Error=" ";
$q2Error=" ";
$q3Error=" ";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["submit"])){
        if(empty($_POST["ad"])){
            $adError= "Adinizi daxil edin!";
        }
        if(empty($_POST["sa"])){
            $saError= "Soyadinizi daxil edin!";
        }
        if(empty($_POST["q1"]) or (($_POST["q1"])<0) or (($_POST["q1"])>100)){
            $q1Error= "1-ci qiymeti daxil edin!(Qiymet araligi: 0-10)";
        }
        if(empty($_POST["q2"]) or (($_POST["q2"])<0) or (($_POST["q2"])>100)){
            $q2Error= "2-ci qiymeti daxil edin!(Qiymet araligi: 0-10)";          
        }
        if(empty($_POST["q3"]) or (($_POST["q3"])<0) or (($_POST["q3"])>100)){
            $q3Error= "3-cu qiymeti daxil edin!(Qiymet araligi: 0-10)";            
        }
    }
}
?> 
    <form style="width: 50%" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?> method="POST">
        <fieldset>
            <legend></legend>
            <label style="margin-left: 104px" for="ad">Ad:</label>
            <input style="margin-left: 2px" type="text" id="ad" name="ad"><span class="error">* <?php echo $adError;?></span><br><br>
            <label style="margin-left: 84.1px;" for="sa">Soyad:</label>
            <input style="margin-left: 2px" type="text" id="sa" name="sa"><span class="error">* <?php echo $saError;?></span><br><br>
            <label style="margin-left: 3px" for="q1">1-ci qiymet(0-100):</label>
            <input style="margin-left: 2px" type="number" id="q1" name="q1"><span class="error">* <?php echo $q1Error;?></span><br><br>
            <label style="margin-left: 3px" for="q2">2-ci qiymet(0-100):</label>
            <input style="margin-left: 2px" type=number id="q2" name="q2"><span class="error">* <?php echo $q2Error;?></span><br><br>
            <label for="q3">3-cu qiymet(0-100):</label>
            <input style="margin-left: 2px" type="number" id="q3" name="q3"><span class="error">* <?php echo $q3Error;?></span><br><br>
            <input style="margin-left: 40%" type="submit" name="submit" value="Hesabla"><br><br>
            <label for="CA">Orta qiymet: 
                <?php if (isset($_POST["submit"])) {
                $result = CalcAverage();
                if ($result !== 0) {
                    echo $result;
                }
            } ?></label><br>
            <label for="RA"><?php if (isset($_POST["submit"])) {
                echo RateAverage($result);
                }?></label>
        </fieldset>
    </form>
</body>
</html>