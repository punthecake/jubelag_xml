<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("https://jubelagxml.herokuapp.com/xml.php");//XML page URL
 
 $content = $domOBJ->getElementsByTagName("ballpen");
 
 ?>
 <ul>
    <?php
 foreach( $content as $data )
 {
   $title = $data->getElementsByTagName("ballpen_name")->item(0)->nodeValue;
   $link = $data->getElementsByTagName("price")->item(0)->nodeValue;
  
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
