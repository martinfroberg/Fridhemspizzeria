<?php
$stmt = $con->prepare('SELECT * FROM menu');
$stmt->execute();
$result = $stmt->get_result();
while ($data = $result->fetch_assoc()){
  $menu_items[] = $data;
}
$stmt->close();

$i = 0;
$menu_order = $menu_items;
$layoutSettings = array(9, 17, 27, 32, 42, 52, 56, 66, 76);
foreach ($menu_items as $key) {
  $menu_order[$i]['menu_order'] = $i;
  if(in_array($i, $layoutSettings)){
    $menu_order[$i]['layoutDirection'] = 1;
  }
  $i++;
}

setLastSide(0);

echo '<div class="menu-container">';

array_walk($menu_order, 'getLayout', $menu_order);

echo '</div>';

function getLayout($b){
  if($b['menu_order'] == 0){
    echo '<section class="menu-box-container">';
    echo '<section class="text-left">';
    getArticle($b);
  } elseif(isset($b['layoutDirection'])){
    getArticle($b);
    echo '</section>';
    switch (getLastSide()) {
      case 0:
      echo '<section class="img-right">';
      break;

      case 1:
      echo '<section class="img-left">';
      break;
    }
    echo '<img src="http://www.questdisposal.ca/wp-content/uploads/2015/02/img-temp.jpg"></section></section>';

    switchLastSide();
    echo '<section class="menu-box-container">';
    switch (getLastSide()) {
      case 0:
      echo '<section class="text-left">';
      break;

      case 1:
      echo '<section class="text-right">';
      break;
    }
  } else {
    getArticle($b);
  }
}

function getArticle($b){
  echo '<article><p>' . $b['name'] . '</p></article>';
}

function getLastSide(){
  return $GLOBALS['last_side'];
}

function setLastSide($side){
  $GLOBALS['last_side'] = $side;
}

function switchLastSide(){
  if(getLastSide() == 0){
    setLastSide(1);
  } else {
    setLastSide(0);
  }
}
?>
