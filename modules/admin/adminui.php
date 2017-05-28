<div class="admin-ui-container">
  <h1>Logged in as Admin</h1>
  <form action="core/admin/logout.php" method="post">
    <button type="submit">Logout</button>
  </form>
  <ul>
    <li><a id="edit-menu" class="admin-load-modal" href="#">Meny</a></li>
    <li><a id="edit-news" class="admin-load-modal" href="#">Nyheter</a></li>
    <li><a id="edit-gallery" class="admin-load-modal" href="#">Galleri</a></li>
    <li><a id="edit-times" class="admin-load-modal" href="#">Öppettider</a></li>
  </ul>

  <!-- The Modal -->
  <div id="admin-modal-container">
  </div>
</div>

<script type="text/javascript">

$(document).ready(function() {
  $('.admin-load-modal').click(function(e) {
    document.getElementById('admin-modal-container').style.display = 'block';
    $('body').css('overflow','hidden');

    switch (e.target.id) {
      case 'edit-menu':
        $('#admin-modal-container').load('modules/admin/modals/menu-modal-content.php');
        break;
      case 'edit-news':
        $('#admin-modal-container').load('modules/admin/modals/news-modal-content.php');
        break;
      case 'edit-gallery':
        $('#admin-modal-container').load('modules/admin/modals/gallery-modal-content.php');
        break;
      case 'edit-times':
        $('#admin-modal-container').load('modules/admin/modals/times-modal-content.php');
        break;
    }
  });

  window.onclick = function(e) {
    if (e.target == document.getElementById('admin-modal-container')) {
      document.getElementById('admin-modal-container').style.display = 'none';
      $('body').css('overflow','auto');
    }
  }
});

</script>
