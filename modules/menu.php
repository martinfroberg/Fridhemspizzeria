<p>Tomatsås och ost ingår till alla pizzor.</p>

<?php
$stmt = $con->prepare('SELECT * FROM menu');
$stmt->execute();
$result = $stmt->get_result();
while ($data = $result->fetch_assoc()){
  $menu_items[] = $data;
}
$stmt->close();

echo '<div class="menu-container">';

for ($i=0; $i < count(array_count_values(array_column($menu_items, 'category'))); $i++) {
  $category = "";

  foreach ($menu_items as $key => $item) {
    if ($category == "" || !$category = $item['category']){
      $category = $item['category'];
      $t[$category][] = $item;
      unset($menu_items[$key]);
    } elseif($category == $item['category']){
      $t[$category][] = $item;
      unset($menu_items[$key]);
    }
  }
}
usort($t, 'sort_menu');

setLastSide(0);
getLastSide();

array_walk($t, 'print_category');

echo '</div>';

function print_category($menu_items){
  for ($i=0; $i < count($menu_items); $i++) {
    if ($i == 0 || $i % 10 == 0){
      echo '<section class="menu-box-container">';
      if (getLastSide() == 0){
        echo '<section class="text-left">';
      } else {
        echo '<section class="text-right">';
      }
    }
    //Inside foreach
    echo '<article>';
    echo '<p>' . $menu_items[$i]['name'] . $menu_items[$i]['price'] . $menu_items[$i]['category'];
    echo '</p>';
    echo '</article>';

    if (($i + 1) % 10 == 0 || ($i + 1) == count($menu_items)){
      echo '</section>';

      if(getLastSide() == 1){
        echo '<section class="img-left">';
        echo '<img src="http://www.questdisposal.ca/wp-content/uploads/2015/02/img-temp.jpg">';
        echo '</section>';
        setLastSide(0);
      } else {
        echo '<section class="img-right">';
        echo '<img src="http://www.questdisposal.ca/wp-content/uploads/2015/02/img-temp.jpg">';
        echo '</section>';
        setLastSide(1);
      }

      echo '</section>';
    }
  }
}

function sort_menu($a, $b) {
  return count($b) - count($a);
}

function getLastSide(){
  return $GLOBALS['last_side'];
}

function setLastSide($side){
  $GLOBALS['last_side'] = $side;
}
?>
