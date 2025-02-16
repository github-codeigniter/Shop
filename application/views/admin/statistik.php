<!DOCTYPE html>
<html lang="en">
  <!-- HEAD
================================================== -->
  <?php 
$this->load->view('_assets/A_head');
?>
  <body>
    <!-- MODALS
================================================== -->
    <?php 
$this->load->view('_assets/A_modal');
?>
    <!-- NAVIGATION VERTIKAL
================================================== -->  
    <?php 
$this->load->view('_assets/A_nav_vertikal');
?>
    <!-- NAVIGATION TOP
================================================== -->      
    <?php 
$this->load->view('_assets/A_nav_top');
?>   
    <div class="main-content">
      <!-- TOP BAR
================================================== -->
      <?php 
$this->load->view('_assets/A_top_bar');
?>
      <!-- //////////////// KONTENT DISINI  /////////////////// -->
      <div class="header">
        <div class="container-fluid">
          <!-- Body -->
          <div class="header-body">
            <div class="row align-items-end">
              <div class="col">
                <!-- Pretitle -->
                <h6 class="header-pretitle">
                  Overview
                </h6>
                <!-- Title -->
                <h1 class="header-title">
                  Dashboard
                </h1>
              </div>
              <div class="row">
              <div class="col-auto">
              <?php echo $this->session->flashdata('notif') ?>
              </div>
              <!-- <div class="col-auto">
                <a href="#" data-toggle="modal" data-target="#jual" class="btn btn-success lift">
                  Jual ditempat
                </a>
              </div> -->
              <div class="col-auto">
                <!-- Button -->
                <a href="#" data-toggle="modal" data-target="#tambah" class="btn btn-primary lift">
                  Tambah Produk
                </a>
              </div>
              </div>
            </div> 
            <!-- / .row -->
          </div> 
          <!-- / .header-body -->
        </div>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 col-lg-6 col-xl">
            <!-- Value  -->
            <div class="card">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col">
                    <!-- Title -->
                    <h6 class="text-uppercase text-muted mb-2">
                      Value
                    </h6>
                    <!-- Heading -->
                    <span class="h2 mb-0">
                      $24,500
                    </span>
                    <!-- Badge -->
                    <span class="badge badge-soft-success mt-n1">
                      +3.5%
                    </span>
                  </div>
                  <div class="col-auto">
                    <!-- Icon -->
                    <span class="h2 fe fe-dollar-sign text-muted mb-0">
                    </span>
                  </div>
                </div> 
                <!-- / .row -->
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 col-xl">
            <!-- Hours -->
            <div class="card">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col">
                    <!-- Title -->
                    <h6 class="text-uppercase text-muted mb-2">
                      Total hours
                    </h6>
                    <!-- Heading -->
                    <span class="h2 mb-0">
                      763.5
                    </span>
                  </div>
                  <div class="col-auto">
                    <!-- Icon -->
                    <span class="h2 fe fe-briefcase text-muted mb-0">
                    </span>
                  </div>
                </div> 
                <!-- / .row -->
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 col-xl">
            <!-- Exit -->
            <div class="card">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col">
                    <!-- Title -->
                    <h6 class="text-uppercase text-muted mb-2">
                      Exit %
                    </h6>
                    <!-- Heading -->
                    <span class="h2 mb-0">
                      35.5%
                    </span>
                  </div>
                  <div class="col-auto">
                    <!-- Chart -->
                    <div class="chart chart-sparkline">
                      <canvas class="chart-canvas" id="sparklineChart">
                      </canvas>
                    </div>
                  </div>
                </div> 
                <!-- / .row -->
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 col-xl">
            <!-- Time -->
            <div class="card">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col">
                    <!-- Title -->
                    <h6 class="text-uppercase text-muted mb-2">
                      Avg. Time
                    </h6>
                    <!-- Heading -->
                    <span class="h2 mb-0">
                      2:37
                    </span>
                  </div>
                  <div class="col-auto">
                    <!-- Icon -->
                    <span class="h2 fe fe-clock text-muted mb-0">
                    </span>
                  </div>
                </div> 
                <!-- / .row -->
              </div>
            </div>
          </div>
        </div> 
        <!-- / .row -->
        <div class="row">
          <div class="col-12 col-xl-8">
            <!-- Convertions -->
            <div class="card">
              <div class="card-header">
                <!-- Title -->
                <h4 class="card-header-title">
                  Conversions
                </h4>
                <!-- Caption -->
                <span class="text-muted mr-3">
                  Last year comparision:
                </span>
                <!-- Switch -->
                <div class="custom-control custom-switch">
                  <input type="checkbox" class="custom-control-input" id="cardToggle" data-toggle="chart" data-target="#conversionsChart" data-trigger="change" data-action="add" data-dataset="1" />
                  <label class="custom-control-label" for="cardToggle">
                  </label>
                </div>
              </div>
              <div class="card-body">
                <!-- Chart -->
                <div class="chart">
                  <canvas id="conversionsChart" class="chart-canvas">
                  </canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-xl-4">
            <!-- Traffic -->
            <div class="card">
              <div class="card-header">
                <!-- Title -->
                <h4 class="card-header-title">
                  Traffic Channels
                </h4>
                <!-- Tabs -->
                <ul class="nav nav-tabs nav-tabs-sm card-header-tabs">
                  <li class="nav-item" data-toggle="chart" data-target="#trafficChart" data-trigger="click" data-action="toggle" data-dataset="0">
                    <a href="#" class="nav-link active" data-toggle="tab">
                      All
                    </a>
                  </li>
                  <li class="nav-item" data-toggle="chart" data-target="#trafficChart" data-trigger="click" data-action="toggle" data-dataset="1">
                    <a href="#" class="nav-link" data-toggle="tab">
                      Direct
                    </a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <!-- Chart -->
                <div class="chart chart-appended">
                  <canvas id="trafficChart" class="chart-canvas" data-toggle="legend" data-target="#trafficChartLegend">
                  </canvas>
                </div>
                <!-- Legend -->
                <div id="trafficChartLegend" class="chart-legend">
                </div>
              </div>
            </div>
          </div>
        </div> 
        <!-- / .row -->
      </div>
      <!-- //////////////// END KONTENT /////////////////// -->
    </div>
    <!-- / .main-content -->
    <?php $this->load->view("_assets/A_form_modal")?>
<?php $this->load->view('_assets/A_footer');?>
    <!-- MODAL FORM -->
  </body>
</html>
