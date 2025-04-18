<?php
$page_title = "Gallery"; // page title
include("./nav.php"); //include header of the page
include("./connection.php");

$query = $conn->prepare("SELECT filePath FROM Photos;"); // SQL to get all files from photos database
$query->execute(); // executes query
$result = $query->get_result(); // creates an object of results
/var_dump($result); 
$user = mysqli_fetch_all($result, MYSQLI_ASSOC); // makes results appear as array
/var_dump($user);
?>
<section class="gallery_page"> 
<h1>Gallery</h1>
<figure class="gallery">
<?php
// takes each element of the user array
foreach ($user as $img) {
    /var_dump($img);
    $size = getimagesize($img["filePath"]); // gets width and height of the photo
    // if width is more than height, it assigns horizontal class
    // otherwise image has vertical class
    if ($size[0] > $size[1]) {
        echo '<img class="horizontal" src="'. $img["filePath"] . '" alt="" />'; // show image from found filepath
    }
    else
        echo '<img class="vertical" src="'. $img["filePath"] . '" alt="" />'; // show image from found filepath
   
}
?>
</figure>
</section>
<?php
include("./footer.php"); //include footer of the page
?>