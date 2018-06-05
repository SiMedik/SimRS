<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Data pegawai</small></h3>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <a href="<?php echo base_url()."fo/pegawai/tambah"?>" type="button" class="btn btn-round btn-primary"><i class="fa fa-plus"></i> Tambah</a>
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
                  <th>Foto</th>
                  <th>Nama</th>
                  <th>Jenis Kelamin</th>
                  <th>Tempat Lahir</th>
                  <th>Tanggal Lahir</th>
                  <th>NIK</th>
                  <th>NIP</th>
                  <th>Agama</th>
                  <th>Pendidikan Terakhir</th>
                  <th>Jabatan</th>
                  <th>Pangkat</th>
                  <th>Alamat</th>
                  <th>No Handphone</th>
                  <th width="20px">Aksi</th>
                </tr>
              </thead>
              <tbody>
              <?php
              $no = 1;
              foreach($tb_pegawai as $l){
              ?>
                <tr>
                  <td><?php echo $no++?></td>
                  <td>
                    <img width="65px" height="70px" src="<?php echo base_url ('upload/foto_pegawai/'.$l->foto); ?> ">
                  </td>
                  <td><?php echo $l->nama_pegawai?></td>
                  <td><?php echo $l->jk?></td>
                  <td><?php echo $l->tempat_lahir?></td>
                  <td><?php echo $l->tgl_lahir?></td>
                  <td><?php echo $l->nip?></td>
                  <td><?php echo $l->nik?></td>
                  <td><?php echo $l->agama?></td>
                  <td><?php echo $l->pendidikan_terakhir?></td>
                  <td><?php echo $l->jabatan?></td>
                  <td><?php echo $l->pangkat?></td>
                  <td><?php echo $l->alamat?></td>
                  <td><?php echo $l->no_hp?></td>
                  <td>
                    <a type="button" class="btn btn-danger" href="<?php echo base_url()."fo/pegawai/edit/".$l->id_pegawai ?>" style="color: #fff"><i class="fa fa-pencil"></i></a>
                      <a type="button" class="btn btn-primary" href="<?php echo base_url()."fo/pegawai/hapus/".$l->id_pegawai ?>" style="color: #fff"><i class="fa fa-trash-o"></i></a>
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