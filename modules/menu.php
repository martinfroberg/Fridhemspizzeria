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
$layoutSettings = array(5, 11, 17, 23, 29, 32, 38, 42, 48, 53, 56, 59, 65, 69, 75);
foreach ($menu_items as $key) {
  $menu_order[$i]['menu_order'] = $i;
  if(in_array($i, $layoutSettings)){
    $menu_order[$i]['layoutDirection'] = 1;
  }
  $i++;
}

setLastSide(0);
setTitleIdCounter();
array_walk($menu_order, 'getLayout', $menu_order);

echo '</section></section>';
echo '<hr class="hr-l">';
echo '</div>';

function getLayout($b){
  if($b['menu_order'] == 0){
    echo '<div class="menu-container">';
    echo '<h1> Meny </h1>';
    echo '<p>Tomatsås och ost ingår till alla pizzor.</p>';
    echo '<hr class="hr-l">';
    echo '<section class="menu-box-container">';
    echo '<div class="menu-title-background"><h3 id="t' . getTitleIdCounter() . '"></h3></div>';
    echo '<hr class="hr-s">';
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
    echo '<div class="menu-title-background"><h3 id="t' . getTitleIdCounter() . '"></h3></div>';
    echo '<hr class="hr-s">';
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
  if($b['category'] == "Pizza" || $b['category'] == "Sallad" || $b['price'] == 0){
    echo '<article><p class="menu-item-name">' . $b['name'] . '</p><p class="menu-item-ingredients">(' . $b['ingredients'] . ')</p></article>';
  } elseif($b['ingredients'] == "") {
    echo '<article><p class="menu-item-name">' . $b['price'] . ':-  ' . $b['name'] . '</p></article>';
  } else {
    echo '<article><p class="menu-item-name">' . $b['price'] . ':-  ' . $b['name'] . '</p><p class="menu-item-ingredients">(' . $b['ingredients'] . ')</p></article>';
  }
}

function getTitleIdCounter(){
  $GLOBALS['titleIdCounter']++;
  return $GLOBALS['titleIdCounter'];
}

function setTitleIdCounter(){
  $GLOBALS['titleIdCounter'] = 0;
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
