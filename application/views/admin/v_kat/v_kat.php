<!-- Main content -->
<div class="content-wrapper">
  <!-- Content area -->
  <div class="content">
    <?php
    echo $this->session->flashdata('msg');
    $link_kat = $this->uri->segment(3);
    $kat = ucwords(preg_replace('/[_]/',' ',$link_kat));
    ?>
    <!-- Dashboard content -->
    <div class="row">
      <!-- Basic datatable -->
      <div class="panel panel-flat">
        <div class="panel-heading">
          <h5 class="panel-title"> Data <?php echo $kat; ?></h5>
          <hr style="margin:0px;">
          <div class="heading-elements">
            <ul class="icons-list">
              <li><a data-action="collapse"></a></li>
            </ul>
          </div>

                    <br>
                    <a href="panel_admin/v_kat/<?php echo $link_kat; ?>/t" class="btn btn-primary">Tambah <?php echo $kat; ?></a>

        </div>
        <div class="table-responsive">
        <table class="table datatable-basic table-bordered" width="100%">
          <thead>
            <tr>
              <th width="30px;">No.</th>
              <th>Judul <?php echo $kat; ?></th>
              <th>Isi <?php echo $kat; ?></th>
              <th width="160">Tanggal Posting</th>
              <th class="text-center" width="130">Aksi</th>
            </tr>
          </thead>
          <tbody>
              <?php
              $no = 1;
              foreach ($v_kat->result() as $baris) {?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $baris->judul_kat; ?></td>
                  <td><?php echo substr(htmlentities(strip_tags($baris->ket_kat)), 0, 115); ?>...</td>
                  <td><?php echo date('d-m-Y H:i:s', strtotime($baris->tgl_kat)); ?></td>
                  <td align="center">
                      <a href="panel_admin/v_kat/<?php echo $link_kat; ?>/e/<?php echo $baris->id_kat; ?>" class="btn btn-success btn-xs" title="Edit"><i class="icon-pencil"></i></a>
                      <a href="panel_admin/hapus_kat_full/<?php echo $baris->nama_kat; ?>/<?php echo $baris->id_kat; ?>" class="btn btn-danger btn-xs" title="Hapus" onclick="return confirm('Apakah Anda yakin?')"><i class="icon-trash"></i></a>
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
