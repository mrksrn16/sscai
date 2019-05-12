<div class="row">
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-aqua">
      <div class="inner">
        <h3><?php echo count($admissions);?></h3>

        <p>Total Admissions</p>
      </div>
      <!-- <div class="icon">
        <i class="fa fa-en"></i>
      </div> -->
      <a href="<?php echo base_url();?>admin/admissions" class="small-box-footer">Go to admissions <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-yellow">
      <div class="inner">
        <h3><?php echo $this->M_Admissions->check_pending();?></h3>

        <p>Unview Admission</p>
      </div>
    </div>
  </div>
  <!-- <div class="col-lg-3 col-xs-6">
    <div class="small-box bg-green">
      <div class="inner">
        <h3><?php echo $this->M_Admissions->check_pending();?></h3>

        <p>Accepted Admission</p>
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-xs-6">
    <div class="small-box bg-red">
      <div class="inner">
        <h3><?php echo $this->M_Admissions->check_pending();?></h3>

        <p>Rejected Admission</p>
      </div>
    </div>
  </div> -->


  </div>
  <div class="row">
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-aqua">
      <div class="inner">
        <h3><?php echo count($messages);?></h3>

        <p>Total Inquiries</p>
      </div>
      <!-- <div class="icon">
        <i class="fa fa-en"></i>
      </div> -->
      <a href="<?php echo base_url();?>admin/messages" class="small-box-footer">Go to messages <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-yellow">
      <div class="inner">
        <h3><?php echo $this->M_Messages->check_pending();?></h3>

        <p>Unview Inquiries</p>
      </div>
    </div>
  </div>

</div>