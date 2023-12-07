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
                        $itemA = seat_a();
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
                        $itemB = seat_b();
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
                        <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-odd">
                          C17
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-even">
                          C16
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-odd">
                          C15
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-even">
                          C14
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-odd">
                          C13
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-even">
                          C12
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-odd">
                          C11
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-even">
                          C10
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-odd">
                          C9
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-even">
                          C8
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-odd">
                          C7
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-even">
                          C6
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-odd">
                          C5
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-even">
                          C4
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-odd">
                          C3
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-even">
                          C2
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-odd">
                          C1
                        </li>
                      </ul>
                      <ul data-v-220afe6d="" class="seat-row">
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-odd">
                          D17
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-even">
                          D16
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-odd">
                          D15
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-even">
                          D14
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-odd">
                          D13
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-even">
                          D12
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-odd">
                          D11
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-even">
                          D10
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-odd">
                          D9
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-even">
                          D8
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-odd">
                          D7
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-even">
                          D6
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-odd">
                          D5
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-even">
                          D4
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-odd">
                          D3
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-even">
                          D2
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-odd">
                          D1
                        </li>
                      </ul>
                      <ul data-v-220afe6d="" class="seat-row">
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-odd">
                          E17
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-even">
                          E16
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-odd">
                          E15
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-even">
                          E14
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-odd">
                          E13
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-even">
                          E12
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-odd">
                          E11
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-odd">
                          E10
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-odd">
                          E9
                        </li>
                        <!-- <li data-v-220afe6d="" class="taken seat-area-2 seat-size-1 seat-even">
                                                E10
                                            </li>
                                            <li data-v-220afe6d="" class="taken seat-area-2 seat-size-1 seat-odd">
                                                E9
                                            </li> -->
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-even">
                          E8
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-odd">
                          E7
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-even">
                          E6
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-odd">
                          E5
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-even">
                          E4
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-odd">
                          E3
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-even">
                          E2
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-odd">
                          E1
                        </li>
                      </ul>
                      <ul data-v-220afe6d="" class="seat-row">
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-odd">
                          F15
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-even">
                          F14
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-odd">
                          F13
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-even">
                          F12
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-even">
                          F11
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-even">
                          F10
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-even">
                          F9
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-even">
                          F8
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-even">
                          F7
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-even">
                          F6
                        </li>

                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-odd">
                          F5
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-even">
                          F4
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-odd">
                          F3
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-even">
                          F2
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-odd">
                          F1
                        </li>
                        <li data-v-220afe6d="" class="spacer"></li>
                        <li data-v-220afe6d="" class="spacer"></li>
                      </ul>
                      <ul data-v-220afe6d="" class="seat-row">
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-odd">
                          G15
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-even">
                          G14
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-odd">
                          G13
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-even">
                          G12
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-odd">
                          G11
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-even">
                          G10
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-even">
                          G9
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-even">
                          G8
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-even">
                          G7
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-even">
                          G6
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-even">
                          G5
                        </li>

                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-even">
                          G4
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-odd">
                          G3
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-even">
                          G2
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-odd">
                          G1
                        </li>
                        <li data-v-220afe6d="" class="spacer"></li>
                        <li data-v-220afe6d="" class="spacer"></li>
                      </ul>
                      <ul data-v-220afe6d="" class="seat-row">
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-odd">
                          H15
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-even">
                          H14
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-odd">
                          H13
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-even">
                          H12
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-even">
                          H11
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-even">
                          H10
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-even">
                          H9
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-even">
                          H8
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-even">
                          H7
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-even">
                          H6
                        </li>
                        <!-- <li data-v-220afe6d="" class="taken seat-area-2 seat-size-1 seat-odd">
                                                H11
                                            </li>
                                            <li data-v-220afe6d="" class="taken seat-area-2 seat-size-1 seat-even">
                                                H10
                                            </li>
                                            <li data-v-220afe6d="" class="taken seat-area-2 seat-size-1 seat-odd">
                                                H9
                                            </li>
                                            <li data-v-220afe6d="" class="taken seat-area-2 seat-size-1 seat-even">
                                                H8
                                            </li>
                                            <li data-v-220afe6d="" class="taken seat-area-2 seat-size-1 seat-odd">
                                                H7
                                            </li>
                                            <li data-v-220afe6d="" class="taken seat-area-2 seat-size-1 seat-even">
                                                H6
                                            </li> -->
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-odd">
                          H5
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-even">
                          H4
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-odd">
                          H3
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-even">
                          H2
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-odd">
                          H1
                        </li>
                        <li data-v-220afe6d="" class="spacer"></li>
                        <li data-v-220afe6d="" class="spacer"></li>
                      </ul>
                      <ul data-v-220afe6d="" class="seat-row">
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-odd">
                          I15
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-even">
                          I14
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-odd">
                          I13
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-even">
                          I12
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-even">
                          I11
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-even">
                          I10
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-even">
                          I9
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-even">
                          I8
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-even">
                          I7
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-even">
                          I6
                        </li>

                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-odd">
                          I5
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-even">
                          I4
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-odd">
                          I3
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-even">
                          I2
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-odd">
                          I1
                        </li>
                        <li data-v-220afe6d="" class="spacer"></li>
                        <li data-v-220afe6d="" class="spacer"></li>
                      </ul>
                      <ul data-v-220afe6d="" class="seat-row">
                        <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-odd">
                          J15
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-odd">
                          J14
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-odd">
                          J13
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-odd">
                          J12
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-odd">
                          J11
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-odd">
                          J10
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-odd">
                          J9
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-odd">
                          J8
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-odd">
                          J7
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-odd">
                          J6
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-odd">
                          J5
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-odd">
                          J4
                        </li>
                        <!-- <li data-v-220afe6d="" class="available seat-area-2 seat-size-1 seat-even">
                                                J10
                                            </li>
                                            <li data-v-220afe6d="" class="taken seat-area-2 seat-size-1 seat-odd">
                                                J9
                                            </li>
                                            <li data-v-220afe6d="" class="taken seat-area-2 seat-size-1 seat-even">
                                                J8
                                            </li>
                                            <li data-v-220afe6d="" class="taken seat-area-2 seat-size-1 seat-odd">
                                                J7
                                            </li>
                                            <li data-v-220afe6d="" class="taken seat-area-2 seat-size-1 seat-even">
                                                J6
                                            </li> -->
                        <!-- <li data-v-220afe6d="" class="taken seat-area-2 seat-size-1 seat-odd">
                                                J5
                                            </li>
                                            <li data-v-220afe6d="" class="taken seat-area-2 seat-size-1 seat-even">
                                                J4
                                            </li> -->
                        <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-odd">
                          J3
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-odd">
                          J2
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-odd">
                          J1
                        </li>
                        <li data-v-220afe6d="" class="spacer"></li>
                        <li data-v-220afe6d="" class="spacer"></li>
                      </ul>
                      <ul data-v-220afe6d="" class="seat-row">
                        <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-odd">
                          K15
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-odd">
                          K14
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-odd">
                          K13
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-odd">
                          K12
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-odd">
                          K11
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-odd">
                          K10
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-odd">
                          K9
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-odd">
                          K8
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-odd">
                          K7
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-odd">
                          K6
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-odd">
                          K5
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-odd">
                          K4
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-odd">
                          K3
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-odd">
                          K2
                        </li>
                        <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-odd">
                          K1
                        </li>
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