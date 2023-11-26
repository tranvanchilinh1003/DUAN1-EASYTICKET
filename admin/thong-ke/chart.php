<div class="page-header">
<h3 class="page-title text-center text-warning mb-4">Biểu Đồ</h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= $ADMIN_URL ?>/thong-ke/">Danh Sách</a></li>
            <li class="breadcrumb-item active" aria-current="page">Biểu Đồ</li>
        </ol>
    </nav>
</div>
<div class="row">
    <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Thống kê loại</h4>
                <canvas id="areaChart" style="height:250px"></canvas>
            </div>
        </div>
    </div>
    <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Thống kê phim</h4>
                <canvas id="doughnutChart" style="height:250px"></canvas>
            </div>
        </div>
    </div>
</div>
<script>
      var scatterChartOptions = {
    scales: {
      xAxes: [{
        type: 'linear',
        position: 'bottom',
        gridLines: {
          color: "rgba(204, 204, 204,0.1)"
        }
      }],
      yAxes: [{
        gridLines: {
          color: "rgba(204, 204, 204,0.1)"
        }
      }]
    }
  }
  // Get context with jQuery - using jQuery's .get() method.

  if ($("#doughnutChart").length) {
    var doughnutChartCanvas = $("#doughnutChart").get(0).getContext("2d");
    var doughnutChart = new Chart(doughnutChartCanvas, {
      type: 'doughnut',
      data: doughnutPieData,
      options: doughnutPieOptions
    });
  }



  if ($("#browserTrafficChart").length) {
    var doughnutChartCanvas = $("#browserTrafficChart").get(0).getContext("2d");
    var doughnutChart = new Chart(doughnutChartCanvas, {
      type: 'doughnut',
      data: browserTrafficData,
      options: doughnutPieOptions
    });
  }

</script>