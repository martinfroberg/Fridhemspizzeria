<?php
$stmt = $con->prepare('SELECT * FROM menu');
$stmt->execute();
$result = $stmt->get_result();
while ($data = $result->fetch_assoc()){
  $menu_items[] = $data;
}
$stmt->close();

//$layoutSettings = array(6, 13, 17, 24, 32, 37, 42, 48, 53, 56, 59, 64, 69, 74);

setLastSide(0);
setTitleIdCounter();
array_walk($menu_items, 'getLayout', $menu_items);

echo '</section></section>';
echo '<hr class="hr-l">';
echo '</div>';

function getLayout($b){
  if($b['order'] == 1){
    echo '<div class="menu-container">';
    echo '<h1> Meny </h1>';
    echo '<p>Tomatsås och ost ingår till alla pizzor.<br>(Barnpizza 5:- billigare.)</p>';
    echo '<hr class="hr-l">';
    echo '<section class="menu-box-container">';
    echo '<div class="menu-title-background"><h3 id="t' . getTitleIdCounter() . '"></h3></div>';
    echo '<hr class="hr-s">';
    echo '<section class="text-left">';
    getArticle($b);
  } elseif($b['direction'] == 1){
    getArticle($b);
    //images
    echo '</section>';
    switch (getLastSide()) {
      case 0:
      echo '<section class="img-right">';
      break;

      case 1:
      echo '<section class="img-left">';
      break;
    }
    echo '</section></section>';

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
    if ($b['category'] == "Pizza"){
      echo '<article><p class="menu-item-name">' . $b['order'] . '. ' . $b['name'] . '</p><p class="menu-item-ingredients">(' . $b['ingredients'] . ')</p></article>';
    } else {
      echo '<article><p class="menu-item-name">' . $b['name'] . '</p><p class="menu-item-ingredients">(' . $b['ingredients'] . ')</p></article>';
    }
  } elseif($b['ingredients'] == "") {
    echo '<article><p class="menu-item-name">' . $b['name'] . ' ' . $b['price'] . ':-</p></article>';
  } else {
    echo '<article><p class="menu-item-name">' . $b['name'] . ' ' . $b['price'] . ':-</p><p class="menu-item-ingredients">(' . $b['ingredients'] . ')</p></article>';
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
