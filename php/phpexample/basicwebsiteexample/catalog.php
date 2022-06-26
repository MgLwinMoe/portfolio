<?php
include("Inc/data.php");
include("Inc/function.php");
$pageTitle = "Full Catalog";
 $section = "";
 
if (isset($_GET["cat"])){
    if ($_GET["cat"] == "books") {
        $pageTitle ="Books";
        $section = "books";
    } else if($_GET["cat"] == "movies") {
        $pageTitle = "Movies";
         $section = "movies";
    } else if($_GET["cat"] == "music") {
        $pageTitle = "Music";
         $section = "music";
    }
}
include("Inc/header.php"); ?>
<div class="section catalog page">
    <div class="wrapper">
        <h1><?php 
          if($section != null){
              echo "<a href='catalog.php'> Full Catalog</a> &gt;";
          } echo $pageTitle;
         ?></h1>
        <ul class="items">
        <?php   
            $categories = array_category($catalog, $section);
            foreach($categories as $id){
                echo get_item_html($id,$catalog[$id]);
            }
            ?>
        </ul>
    </div>
</div>
<?php include("Inc/footer.php"); ?>