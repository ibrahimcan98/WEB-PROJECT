<?php
$page_title = "Gallery";
include("./nav.php");
include("./connection.php");

$query = $conn->prepare("SELECT filePath FROM Photos;");
$query->execute();
$result = $query->get_result();
//var_dump($result);
$user = mysqli_fetch_all($result, MYSQLI_ASSOC);
//var_dump($user);
?>
<section class="gallery_page">
<h1>Gallery</h1>
<figure class="gallery">
<?php
// trouble with horizontal images
foreach ($user as $img) {
    //var_dump($img);
    $size = getimagesize($img["filePath"]);
    if ($size[0] > $size[1]) {
        echo '<img class="horizontal" src="'. $img["filePath"] . '" alt="" />';
    }
    else
        echo '<img class="vertical" src="'. $img["filePath"] . '" alt="" />';
   
}
?>
</figure>
</section>
<?php
include("./footer.php");
?>