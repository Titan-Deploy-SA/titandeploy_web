<?php  $this->load->view('admin/include/header.php') ?>
<br><br><br>
<!-- page content -->
     <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Inscription</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                     Affichage des inscriptions
                    </p>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Nom</th>
                          <th>Prenom</th>
                          <th>Telephone</th>
                          <th>Email</th>
                          <th>Matières</th>
                          <th>Date Debut</th>
                        </tr>
                      </thead>


                      <tbody>
                          <?php if ($inscrit):?>
                        <?php foreach ($inscrit as $ins):
                        ?>
                        <tr>
                          <td><?=$ins->nom ?></td>
                          <td><?=$ins->prenom ?></td>
                          <td><?=$ins->tel ?></td>
                          <td><?=$ins->email ?></td>
                          <td><?=$ins->title ?></td>
                          <td><?=$ins->dateDebut ?></td>
                        </tr>
                      <?php endforeach; endif; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
<!-- page content -->


<?php  $this->load->view('admin/include/footer.php') ?>