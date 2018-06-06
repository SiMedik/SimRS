<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Ringkasan Rekam Medik Pasien</small></h3>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Data Rekam Medik Pasien</h2>
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
          <br>
          <?php foreach($tb_pasien as $l){
          ?>
            <form action="" method="post" enctype="multipart/form-data" role="form" data-parsley-validate="" class="form-horizontal form-label-left">
              <div class="row">
                <div class="col-md-7 col-sm-7 col-xs-12">
                  <div class="form-group">
                    <label class="control-label col-md-4 col-sm-4 col-xs-12" for="last-name">Nama Pasien <span class="required">*</span>
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                      <input type="text" value="<?php echo $l->nama_pasien?>"  name="nama_pasien" required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-4 col-sm-4 col-xs-12" for="last-name">Alamat<span class="required">*</span>
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                      <input type="text" value="<?php echo $l->alamat?>" name="alamat" required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-4 col-sm-4 col-xs-12" for="first-name">Tempat Lahir <span class="required">*</span>
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                      <input type="text" value="<?php echo $l->tempatlahir?>" name="tempatlahir" required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-4 col-sm-4 col-xs-12" for="first-name">Tanggal Lahir<span class="required">*</span>
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                      <input type="date" value="<?php echo $l->tanggal_lahir?>" name="tanggal_lahir" required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-4 col-sm-4 col-xs-12">Agama</label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                      <select class="select2_single form-control" name="agama">
                        <option></option>
                        <option value="Islam" <?php $l->agama == 'Islam' ? print "selected" : "" ?>>Islam</option>
                        <option value="Hindu" <?php $l->agama == 'Hindu' ? print "selected" : "" ?>>Hindu</option>
                        <option value="Budha" <?php $l->agama == 'Budha' ? print "selected" : "" ?>>Budha</option>
                        <option value="Kristen" <?php $l->agama == 'Kristen' ? print "selected" : "" ?>>Kristen</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-5 col-sm-5 col-xs-12">
                  <div class="form-group">
                    <label class="control-label col-md-4 col-sm-4 col-xs-12" for="last-name">Jenis Kelamin<span class="required">*</span>
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                      <select class="select2_single form-control" name="jenis_kelamin">
                        <option></option>
                        <option value="Laki-laki" <?php $l->jenis_kelamin == 'Laki-laki' ? print "selected" : "" ?>>Laki-laki</option>
                        <option value="Perempuan" <?php $l->jenis_kelamin == 'Perempuan' ? print "selected" : "" ?>>Perempuan</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-4 col-sm-4 col-xs-12" for="last-name">No.Handphone<span class="required">*</span>
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                      <input type="text" value="<?php echo $l->no_hp?>" name="no_hp" required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-4 col-sm-4 col-xs-12" for="last-name">Pekerjaan<span class="required">*</span>
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                      <input type="text" value="<?php echo $l->pekerjaan?>" name="pekerjaan" required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-4 col-sm-4 col-xs-12" for="last-name">Status Menikah<span class="required">*</span>
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                      <select class="select2_single form-control" name="status_menikah">
                        <option></option>
                        <option value="Menikah" <?php $l->status_menikah == 'Menikah' ? print "selected" : "" ?>>Menikah</option>
                        <option value="Belum Menikah" <?php $l->status_menikah == 'Belum Menikah' ? print "selected" : "" ?>>Belum Menikah</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <table class="table table-bordered">
                    <thead>
                      <tr style="background-color: #337ab7;color: white">
                        <th>Tahun</th>
                        <th>Jumlah Rawat Inap</th>
                        <th>Jumlah Rawat Jalan</th>
                        <th>Jumlah Rawat UGD</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">2018</th>
                        <td>2</td>
                        <td>3</td>
                        <td>1</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-9">
                  <a type="button" class="btn btn-danger" href="<?php echo base_url()."dokter/Rekam_medik/detail/".$l->id_pasien ?>" style="color: #fff"><i class="fa fa-search"></i> Detail Rekam Medik</a>
                  <button class="btn btn-primary" type="button">Kembali</button>
                </div>
              </div>
            </form>
          <?php }?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
