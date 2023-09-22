[1]
<br>
<?php
$arrs = [2, 5, 6, 9, 2, 5, 6, 12, 5];
function sum($arrs) {
    $sum = 0;
    foreach ($arrs as $o) {
        $sum += $o;
    }
    return $sum;
}
function Tich($arrs) {
    $tich = 1;
    foreach ($arrs as $o) {
        $tich *= $o;
    }
    return $tich;
}
function Hieu($arrs) {
    $hieu = $arrs[0];
    for ($i = 1; $i < count($arrs); $i++) {
        $hieu -= $arrs[$i];
    }
    return $hieu;
}
function Thuong($arr) {
    $thuong = $arr[0];
    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] == 0) {
            return "Không thể chia cho 0";
        }
        $thuong /= $arr[$i];
    }
    return $thuong;
}
echo "Tổng các phần tử = = 2 + 5 + 6 + 9 + 2 + 5 + 6 + 12 + 5 = ". sum($arrs). "<br/>";
echo "Tích các phần tử = = 2 * 5 * 6 * 9 * 2 * 5 * 6 * 12 * 5 = ". tich($arrs). "<br/>";
echo "Hiệu các phần tử = = 2 - 5 - 6 - 9 - 2 - 5 - 6 - 12 - 5 = ". Hieu($arrs). "<br/>";
echo "Thương các phần tử = = 2 / 5 / 6 / 9 / 2 / 5 / 6 / 12 / 5 = ". Thuong($arrs);
?>
<br>
<br>
[2]
<br>
<?php
    $arrs2 = ['đỏ', 'xanh', 'cam', 'trắng'];
    $names = ['Anh', 'Sơn', 'Thắng', 'tôi'];
    
    $output = '';
    
    for ($i = 0; $i < count($arrs2); $i++) {
        if($i == count($arrs2) - 1)
        {
            $output .= "Còn màu yêu thích của " . $names[$i] . " là màu " . "<span style='color: red;'>$arrs2[$i]</span>";
        }
        else
        {
            $output .= "Màu " . "<span style='color: red;'>$arrs2[$i]</span>" . " là màu yêu thích của " . $names[$i];
        }
        
        if ($i < count($arrs2) - 1) {
            $output .= ", ";
        } else {
            $output .= ".";
        }
    }
    
    echo $output;
?>
<br>
<br>
[3]
<br>
<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
            margin-left: 200px;
        }
        th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
<?php
$arrs = ['PHP', 'HTML', 'CSS', 'JS'];
?>

<table>
    <tr>
        <th>Tên Khóa Học</th>
    </tr>

    <?php
    foreach ($arrs as $key => $value) {
        echo "<tr>";
        echo "<td>" . $value . "</td>";
        echo "</tr>";
    }
    ?>

</table>
</body>
</html>
<br>
[4]
<br>
<?php
    $arrs = array("Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" =>
    "Brussels", "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" =>
    "Paris", "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin",
    "Greece" => "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam",
    "Portugal" => "Lisbon", "Spain" => "Madrid", "Sweden" => "Stockholm", "United
    Kingdom" => "London", "Cyprus" => "Nicosia", "Lithuania" => "Vilnius", "Czech
    Republic" => "Prague", "Estonia" => "Tallin", "Hungary" => "Budapest", "Latvia" =>
    "Riga", "Malta" => "Valetta", "Austria" => "Vienna", "Poland" => "Warsaw");
    foreach ($arrs as $key => $value) {
        echo "Thủ đô của $key là $value <br/> ";
    }
?>
<br>
<br>
[5]
<br>
<?php
    $a = [
        'a' => [
        'b' => 0,
        'c' => 1
        ],
        'b' => [
        'e' => 2,
        'o' => [
        'b' => 3
        ]
        ]
        ];
    // Lấy giá trị = 3 có key là 'b' từ mảng trên
$value1 = $a['b']['o']['b'];
echo "Giá trị = {$value1} có key là 'b'<br>";

// Lấy giá trị = 1 có key là 'c' từ mảng trên
$value2 = $a['a']['c'];
echo "Giá trị = {$value2} có key là 'c'<br>";

// Lấy thông tin của phần tử có key là 'a' từ mảng trên
$info = $a['a'];
echo "Thông tin của phần tử có key 'a':<br>";
print_r($info);
?>
<br>
<br>
[6]
<br>
<?php
$keys = array(
    "field1" => "first",
    "field2" => "second",
    "field3" => "third"
);
$keys = array(
    "field1" => "first",
    "field2" => "second",
    "field3" => "third"
);

$values = array(
    "field1value" => "dinosaur",
    "field2value" => "pig",
    "field3value" => "platypus"
);

$keysAndValues = array_combine(array_values($keys), array_values($values));

print_r($keysAndValues);    
?>
<br>
<br>
[7]
<br>
<?php
    $array = [12, 5, 200, 10, 125, 60, 90, 345, -123, 100, -125, 0];
    echo "Tất cả các số từ 100 đến 200 và chia hết cho 5 là: ";
    foreach ($array as $number) {
        if ($number >= 100 && $number <= 200 && $number % 5 == 0) {
            echo $number . ', ';
        }
    }
?>
<br>
<br>
[8]
<br>
<?php
    $array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];
    $chuoi_max = $chuoi_min = $array[0];
    $do_dai_max = $do_dai_min = strlen($array[0]);
    foreach ($array as $chuoi) {
        $do_dai = strlen($chuoi);
        if ($do_dai > $do_dai_max) {
            $chuoi_max = $chuoi;
            $do_dai_max = $do_dai;
        } elseif ($do_dai < $do_dai_min) {
            $chuoi_min = $chuoi;
            $do_dai_min = $do_dai;
        }
    }
    echo "Chuỗi lớn nhất là $chuoi_max, độ dài = $do_dai_max <br>" . PHP_EOL;
    echo "Chuỗi nhỏ nhất là $chuoi_min, độ dài = $do_dai_min" . PHP_EOL;
?>
<br>
<br>
[9]
<br>
<?php
    function chuyen_ky_tu_thuong(&$arr) {
        foreach ($arr as &$item) {
            if (is_string($item)) {
                $item = strtolower($item);
            }
        }
    }
    $arr1 = ['a', 'b', 'ABC'];
    $arr2 = ['1', 'B', 'C', 'E'];
    $arr3 = ['a', 0, null, false];
    chuyen_ky_tu_thuong($arr1);
    chuyen_ky_tu_thuong($arr2);
    chuyen_ky_tu_thuong($arr3);
    echo "Mảng 1: ";
    print_r($arr1);
    ?>
    <br>
    <?php
    echo "Mảng 2: ";
    print_r($arr2);
    ?>
    <br>
    <?php
    echo "Mảng 3: ";
    print_r($arr3);
?>
<br>
<br>
[10]
<br>
<?php
    function chuyen_ky_tu_hoa(&$arr) {
        foreach ($arr as &$item) {
            if (is_string($item)) {
                $item = strtoupper($item);
            }
        }
    }
    $arr1 = ['a', 'b', 'ABC'];
    $arr2 = ['1', 'b', 'c', 'd'];
    $arr3 = ['a', 0, null, false];
    chuyen_ky_tu_hoa($arr1);
    chuyen_ky_tu_hoa($arr2);
    chuyen_ky_tu_hoa($arr3);
    echo "Mảng 1: ";
    print_r($arr1);
    ?>
    <br>
    <?php
    echo "Mảng 2: ";
    print_r($arr2);
    ?>
    <br>
    <?php
    echo "Mảng 3: ";
    print_r($arr3);
?>
<br>
<br>
[11]
<br>
<?php
    $array = array(1, 2, 3, 4, 5);
    unset($array[2]);
    $array = array_values($array);
    
    print_r($array);
?>
<br>
<br>
[12]
<br>
<?php
    $numbers = [
        'key1' => 12,
        'key2' => 30,
        'key3' => 4,
        'key4' => -123,
        'key5' => 1234,
        'key6' => -12565,
    ];
    
    // Lấy phần tử đầu tiên và phần tử cuối cùng
    $firstElement = reset($numbers);
    $lastElement = end($numbers);
    
    echo "Phần tử đầu tiên: $firstElement <br>";
    echo "Phần tử cuối cùng: $lastElement <br>";
    
    // Tìm số lớn nhất, số nhỏ nhất và tổng các giá trị
    $maxValue = max($numbers);
    $minValue = min($numbers);
    $total = array_sum($numbers);
    
    echo "Số lớn nhất: $maxValue <br>";
    echo "Số nhỏ nhất: $minValue <br>";
    echo "Tổng các giá trị: $total <br>";
    
    // Sắp xếp mảng theo chiều tăng, giảm các giá trị
    asort($numbers); // Sắp xếp tăng dần theo giá trị, giữ nguyên key
    arsort($numbers); // Sắp xếp giảm dần theo giá trị, giữ nguyên key
    
    echo "Mảng sắp xếp tăng dần theo giá trị: ";
    print_r($numbers);
    
    // Sắp xếp mảng theo chiều tăng, giảm các key
    ksort($numbers); // Sắp xếp tăng dần theo key
    krsort($numbers); // Sắp xếp giảm dần theo key
    ?>
    <br>
    <?php
    echo "Mảng sắp xếp tăng dần theo key: ";
    print_r($numbers);
    
?>
<br>
<br>
[13]
<br>
<?php
    $numbers = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72,
    65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
    $average = array_sum($numbers)/count($numbers);
    echo "Gía trị trung bình của mảng là: " .$average ."<br>";

    echo "Các số có giá trị lớn hơn giá trị trung bình là: ";
    foreach ($numbers as $so) {
        if ($so > $average) {
            echo "$so ";
        }
    }
    ?>
    <br>
    <?php
    echo "Các số có giá trị nhỏ hơn hoặc bằng giá trị trung bình là: ";
    foreach ($numbers as $so) {
        if ($so <= $average) {
            echo "$so ";
        }
    }
?>
<br>
<br>
[14]
<br>
<?php
    $array1 = [
        [77, 87],
        [23, 45]
    ];
    
    $array2 = [
        'giá trị 1', 'giá trị 2'
    ];
    
    $result = [];
    foreach ($array2 as $key => $value) {
        $result[] = array_merge([$value], $array1[$key]);
    }
    print_r($result);    
?>