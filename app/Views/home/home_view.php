<section class="ftco-section">
  <div class="container">
    <div class="row">
      <?php
      if($data){
        foreach($data as $row){
          ?>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="product">
              <a href="<?php echo base_url()."/home/detail/".$row->kd_barang ?>" class="img-prod">
                <img class="img-fluid" src="<?php echo base_url()."/images/".$row->gambar ?>">
              </a>
              <div class="text py-3 pb-4 px-3 text-center">
                <h3><a href="<?php echo base_url()."/home/detail/".$row->kd_barang ?>" > 
                  <?php echo $row->nama_barang ?> </a>
                </h3>
                <div style="text-align:center">
                  <p class="price"><span class="price-sale">
                    <?php echo "Rp. ". number_format($row->harga, 0, ",","."); ?>
                  </span></p>
                </div>
              </div>
            </div>
          </div>
          <?php
        }
      }
      ?>
    </div>
  </div>
</section>