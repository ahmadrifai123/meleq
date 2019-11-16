 <aside class="main-sidebar">
     <!-- sidebar: style can be found in sidebar.less -->
     <section class="sidebar">
         <!-- Sidebar user panel -->
         <div class="user-panel">
             <div class="pull-left image">
                 <img src="<?php echo base_url(); ?>assets/backend/dist/img/user2-160x160.jpg" class="img-circle"
                     alt="User Image">
             </div>
             <div class="pull-left info">
                 <p><?php echo $this->session->userdata('name'); ?></p>
                 <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
             </div>
         </div>
         <!-- search form -->

         <!-- /.search form -->
         <!-- sidebar menu: : style can be found in sidebar.less -->
         <ul class="sidebar-menu" data-widget="tree">

             <br>
             <li>

                 <a href="<?php echo base_url("index.php/backend/modul/index");?>">
                     <i class="fa fa-table"></i> <span>Modul</span>

                 </a>




             </li>




         </ul>
     </section>

 </aside>
 <!-- content -->