<div class="container">
    <div class="container-fluid">
        <i class=" text-danger"><?= (isset($MESSAGE) && (strlen($MESSAGE) > 0)) ? $MESSAGE : "" ?></i>
        <div class="card">
            <div class="card-header card-header-primary">
                <h3 class="card-title p-2 text-warning">Quản Lý Diễn Viên</h3>
            </div>
            <div class="card-body">
                <div class="table">
                    <form class="form" action="./index.php?btn_actor" method="post" id="isert_form" enctype="multipart/form-data">
                        <div class='row mt-2'>
                            <!-- <div class="col-sm-4"> -->
                                <!-- <label for="id" class="fw-bold col-form-label text-white">Id</label> -->
                                <input type="hidden" class="form-control" style="background-color: #2A3038;" id="id" name="id" placeholder="Auto Number..." >                               
                            
                            <!-- </div> -->
                                <div class="col-sm-4">
                                    <label for="actor" class="fw-bold col-form-label text-white">Tên diễn viên</label>
                                    <input type="text" class="form-control" id="actor" name="actor" placeholder='Tên diễn viên...'>
                                    <span class="error text-danger"></span>
                                </div>
                                <div class="col-sm-4">
                                    <label for="director" class="fw-bold col-form-label text-white">Đạo diễn</label>
                                    <input type="text" class="form-control " id="director" name="director" placeholder='Đạo diễn...'>
                                    <span class="error text-danger"></span>
                                </div>
                                <div class="col-sm-4">
                                    <label for="producer" class="fw-bold col-form-label text-white">Nhà sản xuất</label>
                                    <input type="text" class="form-control" id="producer" name="producer" placeholder='Nhà sản xuất...'>
                                    <span class="error text-danger"></span>
                                </div>
                            </div> 
                        <div class='row mt-3'>
                        </div>
                        <br>
                        <div class="border-top">
                            <div class="card-body d-flex justify-content-end">
                                <input type="submit" class="btn btn-outline-warning p-3" name="insert_actor" value="Thêm mới">
                                <button type="reset" class="btn btn-outline-pinterest p-3 mx-xl-3" name="clear_form">Nhập lại</button>

                            </div>
                        </div>

                    </form>




                </div>

            </div>

        </div>
    </div>
</div>
<script>
    var form_insert = document.getElementById("isert_form");
    form_insert.addEventListener('submit', function(e) {
        var actor = document.getElementById('actor').value;
        var producer = document.getElementById("producer").value;
        var director = document.getElementById("director").value;
        var error = document.getElementsByClassName("error");
        var has_error = true;
        error[0].innerHTML = '';
        error[1].innerHTML = '';
        error[2].innerHTML = '';
        
        if (actor.trim() === "") {
            error[0].innerHTML = "không để trống";
            has_error = false;
        }
        if (producer.trim() === '' ) {
            error[2].innerHTML = 'không để trống';
            has_error = false;
        }
        if (director.trim() == "") {
            error[1].innerHTML = "không để trống";
            has_error = false;
        }
        
        if (has_error == false) {
            e.preventDefault();
        }
    });
</script>
