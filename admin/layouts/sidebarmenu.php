<?php
$path_3 = 'kategori';
?>
 <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <?php
        if($path_3 == 'index.php'){
          echo "<li class='active'>";
        } else {
          echo "<li>";
        }
        ?>
        <li class="active">
          <a href="http://localhost/adminlte/admin">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="http://localhost/adminlte/admin/kategori">
            <i class="fa fa-pie-chart"></i>
            <span>Kategori</span>
          </a>
        </li>
        <li>
          <a href="http://localhost/adminlte/admin/artikel">
            <i class="fa fa-book"></i>
            <span>Artikel</span>
          </a>
        </li>
        <li>
          <a href="http://localhost/adminlte/admin/role">
            <i class="fa fa-user-plus"></i>
            <span>Role</span>
          </a>
        </li>
        <li>
          <a href="http://localhost/adminlte/admin/user">
            <i class="fa fa-user"></i>
            <span>User</span>
          </a>
        </li>
      </ul>