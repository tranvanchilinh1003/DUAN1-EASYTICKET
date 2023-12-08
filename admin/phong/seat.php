<link rel="stylesheet" href="<?= $ADMIN_URL ?>/assets/css/style_seat.css">
<style>
  .seats {
    display: flex;
    flex-direction: column;
    gap: 10px;
  }

  .row {
    display: flex;
    gap: 10px;
  }

  .seat {
    width: 40px;
    height: 40px;
    background-color: #ccc;
    cursor: pointer;
  }

  .seat.selected {
    background-color: #4CAF50;
  }

  .total {
    margin-top: 20px;
  }

  .checkout-button {
    margin-top: 20px;
    padding: 10px 20px;
    font-size: 16px;
    background-color: #4CAF50;
    color: white;
    border: none;
    cursor: pointer;
  }

  .checkout-button:hover {
    background-color: #45a049;
  }

  .checkout-button:active {
    background-color: #3e8e41;
  }
</style>

<body>
  <h3 class="card-title text-warning">Quản Lý Ghế Xem Phim</h3>
  <input type="text" readonly disabled class="form-control  text-center py-5 px-2" style="background-color: #2A3038 ;" name="" id="" placeholder="Màn Hình Chiếu">
  <div data-v-220afe6d="" class="alert-heading col-12 col-lg-8 d-md-inline ">
    <div data-v-220afe6d="">
      <div data-v-220afe6d="" id="ticketing-step-0">
        <div data-v-220afe6d="" class="ticketing-content">
          <div data-v-220afe6d="" class="seat-selection ">
            <div data-v-220afe6d="" class="legend">
              <div data-v-220afe6d=""><span data-v-220afe6d="" class="selected"></span>
                <p data-v-220afe6d="">Ghế bạn chọn</p>
              </div>
              <div data-v-220afe6d=""><span data-v-220afe6d="" class="unavailable"></span>
                <p data-v-220afe6d="">Không thể chọn</p>
              </div>
              <div data-v-220afe6d=""><span data-v-220afe6d="" class="seat-area-1 taken"></span>
                <p data-v-220afe6d="">Đã chọn</p>
              </div>
            </div>

            <!-- <input type="text" class="form-control w-75 m-auto text-center mb-lg-5" placeholder="Màn Hình" disabled> -->
            <div data-v-220afe6d="" class="seats-wrapper-parent">
              <div data-v-220afe6d="" class="seats-wrapper ">
                <div data-v-220afe6d="" class="seats-wrapper-row ">
                  <div data-v-220afe6d="" class="seats seats-row">
                    <div data-v-220afe6d="" class="row-wrapper popover-body">
                      <ul data-v-220afe6d="" class="seat-row">
                        <li data-v-220afe6d="" class="rowname wide">A</li>
                      </ul>
                      <ul data-v-220afe6d="" class="seat-row">
                        <li data-v-220afe6d="" class="rowname wide">B</li>
                      </ul>
                      <ul data-v-220afe6d="" class="seat-row">
                        <li data-v-220afe6d="" class="rowname wide">C</li>
                      </ul>
                      <ul data-v-220afe6d="" class="seat-row">
                        <li data-v-220afe6d="" class="rowname wide">D</li>
                      </ul>
                      <ul data-v-220afe6d="" class="seat-row">
                        <li data-v-220afe6d="" class="rowname wide">E</li>
                      </ul>
                      <ul data-v-220afe6d="" class="seat-row">
                        <li data-v-220afe6d="" class="rowname wide">F</li>
                      </ul>
                      <ul data-v-220afe6d="" class="seat-row">
                        <li data-v-220afe6d="" class="rowname wide">G</li>
                      </ul>
                      <ul data-v-220afe6d="" class="seat-row">
                        <li data-v-220afe6d="" class="rowname wide">H</li>
                      </ul>
                      <ul data-v-220afe6d="" class="seat-row">
                        <li data-v-220afe6d="" class="rowname wide">I</li>
                      </ul>
                      <ul data-v-220afe6d="" class="seat-row">
                        <li data-v-220afe6d="" class="rowname wide">J</li>
                      </ul>
                      <ul data-v-220afe6d="" class="seat-row">
                        <li data-v-220afe6d="" class="rowname wide">K</li>
                      </ul>
                      <!-- <ul data-v-220afe6d="" class="seat-row">
                                            <li data-v-220afe6d="" class="rowname wide">L</li>
                                        </ul> -->
                    </div>
                  </div>
                  <div data-v-220afe6d="" class="seats seats-map">
                    <div data-v-220afe6d="" class="row-wrapper">
                      <ul data-v-220afe6d="" class="seat-row">
                        <?php
                        $itemA = seat_a($id);
                        foreach ($itemA as $A) {
                        ?>
                          <li data-v-220afe6d="" name="seat_number" class="available seat-area-1 seat-size-1 seat-odd">
                        <a href="#" class="text-primary"><?= $A['seat_number']; ?></a>    

                          </li>
                        <?php
                        }
                        ?>
                      </ul>
                      <ul data-v-220afe6d="" class="seat-row">
                      <?php
                        $itemB = seat_b($id);
                        foreach ($itemB as $B) {
                        ?>
                          <li data-v-220afe6d="" name="seat_number" class="available seat-area-1 seat-size-1 seat-odd">
                        <a href="" class="text-primary"><?= $B['seat_number']; ?></a>    

                          </li>
                        <?php
                        }
                        ?>
                      
                      </ul>
                      <ul data-v-220afe6d="" class="seat-row">
                      <?php
                        $itemC = seat_c($id);
                        foreach ($itemC as $C) {
                        ?>
                          <li data-v-220afe6d="" name="seat_number" class="available seat-area-1 seat-size-1 seat-odd">
                        <a href="" class="text-primary"><?= $C['seat_number']; ?></a>    

                          </li>
                        <?php
                        }
                        ?>
                      
                      </ul>
                      <ul data-v-220afe6d="" class="seat-row">
                      <?php
                        $itemD = seat_d($id);
                        foreach ($itemD as $D) {
                        ?>
                          <li data-v-220afe6d="" name="seat_number" class="available seat-area-2 seat-size-1 seat-odd">
                        <a href="" class="text-primary"><?= $D['seat_number']; ?></a>    

                          </li>
                        <?php
                        }
                        ?>
                      </ul>
                      <ul data-v-220afe6d="" class="seat-row">
                      <?php
                        $itemE = seat_e($id);
                        foreach ($itemE as $E) {
                        ?>
                          <li data-v-220afe6d="" name="seat_number" class="available seat-area-2 seat-size-1 seat-odd">
                        <a href="" class="text-primary"><?= $E['seat_number']; ?></a>    

                          </li>
                        <?php
                        }
                        ?>
                      </ul>
                      <ul data-v-220afe6d="" class="seat-row">
                      <?php
                        $itemF = seat_f($id);
                        foreach ($itemF as $F) {
                        ?>
                          <li data-v-220afe6d="" name="seat_number" class="available seat-area-2 seat-size-1 seat-odd">
                        <a href="" class="text-primary"><?= $F['seat_number']; ?></a>    

                          </li>
                        <?php
                        }
                        ?>
                        <li data-v-220afe6d="" class="spacer"></li>
                        <li data-v-220afe6d="" class="spacer"></li>
                      </ul>
                      <ul data-v-220afe6d="" class="seat-row">
                      <?php
                        $itemG = seat_g($id);
                        foreach ($itemG as $G) {
                        ?>
                          <li data-v-220afe6d="" name="seat_number" class="available seat-area-2 seat-size-1 seat-odd">
                        <a href="" class="text-primary"><?= $G['seat_number']; ?></a>    

                          </li>
                        <?php
                        }
                        ?>
                        <li data-v-220afe6d="" class="spacer"></li>
                        <li data-v-220afe6d="" class="spacer"></li>
                      </ul>
                      <ul data-v-220afe6d="" class="seat-row">
                      <?php
                        $itemH = seat_h($id);
                        foreach ($itemH as $H) {
                        ?>
                          <li data-v-220afe6d="" name="seat_number" class="available seat-area-2 seat-size-1 seat-odd">
                        <a href="" class="text-primary"><?= $H['seat_number']; ?></a>    

                          </li>
                        <?php
                        }
                        ?>
                        <li data-v-220afe6d="" class="spacer"></li>
                        <li data-v-220afe6d="" class="spacer"></li>
                      </ul>
                      <ul data-v-220afe6d="" class="seat-row">
                      <?php
                        $itemI = seat_i($id);
                        foreach ($itemI as $I) {
                        ?>
                          <li data-v-220afe6d="" name="seat_number" class="available seat-area-2 seat-size-1 seat-odd">
                        <a href="" class="text-primary"><?= $I['seat_number']; ?></a>    

                          </li>
                        <?php
                        }
                        ?>
                        <li data-v-220afe6d="" class="spacer"></li>
                        <li data-v-220afe6d="" class="spacer"></li>
                      </ul>
                      <ul data-v-220afe6d="" class="seat-row">
                      <?php
                        $itemJ = seat_j($id);
                        foreach ($itemJ as $J) {
                        ?>
                          <li data-v-220afe6d="" name="seat_number" class="available seat-area-1 seat-size-1 seat-odd">
                        <a href="" class="text-primary"><?= $J['seat_number']; ?></a>    

                          </li>
                        <?php
                        }
                        ?>
                        <li data-v-220afe6d="" class="spacer"></li>
                        <li data-v-220afe6d="" class="spacer"></li>
                      </ul>
                      <ul data-v-220afe6d="" class="seat-row">
                      <?php
                        $itemK = seat_k($id);
                        foreach ($itemK as $K) {
                        ?>
                          <li data-v-220afe6d="" name="seat_number" class="available seat-area-1 seat-size-1 seat-odd">
                        <a href="" class="text-primary"><?= $K['seat_number']; ?></a>    

                          </li>
                        <?php
                        }
                        ?>
                        <li data-v-220afe6d="" class="spacer"></li>
                        <li data-v-220afe6d="" class="spacer"></li>
                      </ul>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div data-v-220afe6d="" class="legend mt-4">
              <div data-v-220afe6d=""><span data-v-220afe6d="" class="seat-area-1"></span>
                <p data-v-220afe6d="" class="text-light">Ghế thường</p>
              </div>
              <div data-v-220afe6d=""><span data-v-220afe6d="" class="seat-area-2"></span>
                <p data-v-220afe6d="" class="text-warning">Ghế VIP</p>
              </div>
            </div>
          </div>
        </div>
      </div> <!----> <!---->
    </div>
  </div>