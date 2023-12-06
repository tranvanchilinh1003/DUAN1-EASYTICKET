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

  <div class="row">
    <div class="col-lg-6 grid-margin stretch-card">
      <!-- <div class="card"> -->
        <div class="graph">
          <div class="chart-legend">

          </div>
          <div class="chart bg-gray-dark">
            <canvas id="myChart"></canvas>
          <!-- </div> -->
        </div>
      </div>
    </div>
  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<script>
  var ctx = $('#myChart');

  ctx.height(500);
  ctx.width(550);

  var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: [<?php foreach($items as $item){ echo "['$item[type_name]', $item[so_luong]], "; } ?>],
      datasets: [{

        label: 'Biểu Đồ Loại',
        data: [<?php foreach($items as $item){ echo  ($item['so_luong'] .","); } ?>],
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)'
        ],
        borderColor: [
          'rgba(255,99,132,1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)'
        ],
        borderWidth: 2
      }]
    },
    maintainAspectRatio: false,
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
    }
  });
</script>