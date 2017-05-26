<?php
include '../../../core/database/connection.php';
$con = Database::getConnection();

$stmt = $con->prepare('SELECT * FROM menu');
$stmt->execute();
$result = $stmt->get_result();
while ($data = $result->fetch_assoc()){
  $menu_items[] = $data;
}
$stmt->close();

$list_changes = $menu_items;

echo '<div class="modal-content">';
renderList($list_changes);
echo '</div>';


function renderList($a){
  echo '<section class="admin-edit-menu-order-container">';

  foreach ($a as $item) {

    echo '<p>' . $item['order'] . ': ' . $item['name'];
    //echo '<button type="button" name="button">Upp</button> <button type="button" name="button">Ner</button>';
    echo '</p>';

    if($item['order'] == count($a)){
      //Last item in list
      echo '</section>';
    } elseif($item['direction'] == 1){
      echo '</section>';
      echo '<section class="admin-edit-menu-order-container">';
    }
  }
}

function moveUp($a, $pos) {
  if(!$pos == 1){
    $a_pos = array_search($pos, $a['order']);
    $pos_above = array_search($pos - 1, $a['order']);

    $a[$pos] = $a_pos;
    $a[$pos-1] = $pos_above;
  }

  return $a;
}

function moveDown($a, $pos) {

}

function updateDb($a) {

}

?>

<script type="text/javascript">
function moveUp(){

}

</script>

<!--<form class="admin-edit-menu-form" action="" method="post">
  <label for="menu-item-name">Namn: </label>
  <input type="text" name="menu-item-name" value="hello" />
  <br>
  <label for="menu-item-name">Ingredienser: </label>
  <input type="text" name="menu-item-ingredients" value="" />
  <br>
  <select name="menu-categories">
    <option value="Pizza">Pizza</option>
    <option value="Sallad">Sallad</option>
    <option value="Grill">Grill</option>
    <option value="Pasta">Pasta</option>
    <option value="Dryck">Dryck</option>
  </select>
  <br>
  <label for="menu-item-name">Pris: </label>
  <input type="text" name="menu-item-price" value="" />
</form>
</div> -->
