         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Tabel Kerja Praktek
              <span class="label label-primary">Selesai</span>
            </h1>
            <ol class="breadcrumb">
              <li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-home"></i> Beranda</a></li>
              <li><i class="fa fa-building-o"></i> Surat Kerja Praktek</li>
              <li class="active"><i class="fa fa-table"></i> Tabel Surat Kerja Praktek</li>
            </ol>
          </section>

          <!-- Main content -->
          <section class="content">
            <div class="row">
              <div class="col-xs-12">
                <!-- /.box -->

                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">Data Surat Kerja Praktek yang Telah Selesai</h3>
                  </div>
                  <!-- /<div class="bo">/div>x-header -->
                    <div class="box-body">
                      <table id="datatable" class="table table-bordered table-striped">
                        <thead>
                          <tr>
                            <th>Tanggal</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><?php echo date('d/m/Y');?></td>
                            <td>41xxxxxxxxx</td>
                            <td>Lorem</td>
                            <td>
                              <button class="btn btn-success"><span class="fa fa-check"></span> Selesai</button>
                              <button class="btn btn-danger"><span class="fa fa-times"></span> Tidak Selesai</button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <!-- /.box-body -->
                  </div>
                  <!-- /.box -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </section>
            <!-- /.content -->
          </div>
        </body>