<script type="text/javascript" src="assets/panel/ckeditor/ckeditor.js"></script>
<style>
  label{font-weight: bold;}
</style>
<!-- Main content -->
<div class="content-wrapper">
  <!-- Content area -->
  <div class="content">
<?php
$link_kat = $this->uri->segment(3);
$kat = ucwords(preg_replace('/[_]/',' ',$link_kat)); ?>
    <!-- Dashboard content -->
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <div class="panel panel-flat">

            <div class="panel-body">

              <fieldset class="content-group">
                <legend class="text-bold"> Tambah <?php echo $kat; ?></legend>
                <?php
                echo $this->session->flashdata('msg');
                ?>
                <form class="form-horizontal" action="panel_admin/simpan_kat_full/t" method="post" enctype="multipart/form-data">
                  <input type="hidden" name="nama_kat" value="<?php echo $link_kat; ?>">
                  <div class="form-group">
                    <label class="control-label col-lg-12">Judul <?php echo $kat; ?></label>
                    <div class="col-lg-12">
                      <input type="text" name="judul_kat" class="form-control" placeholder="Judul <?php echo $kat; ?>" value="" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-lg-12">Gambar <?php echo $kat; ?></label>
                    <div class="col-lg-12">
                      <input type="file" name="gambar" class="form-control" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-lg-12">Isi <?php echo $kat; ?></label>
                    <div class="col-lg-12">
                      <textarea type="text" name="ket_kat" class="form-control ckeditor" id="ckedtor" placeholder="Isi <?php echo $kat; ?>" required></textarea>
                    </div>
                  </div>
                  <hr>
                  <a href="panel_admin/v_kat/<?php echo $link_kat; ?>" class="btn btn-default"><< Data <?php echo $kat; ?></a>
                  <button type="submit" name="btnsimpan" class="btn btn-primary" style="float:right;">Simpan</button>
                </form>

              </fieldset>


            </div>

        </div>
      </div>
    </div>
    <!-- /dashboard content -->

<script type="text/javascript">
CKEDITOR.replace( 'ket_kat',
{
  fullPage : true,
  removeButtons: 'Save',
  removePlugins: 'Save',
  toolbar: [
                { name: 'clipboard', items : [ 'Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo' ] },
                { name: 'editing', items : [ 'Find','Replace'] },
                { name: 'document', items : [ 'Source'] },
                '/',
                { name: 'basicstyles', items : [ 'Bold','Italic','Underline','Strike','Subscript','Superscript'] },
                { name: 'paragraph', items : [ 'NumberedList','BulletedList','-','Outdent','Indent','-','Blockquote','-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'] },
                { name: 'links', items : [ 'Link','Unlink','Anchor' ] },
                { name: 'insert', items : [ 'Table','HorizontalRule','SpecialChar'] },
                '/',
                { name: 'styles', items: ['Styles', 'Format', 'Font', 'FontSize', 'lineheight'] },
                { name: 'colors', items : [ 'TextColor','BGColor' ] },
                { name: 'tools', items : [ 'Maximize','About', 'ShowBlocks' ] }
            ],
            extraPlugins: 'lineheight',
            line_height: "10px; 20px; 40px; 60px;"
            // line_height: '1em;1.1em;1.2em;1.3em;1.4em;1.5em'
            // line_height: "1px;1.1px;1.2px;1.3px;1.4px;1.5px"
});
</script>