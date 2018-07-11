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
             $query = $this->db->query("select * from tb_jalan where id_pasien = $l->id_pasien")->result();
              $queri = $this->db->query("select * from tb_ugd where id_pasien = $l->id_pasien")->result();
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
                  <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
                      <div class="panel">
                        <a class="panel-heading collapsed" role="tab" id="headingOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" style="background-color: #337ab7;color: white">
                          <h4 class="panel-title">Detail Biodata Pasien</h4>
                        </a>
                        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;background-color: white">
                          <div class="panel-body">
                            <?php foreach($tb_pasien as $l){
                            ?>
                              <form action="" method="post" enctype="multipart/form-data" role="form" data-parsley-validate="" class="form-horizontal form-label-left">
                                 <div class="form-group">
                                  <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Nomor Registrasi Pasien <span class="required">*</span>
                                  </label>
                                  <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="hidden" value="<?php echo $l->id_pasien?>"  name="id_pasien" required="required" class="form-control col-md-7 col-xs-12">
                                    <input type="text" value="<?php echo $l->no_regis?>"  name="no_regis" required="required" class="form-control col-md-7 col-xs-12">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Pasien <span class="required">*</span>
                                  </label>
                                  <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" value="<?php echo $l->nama_pasien?>"  name="nama_pasien" required="required" class="form-control col-md-7 col-xs-12">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Jenis Kelamin<span class="required">*</span>
                                  </label>
                                  <div class="col-md-9 col-sm-9 col-xs-12">
                                    <select class="select2_single form-control" name="jenis_kelamin">
                                      <option></option>
                                      <option value="Laki-laki" <?php $l->jenis_kelamin == 'Laki-laki' ? print "selected" : "" ?>>Laki-laki</option>
                                      <option value="Perempuan" <?php $l->jenis_kelamin == 'Perempuan' ? print "selected" : "" ?>>Perempuan</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Golongan Darah<span class="required">*</span>
                                  </label>
                                  <div class="col-md-9 col-sm-9 col-xs-12">
                                    <select class="select2_single form-control" name="goldar">
                                      <option></option>
                                      <option value="A" <?php $l->goldar == 'A' ? print "selected" : "" ?>>A</option>
                                      <option value="B" <?php $l->goldar == 'B' ? print "selected" : "" ?>>B</option>
                                      <option value="O" <?php $l->goldar == 'O' ? print "selected" : "" ?>>O</option>
                                      <option value="AB"<?php $l->goldar == 'AB' ? print "selected" : "" ?>>AB</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-md-3 col-sm-3 col-xs-12" for="first-name">Tempat Lahir <span class="required">*</span>
                                  </label>
                                  <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" value="<?php echo $l->tempatlahir?>" name="tempatlahir" required="required" class="form-control col-md-7 col-xs-12">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-md-3 col-sm-3 col-xs-12" for="first-name">Tanggal Lahir<span class="required">*</span>
                                  </label>
                                  <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="date" value="<?php echo $l->tanggal_lahir?>" name="tanggal_lahir" required="required" class="form-control col-md-7 col-xs-12">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Ibu<span class="required">*</span>
                                  </label>
                                  <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" value="<?php echo $l->nama_ibu?>" name="nama_ibu" required="required" class="form-control col-md-7 col-xs-12">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Alamat<span class="required">*</span>
                                  </label>
                                  <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" value="<?php echo $l->alamat?>" name="alamat" required="required" class="form-control col-md-7 col-xs-12">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-md-3 col-sm-3 col-xs-12">Agama</label>
                                  <div class="col-md-9 col-sm-9 col-xs-12">
                                    <select class="select2_single form-control" name="agama">
                                      <option></option>
                                      <option value="Islam" <?php $l->agama == 'Islam' ? print "selected" : "" ?>>Islam</option>
                                      <option value="Hindu" <?php $l->agama == 'Hindu' ? print "selected" : "" ?>>Hindu</option>
                                      <option value="Budha" <?php $l->agama == 'Budha' ? print "selected" : "" ?>>Budha</option>
                                      <option value="Kristen" <?php $l->agama == 'Kristen' ? print "selected" : "" ?>>Kristen</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">No.Handphone<span class="required">*</span>
                                  </label>
                                  <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" value="<?php echo $l->no_hp?>" name="no_hp" required="required" class="form-control col-md-7 col-xs-12">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Pekerjaan<span class="required">*</span>
                                  </label>
                                  <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" value="<?php echo $l->pekerjaan?>" name="pekerjaan" required="required" class="form-control col-md-7 col-xs-12">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Status Menikah<span class="required">*</span>
                                  </label>
                                  <div class="col-md-9 col-sm-9 col-xs-12">
                                    <select class="select2_single form-control" name="status_menikah">
                                      <option></option>
                                      <option value="Menikah" <?php $l->status_menikah == 'Menikah' ? print "selected" : "" ?>>Menikah</option>
                                      <option value="Belum Menikah" <?php $l->status_menikah == 'Belum Menikah' ? print "selected" : "" ?>>Belum Menikah</option>
                                    </select>
                                  </div>
                                </div>
                              </form>
                            <?php }?>
                          </div>
                        </div>
                      </div>
                      <div class="panel">
                        <a class="panel-heading collapsed" role="tab" id="headingTwo" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="background-color: #337ab7;color: white">
                          <h4 class="panel-title">Riwayat Rawat Inap</h4>
                        </a>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" style="height: 0px;background-color: white">
                          <div class="panel-body">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <div class="x_content">
                                <table id="datatable" class="table table-striped table-bordered">
                                  <thead>
                                    <tr>
                                      <th>Tanggal</th>
                                      <th>Ruangan</th>
                                      <th>Kelas</th>
                                      <th>No Kamar</th>
                                      <th>Dokter</th>
                                      <th>Diagnosa</th>
                                      <th>Biaya</th>
                                      <th>Detail</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td>
                                        <a type="button" class="btn btn-danger" href="<?php echo base_url()."dokter/Rekam_medik/detail/".$l->id_pasien ?>" style="color: #fff"><i class="fa fa-search"></i></a>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="panel">
                        <a class="panel-heading collapsed" role="tab" id="headingThree" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="background-color: #337ab7;color: white">
                          <h4 class="panel-title">Riwayat Rawat Jalan</h4>
                        </a>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false" style="height: 0px;background-color: white">
                          <div class="panel-body">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <div class="x_content">
                                <table id="example1" class="table table-striped table-bordered">
                                  <thead>
                                    <tr>
                                      <th>No</th>
                                      <th>Tanggal</th>
                                      <th>Poli</th>
                                      <th>Dokter</th>
                                      <th>Diagnosa</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                    $no = 1;
                                    foreach($query as $o){
                                    ?>
                                      <tr>
                                        <td><?php echo $no++?></td>
                                        <td><?php echo $o->tgl?></td>
                                        <td><?php echo $o->poli?></td>
                                        <td><?php echo $o->dokter?></td>
                                        <td><?php echo $o->diagnosa?></td>
                                      </tr>
                                    <?php }?>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="panel">
                        <a class="panel-heading collapsed" role="tab" id="headingThree" data-toggle="collapse" data-parent="#accordion" href="#collapseempat" aria-expanded="false" aria-controls="collapseempat" style="background-color: #337ab7;color: white">
                          <h4 class="panel-title">Riwayat Rawat UGD</h4>
                        </a>
                        <div id="collapseempat" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false" style="height: 0px;background-color: white">
                          <div class="panel-body">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <div class="x_content">
                                <table id="example3" class="table table-striped table-bordered">
                                  <thead>
                                    <tr>
                                      <th>No</th>
                                      <th>Tanggal</th>
                                      <th>Dokter</th>
                                      <th>Diagnosa</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                  <?php
                                  $no = 1;
                                  foreach($query as $o){
                                  ?>
                                    <tr>
                                      <td><?php echo $no++?></td>
                                      <td><?php echo $o->tgl?></td>
                                      <td><?php echo $o->dokter?></td>
                                      <td><?php echo $o->diagnosa?></td>
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
                </div>
              </div>
              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-11">
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
