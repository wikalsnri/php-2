<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
    <h1>Berlatih Function PHP</h1>
    <?php
    echo "<h3> Soal No 1 Greetings </h3>";

    // Soal No 1 - Greetings
    function greetings($name) {
        echo "Halo " . ucfirst($name) . ", Selamat Datang di Garuda Cyber Institute!";
    }

    greetings("Bagas");echo "<br>";
    greetings("Wahyu");echo "<br>";
    greetings("nama peserta");echo "<br>";

    echo "<br>";
    echo "<h3>Soal No 2 Reverse String</h3>";

    // Soal No 2 - Reverse String
    function reverseString($str) {
        $length = strlen($str);
        $reversedStr = "";

        for ($i = $length - 1; $i >= 0; $i--) {
            $reversedStr .= $str[$i];
        }

        echo $reversedStr;
    }

    reverseString("nama peserta");echo "<br>";
    reverseString("Garuda Cyber Institute");echo "<br>";
    reverseString("We Are GC-Ins Developer");echo "<br>";

    echo "<br>";
    echo "<h3>Soal No 3 Palindrome </h3>";

    // Soal No 3 - Palindrome
    function palindrome($str) {
        $str = strtolower($str);
        $reversedStr = reverseString($str);

        if ($str === $reversedStr) {
            echo "true";
        } else {
            echo "false";
        }
    }

    palindrome("katak");echo "<br>"; // true
    palindrome("nababan");echo "<br>"; // true
    palindrome("jambaban");echo "<br>"; // false
    palindrome("racecar");echo "<br>"; // true

    echo "<h3>Soal No 4 Tentukan Nilai </h3>";

    // Soal No 4 - Tentukan Nilai
    function tentukan_nilai($nilai) {
        if ($nilai >= 85 && $nilai <= 100) {
            echo "Sangat Baik";
        } elseif ($nilai >= 70 && $nilai < 85) {
            echo "Baik";
        } elseif ($nilai >= 60 && $nilai < 70) {
            echo "Cukup";
        } else {
            echo "Kurang";
        }
    }

    echo tentukan_nilai(98);echo "<br>"; // Sangat Baik
    echo tentukan_nilai(76);echo "<br>";// Baik
    echo tentukan_nilai(67); echo "<br>";// Cukup
    echo tentukan_nilai(43);echo "<br>"; // Kurang
    ?>
</body>
</html>