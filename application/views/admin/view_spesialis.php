<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Data Spesialis</small></h3>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <a href="<?php echo base_url()."admin/Datamaster/tambah_spesialis"?>" type="button" class="btn btn-round btn-primary"><i class="fa fa-plus"></i> Tambah</a>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Settings 1</a>
                  </li>
                  <li><a href="#">Settings 2</a>
                  </li>
                </ul>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <p class="text-muted font-13 m-b-30">
            </p>
            <table id="datatable" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Spesialis</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
              <?php 
                $no = 1;
                foreach($tb_spesialis as $l){
              ?>                          
                <tr>
                  <td><?php echo $no++?></td>
                  <td><?php echo $l->nama_dokter?></td>
                  <td><?php echo $l->spesialis?></td>
                  <td>
                     <a href="<?php echo base_url()."admin/Datamaster/edit_spesialis/".$l->id_spesialis ?>" type="button" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                      <a href="<?php echo base_url()."admin/Datamaster/hapus_spesialis/".$l->id_spesialis ?>" type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
                  </td>
                </tr>
              <?php }?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>