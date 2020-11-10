
<? php

$name = $_POST["name"];
$text = $_POST["message"];
$post = $_POST["comment"]

if(post) {
    $write = fopen("comment.txt", "a+");
    fwrite($write, "<u> <b> $name </b> </u> <br> $text <br>");
    fclose($write);
}

$read = fopen("comment.txt", "r + t");
echo "All comments... <br>";

while(!feof($read)) {
    echo fread($read, 1024);
}
fclose($read);
?>
