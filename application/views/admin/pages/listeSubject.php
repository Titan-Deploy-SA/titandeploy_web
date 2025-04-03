<?php  $this->load->view('admin/include/header.php') ?>
<!-- page content -->
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
                      Liste des formations ajouter dans la base de donnée 
                    </p>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Id categorie</th>
                          <th>Title</th>
                          <th>Description</th>
                          <th>Date</th>
                          <th>Lieu</th>
                          <th>Durée</th>
                          <th>Prix</th>
                          <th>Image</th>
                          <th>Prérequis</th>
                          <th>Objectifs</th>
                          <th>Date de Creation</th>
                        </tr>
                      </thead>


                      <tbody>
                      	<?php foreach ($formation as $forma ) :
                      	 ?>
                        <tr>
                          <td><?=$forma->id ?></td>
                          <td><?=$forma->idcategory ?></td>
                          <td><?=$forma->title ?></td>
                          <td><?=word_limiter($forma->description,10) ?></td>
                          <td><?=$forma->date ?></td>
                          <td><?=$forma->place ?></td>
                          <td><?=$forma->duration ?></td>
                          <td><?=$forma->price ?></td>
                          <td><?=$forma->image ?></td>
                          <td><?=$forma->prerequis ?></td>
                          <td><?=word_limiter($forma->objectif,10) ?></td>
                          <td><?=$forma->date_create ?></td>


                        </tr>
                   		 <?php endforeach ?>
                        
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
<!-- page content -->


<?php  $this->load->view('admin/include/footer.php') ?>