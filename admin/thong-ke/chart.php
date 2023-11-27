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
                  <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                    <h4 class="card-title">Bar chart</h4>
                    <canvas id="barChart" style="height: 498px; display: block; width: 997px;" width="1994" height="996" class="chartjs-render-monitor"></canvas>
                  </div>
                </div>
    </div>
    <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Doughnut chart</h4>
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