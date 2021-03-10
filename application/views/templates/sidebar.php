 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <div class="mx-auto">
         <a href="index3.html" class="brand-link">
             <i class="fas fa-layer-group"></i>
             <span class="brand-text font-weight-light">FinanceLTE</span>
         </a>
     </div>

     <!-- Sidebar -->
     <div class="sidebar">
         <!-- Sidebar user panel (optional) -->
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             <div class="image">
                 <img src="<?= base_url('assets/img/') . $user['image']; ?>" class="img-circle elevation-2" alt="User Image">
             </div>
             <div class="info">
                 <a href="#" class="d-block"><?= $user['name']; ?></a>
             </div>
         </div>

         <!-- Sidebar Menu -->
         <?php
            $role_id = $this->session->userdata('role_id');
            $query_menu = "SELECT user_menu.id, menu 
                            FROM user_menu JOIN user_access_menu 
                            ON user_menu.id = user_access_menu.menu_id 
                            WHERE user_access_menu.role_id = $role_id 
                            ORDER BY user_access_menu.menu_id ASC";
            $menu = $this->db->query($query_menu)->result_array();

            ?>
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                 <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                 <?php foreach ($menu as $m) : ?>
                     <li class="nav-item">
                         <a href="#" class="nav-link">
                             <!-- <i class="nav-icon fas fa-database"></i> -->
                             <p>
                                 <?= $m['menu']; ?>
                             </p>
                         </a>
                     </li>
                     <?php
                        $menu_id = $m['id'];
                        $query_sub_menu = "SELECT * 
                                    FROM user_sub_menu JOIN user_menu 
                                    ON user_sub_menu.menu_id = user_menu.id 
                                    WHERE user_sub_menu.menu_id = $menu_id 
                                    AND user_sub_menu.is_active = 1";
                        $sub_menu = $this->db->query($query_sub_menu)->result_array();
                        ?>
                     <?php foreach ($sub_menu as $sm) : ?>
                         <li class="nav-item">
                             <?php if ($title == $sm['title']) : ?>
                                 <a href="<?= base_url($sm['url']); ?>" class="nav-link active">
                                 <?php else : ?>
                                     <a href="<?= base_url($sm['url']); ?>" class="nav-link">
                                     <?php endif; ?>
                                     <i class="<?= $sm['icon']; ?>"></i>
                                     <p><?= $sm['title']; ?></p>
                                     </a>
                         </li>
                     <?php endforeach; ?>
                 <?php endforeach; ?>

                 <!-- <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-user"></i>
                         <p>
                             User
                             <i class="fas fa-angle-right right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="pages/layout/top-nav.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Profile</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="<?= base_url('auth/logout'); ?>" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Logout</p>
                             </a>
                         </li>
                     </ul>
                 </li> -->
             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>