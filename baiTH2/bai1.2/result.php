
<?php 
    echo 'Kết quả là :' ;
    $a = $_POST['first'] ?? 0;
    $b = $_POST['second'] ?? 0;
    if ($a == 0) {
        if ($b == 0) {
            echo "Phương trình vô số nghiệm";
        } else {
            echo "Phương trình vô nghiệm";
        }
    } else {
        echo -$b/$a;
    }
?>

