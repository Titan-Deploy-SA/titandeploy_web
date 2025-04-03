<?php  $this->load->view('admin/include/header.php') ?>
<!-- page content -->

<div class="right_col" role="main">
<div class="">
  <div class="page-title">
    <div class="title_left">
      <h3>Toutes les matières</h3>
    </div>

    <div class="title_right">
         <a href="<?php echo site_url('admin/subject'); ?>" class="btn btn-radius btn-primary mb-2">Ajouter une formation</a> 
    </div>
  </div>

  <div class="clearfix"></div>

  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <p class="text-muted font-13 m-b-30">
            Informations sur les demandes de devis
          </p>
          <table id="datatable" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Telephone</th>
                <th>Email</th>
                <th>Projet</th>
                <th>Action</th>
              </tr>
            </thead>

            <tbody>
            	<?php foreach ($devis as $dev ) :
            	 ?>
              <tr>
                <td><?=$dev->nom ?></td>
                <td><?=$dev->prenom ?></td>
                <td><?=$dev->telephone ?></td>
                <td><?=$dev->email ?></td>
                <td><?=$dev->projet ?></td>
                <td><a href="<?php echo site_url('admin/detail'); ?>" class="btn btn-default">Detail</a></td>

              </tr>
         		 <?php endforeach ?>
              
              
            </tbody>
          </table>
        </div>
    </div>
</div>
<!-- page content -->


<?php  $this->load->view('admin/include/footer.php') ?>