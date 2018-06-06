<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Data Rekam Medik Pasien</h3>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_content">
            <p class="text-muted font-13 m-b-30">
            </p>
            <table id="datatable" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Aksi</th>
                  <th>Nomor Registrasi</th>
                  <th>Nama</th>
                  <th>Jenis Kelamin</th>
                  <th>Golongan Darah</th>
                  <th>TTl</th>
                  <th>Nama Ibu</th>
                  <th>Alamat</th>
                  <th>Agama</th>
                  <th>no_hp</th>
                  <th>pekerjaan</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
              <?php
              $no = 1;
              foreach($tb_pasien as $l){
              ?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td>
                     <a type="button" class="btn btn-primary" href="<?php echo base_url()."dokter/Rekam_medik/edit/".$l->id_pasien ?>" style="color: #fff"><i class="fa fa-eye"></i></a>
                  </td>
                  <td><?php echo $l->no_regis ?></td>
                  <td><?php echo $l->nama_pasien ?></td>
                  <td><?php echo $l->jenis_kelamin ?></td>
                  <td><?php echo $l->goldar ?></td>
                  <td><?php echo $l->tempatlahir ?>,<?php echo $l->tanggal_lahir ?></td>
                  <td><?php echo $l->nama_ibu ?></td>
                  <td><?php echo $l->alamat ?></td>
                  <td><?php echo $l->agama ?></td>
                  <td><?php echo $l->no_hp ?></td>
                  <td><?php echo $l->pekerjaan ?></td>
                  <td><?php echo $l->status_menikah ?></td>
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