<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("https://jubelagxml.herokuapp.com/rss.php");//XML page URL
 
 $content = $domOBJ->getElementsByTagName("ballpen");
 
 ?>
 <ul>
    <?php
 foreach( $content as $data )
 {
   $name = $data->getElementsByTagName("ballpen_name")->item(0)->nodeValue;
   $price = $data->getElementsByTagName("price")->item(0)->nodeValue;
   $color = $data->getElementsByTagName("color")->item(0)->nodeValue;
   $supplier = $data->getElementsByTagName("supplier")->item(0)->nodeValue;
   echo "<li>$ballpen_name
            <ul>
                <li>$price</li>
                <li>$color</li>
                <li>$supplier</li>
            </ul>
        </li>";
 }
?>
</ul>
