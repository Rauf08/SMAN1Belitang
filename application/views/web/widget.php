<div id="secondary" class="widget-area" role="complementary">
    <aside id="search-2" class="widget widget_search">
      <form role="search" method="post" class="search-form" action="">
        <label>
          <span class="screen-reader-text">Cari untuk:</span>
          <input type="search" class="search-field" placeholder="Cari &hellip;" value="" name="cari" />
        </label>
        <input type="submit" name="btncari" class="search-submit" value="Cari" />
      </form>
    </aside>
    <aside id="recent-posts-2" class="widget widget_recent_entries">
      <h2 class="widget-title"><span>Postingan Terbaru</span></h2>
      <ul>
        <?php
          $this->db->order_by('id_kat', "DESC");
          $this->db->limit(10);
         foreach ($this->db->get('tbl_kat')->result() as $baris): ?>
          <li>
            <a href="kat/<?php echo "$baris->nama_kat/$baris->url_kat"; ?>"><?php echo ucwords($baris->judul_kat); ?></a>
          </li>
        <?php endforeach; ?>
      </ul>
    </aside>
</div><!-- #secondary -->

<?php
if (isset($_POST['btncari'])) {
  $cari = preg_replace('/[ ]/', '-', $_POST['cari']);
  redirect("pencarian/$cari");
} ?>
