<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Data Dokter</small></h3>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <a href="<?php echo base_url()."fo/Dokter/tambah"?>" type="button" class="btn btn-round btn-primary"><i class="fa fa-plus"></i> Tambah</a>
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
                  <th>Nama dokter</th>
                  <th>No. Izin Praktek</th>
                  <th>Spesialis</th>
                  <th>Alumni</th>
                  <th>No. Hp</th>
                  <th>Alamat</th>
                  <th>Date Created</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
              <?php
              $no = 1;
              foreach($tb_dokter as $ci){
              ?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $ci->nama_dokter ?></td>
                  <td><?php echo $ci->no_izin_praktek ?></td>
                  <td><?php echo $ci->spesialis ?></td>
                  <td><?php echo $ci->alumni ?></td>
                  <td><?php echo $ci->no_hp ?></td>
                  <td><?php echo $ci->alamat ?></td>
                  <td><?php echo $ci->date_created ?></td>
                  <td>
                     <a type="button" class="btn btn-danger" href="<?php echo base_url()."fo/Dokter/edit/".$ci->id_dokter ?>" style="color: #fff"><i class="fa fa-pencil"></i></a>
                      <a type="button" class="btn btn-primary" href="<?php echo base_url()."fo/Dokter/hapus/".$ci->id_dokter ?>" style="color: #fff"><i class="fa fa-trash-o"></i></a>
                  </td>
                </tr>
              <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>