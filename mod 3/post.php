<?php
function message($str = "", $type = "message")
{
    ?>

<div style="color: #fff;padding: 1rem;margin-bottom: 1rem;border-radius: 0.5rem;font-family: system-ui, sans-serif;background-color:<?php echo $type === "error" ? "#f44336" : "#73e81a"; ?>"><?php echo $str; ?></div>
<?php
}
error_reporting(E_ALL);



    if (isset($_POST["number"])) {
        $number = @$_POST["number"];
        if ($number === "") {
            message("Pls dont be empty", "error ");
        } else {
            if ($number % 3 === 0) {
                message("${number} number %3 = 0 ");
            } else {
                $afterNum = $number;
                $afterNum++;
                while ($afterNum % 3 !== 0) {
                    $afterNum++;
                }
                message("{$number} %3 !=0 , but {$afterNum} %3 == 0 ");
            }
        }
    }
?>