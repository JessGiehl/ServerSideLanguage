<ul style="padding:0">

<?
//for each navigation link in our data array
foreach ($data["nav"] as $key=>$navLink){
  echo "<li style= ";
  //if this navlink is present in the URL path parts, its the active page
  if ($key == $this->urlPathParts[1]){
    echo "\"background-color:#49483f;display:inline;padding:5px;\">
    <a style=\"color:#d6b837\"";
  //else its a link to another page
  } else {
    echo "\"background-color:#181818;display:inline;padding:5px;\">
    <a style=\"color:#20acdf\" ";
  }
  //concat the remaining part of the anchor tag
  echo " href='.".$navLink."'>".$key."</a> </li>";
}
?>

</ul>
