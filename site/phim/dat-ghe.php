<style>
    .ticketing-select .form-control:disabled,
    .ticketing-select .form-control[readonly] {
        color: #12263f;
    }

    .flow-actions .ticketing-total-cart {
        display: none;
    }

    .blinker {
        -webkit-animation-name: blinker;
        -webkit-animation-duration: 1s;
        -webkit-animation-timing-function: linear;
        -webkit-animation-iteration-count: infinite;

        -moz-animation-name: blinker;
        -moz-animation-duration: 1s;
        -moz-animation-timing-function: linear;
        -moz-animation-iteration-count: infinite;

        animation-name: blinker;
        animation-duration: 1s;
        animation-timing-function: linear;
        animation-iteration-count: infinite;
    }

    .countdown-timer.blinker {
        color: red;
    }

    .ticketing-ticket-code {
        border: 1px dashed #ddd;
        text-align: center;
        padding: 15px 10px;
    }

    .ticketing-steps .ticketing-step {
        color: #95aac9;
        padding: 10px 0 5px 0;
        text-align: center;
    }

    .ticketing-steps .ticketing-step.active {
        color: inherit;
    }

    .ticketing-steps .ticketing-step i {
        font-size: 20px;
        display: block;
        line-height: 12px;
    }

    .ticketing-steps .ticketing-step span {
        font-size: 12px;
    }

    .ticketing-steps .ticketing-step:after {
        content: '';
        position: absolute;
        right: -6px;
        top: 10px;
        width: 0;
        height: 0;
        border-top: 15px solid transparent;
        border-bottom: 15px solid transparent;
        border-left: 15px solid #95aac9;
        z-index: 1
    }

    .ticketing-steps .ticketing-step>div:after {
        content: '';
        position: absolute;
        right: -5px;
        top: 10px;
        width: 0;
        height: 0;
        border-top: 15px solid transparent;
        border-bottom: 15px solid transparent;
        border-left: 15px solid #fff;
        -webkit-transition: 0.5s ease-in-out;
        -moz-transition: 0.5s ease-in-out;
        -o-transition: 0.5s ease-in-out;
        transition: 0.5s ease-in-out;
        z-index: 2
    }

    .ticketing-steps .ticketing-step:last-child:after {
        border: 0;
        display: none;
    }

    .ticketing-steps .ticketing-step:last-child>div:after {
        border: 0;
        display: none;
    }

    .ticketing-concession-type .concession-name {
        max-width: 300px;
        white-space: normal;
    }

    .seat-selection {
        margin: 20px 0;
    }

    .seat-selection>* {
        box-sizing: border-box;
        line-height: normal;
    }

    .seat-selection.seat-selection-wrapper {
        overflow: auto;
        -webkit-overflow-scrolling: touch;
    }

    .seat-selection .legend {
        text-align: center;
    }

    .seat-selection .legend span {
        width: 20px;
        height: 20px;
        display: block;
        float: left;
    }

    .seat-selection .legend span img {
        padding: 2px 0;
    }

    .seat-selection .legend p {
        float: left;
        margin: 0;
        font-size: 12px;
        padding: 3px 5px;
    }

    .seat-selection .legend div {
        display: inline-block;
        padding: 0 5px;
        margin-bottom: 10px;
        clear: both;
    }

    .seat-selection .legend div span {
        background-color: #dfdfdf;
        position: relative;
        border-radius: 2px;
    }

    .seat-selection .legend div span.taken {
        background: repeating-linear-gradient(45deg,
                rgba(153, 153, 153, 0.4),
                rgba(153, 153, 153, 0.4) 10px,
                rgba(153, 153, 153, 0.6) 10px,
                rgba(153, 153, 153, 0.6) 20px);
    }

    .seat-selection .legend div span.unavailable {
        background-image: url(../../img/seat-unavailable.6c1ab33c.png);
        background-repeat: no-repeat;
        background-position: 50%;
    }

    .seat-selection .legend div span.selected {
        background-color: #00b300;
        color: #fff;
        box-shadow: 0px 0px 11px #00b300;
    }

    .seat-selection .legend div span.available {
        background-color: #fad155;
    }

    .seat-selection .legend div span:after {
        position: absolute;
        top: 2px;
        left: 0;
        right: 0;
        text-align: center;
    }

    .seat-selection .legend div.current {
        display: none;
    }

    .seat-selection .legend div.current span {
        background: #fff;
        color: #00b300;
        outline: 1px solid #00b300;
        box-shadow: none;
    }

    .seat-selection .seats-wrapper-parent {
        width: 100%;
        overflow: auto;
    }

    .seat-selection .seats-wrapper {
        box-sizing: border-box;
        -webkit-overflow-scrolling: touch;
        display: table;
    }

    .seat-selection .seats-wrapper .seats-wrapper-row {
        display: table-row;
    }

    .seat-selection .front {
        display: block;
        background: #dfdfdf;
        padding: 5px;
        text-align: center;
        text-transform: uppercase;
        font-weight: bold;
        color: black;
        margin-bottom: 10px;
        margin-left: 38px;
    }

    .seat-selection .seats {
        text-align: center;
        position: relative;
        display: table-cell;
        vertical-align: top;
    }

    .seat-selection .seats.seats-map {
        width: 100%;
    }

    .seat-selection .seats .row-wrapper {
        text-align: left;
        display: inline-block;
    }

    .seat-selection .seats .row-spacer {
        height: 20px;
    }

    .seat-selection .seats ul.seat-row {
        list-style: none;
        margin: 0px;
        padding: 0px;
        white-space: nowrap;
        display: -webkit-box;
        display: -moz-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        justify-content: center;
    }

    .seat-selection .seats ul.seat-row li {
        display: inline-block;
        width: 25px;
        height: 25px;
        background: #dfdfdf;
        margin: 3px;
        cursor: pointer;
        position: relative;
        box-sizing: border-box;
        text-align: center;
        padding: 7px 0;
        vertical-align: middle;
        font-size: 11px;
        font-weight: bold;
        border-radius: 2px;
    }

    .seat-selection .seats ul.seat-row li img {
        padding-left: 3px;
    }

    .seat-selection .seats ul.seat-row li.available:hover {
        background: #b6b6b3;
    }

    .seat-selection .seats ul.seat-row li:not(.rowname) {
        text-indent: -9999px;
    }

    .seat-selection .seats ul.seat-row li.available:hover,
    .seat-selection .seats ul.seat-row li.selected {
        text-indent: 0;
    }

    .seat-selection .seats ul.seat-row li.rowname {
        cursor: default;
        background: #727575;
        margin-right: 30px;
        text-align: center;
        color: #fff;
        font-weight: bold;
        width: 30px;
    }

    .seat-selection .seats ul.seat-row li:last-child {
        margin-right: 0px !important;
    }

    .seat-selection .seats ul.seat-row li.spacer,
    .seat-selection .seats ul.seat-row li.empty {
        cursor: default;
        background: transparent;
    }

    .seat-selection .seats ul.seat-row li.platinum {
        background: #fad155;
    }

    .seat-selection .seats ul.seat-row li.platinum.blacken {
        cursor: not-allowed;
        background: #fff;
        outline: 1px solid #fad155;
    }

    .seat-selection .seats ul.seat-row li.attending {
        background-color: #3b5998 !important;
        text-align: center;
        line-height: 20px;
        font-size: 0.8em;
        color: #fff;
    }

    .seat-selection .seats ul.seat-row li.taken {
        cursor: not-allowed;
        color: #999;
        background: repeating-linear-gradient(45deg,
                rgba(153, 153, 153, 0.4),
                rgba(153, 153, 153, 0.4) 10px,
                rgba(153, 153, 153, 0.6) 10px,
                rgba(153, 153, 153, 0.6) 20px);
    }

    .seat-selection .seats ul.seat-row li.taken.blacken {
        cursor: not-allowed;
        background: #fff;
        outline: 1px solid #d61023;
    }

    .seat-selection .seats ul.seat-row li.taken[data-seat] {
        background: #dfdfdf;
        cursor: pointer;
        font-size: 1em;
    }

    .seat-selection .seats ul.seat-row li.wheel-chair

    /*.seat-selection .seats ul.seat-row li.couple-seat*/
        {
        background: #dfdfdf;
    }

    .seat-selection .seats ul.seat-row li.wheel-chair.blacken

    /*.seat-selection .seats ul.seat-row li.couple-seat.blacken*/
        {
        cursor: not-allowed;
        background: #fff;
        outline: 1px solid #dfdfdf;
    }

    .seat-selection .seats ul.seat-row li.selected {
        color: #fff;
        background-color: #00b300 !important;
        box-shadow: 0px 0px 11px #00b300;
    }

    .seat-selection .seats ul.seat-row li.blacken {
        cursor: not-allowed;
        background: #fff;
        outline: 1px solid #dfdfdf;
    }

    .seat-selection .seats ul.seat-row li.couple-seat,
    .seat-selection .seats ul.seat-row li.seat-group {
        margin-left: 0;
        margin-right: 0;
        width: 28px;
    }

    .seat-selection .seats ul.seat-row li.couple-seat.odd,
    .seat-selection .seats ul.seat-row li.seat-group.seat-odd {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
        margin-left: 3px;
    }

    .seat-selection .seats ul.seat-row li.couple-seat.even,
    .seat-selection .seats ul.seat-row li.seat-group.seat-even {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
        margin-right: 3px;
    }

    .seat-selection .seats ul.seat-row li.unavailable {
        cursor: not-allowed;
        background-image: url(../img/seat-unavailable.png);
        background-repeat: no-repeat;
        background-position: 50%;
    }

    .seat-selection .seats ul.seat-row li:after {
        position: absolute;
        top: 2px;
        left: 0;
        right: 0;
        text-align: center;
    }

    .seat-selection .seats .rear {
        clear: both;
        width: 100%;
        display: block;
        padding: 5px;
        text-align: center;
        text-transform: uppercase;
        color: white;
        margin-top: 10px;
    }

    .seat-selection.minesweeper .seats .pot-bomb {
        background: lightblue !important;
        box-shadow: none !important;
        text-align: center;
    }

    .seat-selection.minesweeper .seats .pot-bomb.wheel-chair:after

    /*.seat-selection.minesweeper .seats .pot-bomb.couple-seat:after*/
        {
        content: '' !important;
    }

    .seat-selection.minesweeper .seats .pot-bomb:after {
        content: '' !important;
    }

    .seat-selection.minesweeper .seats .pot-bomb.spacer {
        background: white !important;
    }

    .seat-selection.minesweeper .seats .pot-bomb.suspect {
        background: pink !important;
    }

    .seat-selection.minesweeper .seats .bomb.revealed {
        background: red !important;
    }

    .seating-modal .ec-loading {
        margin: 20px;
    }

    .seat-selection .legend div span.seat-area-2 {
        background-color: #d4b15f;
    }

    .seat-selection .legend div span.seat-area-3 {
        background-color: #3b5998;
    }

    .seat-selection .legend div span.seat-area-4 {
        background-color: #ae00cd;
    }

    .seat-selection .legend div span.seat-area-5 {
        background-color: #f8a7ba;
    }

    .seat-selection .seats ul.seat-row li.seat-area-2 {
        background-color: #d4b15f;
    }

    .seat-selection .seats ul.seat-row li.seat-area-3 {
        background-color: #3b5998;
    }

    .seat-selection .seats ul.seat-row li.seat-area-4 {
        background-color: #ae00cd;
    }

    .seat-selection .seats ul.seat-row li.seat-area-5 {
        background-color: #f8a7ba;
    }

    .seat-selection .seats ul.seat-row li.seat-area-2.taken {
        background: repeating-linear-gradient(45deg,
                rgba(212, 177, 95, 0.4),
                rgba(212, 177, 95, 0.4) 10px,
                rgba(212, 177, 95, 0.6) 10px,
                rgba(212, 177, 95, 0.6) 20px);
    }

    .seat-selection .seats ul.seat-row li.seat-area-3.taken {
        background: repeating-linear-gradient(45deg,
                rgba(59, 89, 152, 0.4),
                rgba(59, 89, 152, 0.4) 10px,
                rgba(59, 89, 152, 0.6) 10px,
                rgba(59, 89, 152, 0.6) 20px);
    }

    .seat-selection .seats ul.seat-row li.seat-area-4.taken {
        background: repeating-linear-gradient(45deg,
                rgba(174, 0, 205, 0.4),
                rgba(174, 0, 205, 0.4) 10px,
                rgba(174, 0, 205, 0.6) 10px,
                rgba(174, 0, 205, 0.6) 20px);
    }

    .seat-selection .seats ul.seat-row li.seat-area-5.taken {
        background: repeating-linear-gradient(45deg,
                rgba(248, 167, 186, 0.4),
                rgba(248, 167, 186, 0.4) 10px,
                rgba(248, 167, 186, 0.6) 10px,
                rgba(248, 167, 186, 0.6) 20px);
    }

    .seat-selection .seats ul.seat-row li.seat-size-1 {}

    .seat-selection .seats ul.seat-row li.seat-size-2 {
        width: 56px;
    }

    /****** CINESTAR - STARLIGHT - RIO *******/
    .seat-selection.seat-map-cinestar .seats ul.seat-row li.seat-area-3,
    .seat-selection.seat-map-rio .seats ul.seat-row li.seat-area-3,
    .seat-selection.seat-map-touch .seats ul.seat-row li.seat-area-3,
    .seat-selection.seat-map-starlight .seats ul.seat-row li.seat-area-3 {
        width: 56px;
    }

    @media (max-width: 767px) {
        .ticketing-content {
            padding-bottom: 60px;
        }

        .ticketing-content.has-sticky-header {
            padding-top: 120px;
        }

        .flow-actions .ticketing-total-cart {
            display: block;
            float: left;
            width: 50%;
            text-align: right;
            padding-right: 25px;
            border-right: 1px dashed #fff;
        }

        .flow-actions .ticketing-total-cart.estimated .ticketing-total-amount {
            display: block;
            font-size: 13px;
            line-height: 2px;
            text-decoration: line-through;
            opacity: 0.7;
        }

        .flow-actions .flow-continue {
            width: 50%;
            float: right;
            text-align: left;
            padding-left: 25px;
        }

        .sticky-button-bars.sticky,
        .sticky-footer-bars.sticky {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            z-index: 9999;
            margin: 0;
            padding: 10px;
            background-color: #edf2f9;
            border-top: 1px solid #e3ebf6;
        }

        .sticky-header-bars.sticky {
            position: fixed;
            z-index: 2;
            width: 100%;
            top: 0;
            left: 0;
            border-radius: 0;
            border-width: 0 0 1px 0;
        }

        .ticketing-concession-type .concession-price,
        .ticketing-ticket-type .ticket-price {
            display: none;
        }

        .seat-selection .seats-wrapper {
            display: block;
        }

        .seat-selection .seats.seats-row {
            z-index: 1;
        }

        .seat-selection .seats.seats-map {
            padding-left: 20px;
        }
    }

    /* iphone X */
    @media only screen and (min-device-width: 375px) and (max-device-height: 812px) and (-webkit-device-pixel-ratio: 3) {

        .sticky-button-bars.sticky,
        .sticky-footer-bars.sticky {
            padding: 10px 10px 25px 10px;
        }
    }

    /* iphone XR */
    @media only screen and (min-device-width : 414px) and (max-device-height : 896px) and (-webkit-device-pixel-ratio : 2) {

        .sticky-button-bars.sticky,
        .sticky-footer-bars.sticky {
            padding: 10px 10px 25px 10px;
        }
    }

    /* iphone XS */
    @media only screen and (min-device-width : 375px) and (max-device-height : 812px) and (-webkit-device-pixel-ratio : 3) {

        .sticky-button-bars.sticky,
        .sticky-footer-bars.sticky {
            padding: 10px 10px 25px 10px;
        }
    }

    /* iphone XS Max */
    @media only screen and (min-device-width : 414px) and (max-device-height : 896px) and (-webkit-device-pixel-ratio : 3) {

        .sticky-button-bars.sticky,
        .sticky-footer-bars.sticky {
            padding: 10px 10px 25px 10px;
        }
    }
</style>
<!-- Normal Breadcrumb Begin -->
<section class="normal-breadcrumb set-bg" data-setbg="<?= $CONTENT_URL ?>/assets/img/normal-breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="normal__breadcrumb__text">
                    <div class="breadcrumb-option">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="breadcrumb__links">
                                        <a href="#"> <h4 class="text-light"> Đặt ghế</h4></a>
                                        <a href="#" disabled readonly><h4 class="text-muted">Thanh toán</h4></a>
                                        <a href="#" disabled readonly><h4 class="text-muted">Thông tin vé</h4></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Normal Breadcrumb End -->
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

                    <input type="text" class="form-control w-75 m-auto text-center mb-lg-5" placeholder="Màn Hình" disabled>
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
                                            <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-odd">
                                                A17
                                            </li>
                                            <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-even">
                                                A16
                                            </li>
                                            <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-odd">
                                                A15
                                            </li>
                                            <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-even">
                                                A14
                                            </li>
                                            <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-odd">
                                                A13
                                            </li>
                                            <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-even">
                                                A12
                                            </li>
                                            <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-odd">
                                                A11
                                            </li>
                                            <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-even">
                                                A10
                                            </li>
                                            <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-odd">
                                                A9
                                            </li>
                                            <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-even">
                                                A8
                                            </li>
                                            <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-odd">
                                                A7
                                            </li>
                                            <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-even">
                                                A6
                                            </li>
                                            <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-odd">
                                                A5
                                            </li>
                                            <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-even">
                                                A4
                                            </li>
                                            <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-odd">
                                                A3
                                            </li>
                                            <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-even">
                                                A2
                                            </li>
                                            <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-odd">
                                                A1
                                            </li>
                                        </ul>
                                        <ul data-v-220afe6d="" class="seat-row">
                                            <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-odd">
                                                B17
                                            </li>
                                            <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-even">
                                                B16
                                            </li>
                                            <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-odd">
                                                B15
                                            </li>
                                            <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-even">
                                                B14
                                            </li>
                                            <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-odd">
                                                B13
                                            </li>
                                            <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-even">
                                                B12
                                            </li>
                                            <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-odd">
                                                B11
                                            </li>
                                            <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-even">
                                                B10
                                            </li>
                                            <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-odd">
                                                B9
                                            </li>
                                            <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-even">
                                                B8
                                            </li>
                                            <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-odd">
                                                B7
                                            </li>
                                            <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-even">
                                                B6
                                            </li>
                                            <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-odd">
                                                B5
                                            </li>
                                            <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-even">
                                                B4
                                            </li>
                                            <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-odd">
                                                B3
                                            </li>
                                            <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-even">
                                                B2
                                            </li>
                                            <li data-v-220afe6d="" class="available seat-area-1 seat-size-1 seat-odd">
                                                B1
                                            </li>
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
                                            <!-- <li data-v-220afe6d="" class="taken seat-area-2 seat-size-1 seat-odd">
                                                F11
                                            </li>
                                            <li data-v-220afe6d="" class="taken seat-area-2 seat-size-1 seat-even">
                                                F10
                                            </li>
                                            <li data-v-220afe6d="" class="taken seat-area-2 seat-size-1 seat-odd">
                                                F9
                                            </li>
                                            <li data-v-220afe6d="" class="taken seat-area-2 seat-size-1 seat-even">
                                                F8
                                            </li>
                                            <li data-v-220afe6d="" class="taken seat-area-2 seat-size-1 seat-odd">
                                                F7
                                            </li>
                                            <li data-v-220afe6d="" class="taken seat-area-2 seat-size-1 seat-even">
                                                F6
                                            </li> -->
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
                                            <!-- <li data-v-220afe6d="" class="taken seat-area-2 seat-size-1 seat-odd">
                                                G9
                                            </li>
                                            <li data-v-220afe6d="" class="taken seat-area-2 seat-size-1 seat-even">
                                                G8
                                            </li>
                                            <li data-v-220afe6d="" class="taken seat-area-2 seat-size-1 seat-odd">
                                                G7
                                            </li>
                                            <li data-v-220afe6d="" class="taken seat-area-2 seat-size-1 seat-even">
                                                G6
                                            </li>
                                            <li data-v-220afe6d="" class="taken seat-area-2 seat-size-1 seat-odd">
                                                G5
                                            </li> -->
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
                                            <!-- <li data-v-220afe6d="" class="taken seat-area-2 seat-size-1 seat-odd">
                                                I11
                                            </li>
                                            <li data-v-220afe6d="" class="taken seat-area-2 seat-size-1 seat-even">
                                                I10
                                            </li>
                                            <li data-v-220afe6d="" class="taken seat-area-2 seat-size-1 seat-odd">
                                                I9
                                            </li>
                                            <li data-v-220afe6d="" class="taken seat-area-2 seat-size-1 seat-even">
                                                I8
                                            </li>
                                            <li data-v-220afe6d="" class="taken seat-area-2 seat-size-1 seat-odd">
                                                I7
                                            </li>
                                            <li data-v-220afe6d="" class="taken seat-area-2 seat-size-1 seat-even">
                                                I6
                                            </li> -->
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
                                        <!-- <ul data-v-220afe6d="" class="seat-row">
                                            <li data-v-220afe6d="" class="spacer"></li>
                                            <li data-v-220afe6d="" class="spacer"></li>
                                            <li data-v-220afe6d="" class="spacer"></li>
                                            <li data-v-220afe6d="" class="taken seat-area-3 seat-size-1 seat-group seat-odd">
                                                L12
                                            </li>
                                            <li data-v-220afe6d="" class="taken seat-area-3 seat-size-1 seat-group seat-even">
                                                L11
                                            </li>
                                            <li data-v-220afe6d="" class="taken seat-area-3 seat-size-1 seat-group seat-odd">
                                                L10
                                            </li>
                                            <li data-v-220afe6d="" class="taken seat-area-3 seat-size-1 seat-group seat-even">
                                                L9
                                            </li>
                                            <li data-v-220afe6d="" class="taken seat-area-3 seat-size-1 seat-group seat-odd">
                                                L8
                                            </li>
                                            <li data-v-220afe6d="" class="taken seat-area-3 seat-size-1 seat-group seat-even">
                                                L7
                                            </li>
                                            <li data-v-220afe6d="" class="taken seat-area-3 seat-size-1 seat-group seat-odd">
                                                L6
                                            </li>
                                            <li data-v-220afe6d="" class="taken seat-area-3 seat-size-1 seat-group seat-even">
                                                L5
                                            </li>
                                            <li data-v-220afe6d="" class="taken seat-area-3 seat-size-1 seat-group seat-odd">
                                                L4
                                            </li>
                                            <li data-v-220afe6d="" class="taken seat-area-3 seat-size-1 seat-group seat-even">
                                                L3
                                            </li>
                                            <li data-v-220afe6d="" class="available seat-area-3 seat-size-1 seat-group seat-odd">
                                                L2
                                            </li>
                                            <li data-v-220afe6d="" class="available seat-area-3 seat-size-1 seat-group seat-even">
                                                L1
                                            </li>
                                            <li data-v-220afe6d="" class="spacer"></li>
                                            <li data-v-220afe6d="" class="spacer"></li>
                                        </ul> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-v-220afe6d="" class="legend mt-4">
                        <div data-v-220afe6d=""><span data-v-220afe6d="" class="seat-area-1"></span>
                            <p data-v-220afe6d="" class= "text-light" >Ghế thường</p>
                        </div>
                        <div data-v-220afe6d=""><span data-v-220afe6d="" class="seat-area-2"></span>
                            <p data-v-220afe6d="" class= "text-warning">Ghế VIP</p>
                        </div>
                        <!-- <div data-v-220afe6d=""><span data-v-220afe6d="" class="seat-area-3"></span>
                            <p data-v-220afe6d="">Ghế Couple</p>
                        </div> -->
                    </div>
                </div>
            </div>
        </div> <!----> <!---->
    </div>
</div>