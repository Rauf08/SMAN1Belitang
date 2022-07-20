<!-- Main content -->
<div class="content-wrapper">
  <!-- Content area -->
  <div class="content">
    <?php
    echo $this->session->flashdata('msg');
    ?>
    <!-- Dashboard content -->
    <div class="row">
      <!-- Basic datatable -->
      <div class="panel panel-flat">
        <div class="panel-heading">
          <h5 class="panel-title"> Data Guru</h5>
          <!-- <hr style="margin:0px;"> -->
          <div class="heading-elements">
            <ul class="icons-list">
              <li><a data-action="collapse"></a></li>
            </ul>
          </div>
        </div>
        <div class="table-responsive">
        <table class="table datatable-basic table-bordered" width="100%">
          <thead>
            <tr>
              <th width="30px;">No.</th>
              <th>Judul</th>
              <th>Isi</th>
              <th width="160">Tanggal Posting</th>
              <th class="text-center" width="130">Aksi</th>
            </tr>
          </thead>
          <tbody>
              <?php
              $no = 1;
              foreach ($v_isi->result() as $baris) {?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $baris->judul_isi; ?></td>
                  <td><?php echo substr(htmlentities(strip_tags($baris->ket_isi)), 0, 115); ?>...</td>
                  <td><?php echo date('d-m-Y H:i:s', strtotime($baris->tgl_isi)); ?></td>
                  <td align="center">
                      <a href="panel_admin/data_guru/e/<?php echo $baris->id_isi; ?>" class="btn btn-success btn-xs" title="Edit"><i class="icon-pencil"></i></a>
                  </td>
                </tr>
              <?php
              } ?>
          </tbody>
        </table>
        </div>
      </div>
      <!-- /basic datatable -->
    </div>
    <!-- /dashboard content -->
