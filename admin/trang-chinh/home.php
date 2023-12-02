<!-- container -->

<h2 class="text-center text-warning mb-4">TRANG CHỦ ADMIN</h2>
<div class="row">
  <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-9">
            <div class="d-flex align-items-center align-self-start">
              <h3 class="mb-0"><?= $count_movie ?></h3>
              <!-- <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p> -->
            </div>
          </div>
          <div class="col-3">
            <div class="icon icon-box-success ">
              <i class="bi bi-film"></i>
            </div>
          </div>
        </div>
        <h6 class="text-muted font-weight-normal">Tổng số phim</h6>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-9">
            <div class="d-flex align-items-center align-self-start">
              <h3 class="mb-0"><?= $count_categories ?></h3>
              <!-- <p class="text-success ml-2 mb-0 font-weight-medium">+11%</p> -->
            </div>
          </div>
          <div class="col-3">
            <div class="icon icon-box-success">
              <i class="mdi mdi-bookmark-outline"></i>
            </div>
          </div>
        </div>
        <h6 class="text-muted font-weight-normal">Tổng loại phim</h6>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-9">
            <div class="d-flex align-items-center align-self-start">
              <h3 class="mb-0">$12.34</h3>
              <!-- <p class="text-danger ml-2 mb-0 font-weight-medium">-2.4%</p> -->
            </div>
          </div>
          <div class="col-3">
            <div class="icon icon-box-success">
              <!-- <span class="mdi mdi-arrow-bottom-left icon-item"></span> -->
              <i class="bi bi-receipt-cutoff"></i>

            </div>
          </div>
        </div>
        <h6 class="text-muted font-weight-normal">Tổng đơn đặt hàng</h6>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-9">
            <div class="d-flex align-items-center align-self-start">
              <h3 class="mb-0"><?= $count_statistical?></h3>
              <!-- <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p> -->
            </div>
          </div>
          <div class="col-3">
            <div class="icon icon-box-success ">
              <i class="mdi mdi-forum text-"></i>
            </div>
          </div>
        </div>
        <h6 class="text-muted font-weight-normal">Tổng bình luận </h6>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-6 grid-margin">
    <div class="card">
      <div class="card-body">
        <h5>Doanh thu</h5>
        <div class="row">
          <div class="col-8 col-sm-12 col-xl-8 my-auto">
            <div class="d-flex d-sm-block d-md-flex align-items-center">
              <h2 class="mb-0">$32123</h2>
              <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p>
            </div>
            <h6 class="text-muted font-weight-normal">11.38% Since last month</h6>
          </div>
          <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
            <i class="bi bi-cash-coin icon-lg text-success ml-auto"></i>
            <!-- <i class="icon-lg mdi mdi-wallet-travel text-danger ml-auto"></i> -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 grid-margin">
    <div class="card">
      <div class="card-body">
        <h5>Khách hàng</h5>
        <div class="row">
          <div class="col-8 col-sm-12 col-xl-8 my-auto">
            <div class="d-flex d-sm-block d-md-flex align-items-center">
              <h2 class="mb-0"><?= $count_user ?></h2>
              <!-- <p class="text-success ml-2 mb-0 font-weight-medium">+8.3%</p> -->
            </div>
            <!-- <h6 class="text-muted font-weight-normal"> 9.61% Since last month</h6> -->
          </div>
          <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
            <i class="bi bi-person-circle icon-lg ml-auto text-success"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>Purchase</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">$2039</h2>
                          <p class="text-danger ml-2 mb-0 font-weight-medium">-2.1% </p>
                        </div>
                        <h6 class="text-muted font-weight-normal">2.27% Since last month</h6>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-monitor text-success ml-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->
</div>