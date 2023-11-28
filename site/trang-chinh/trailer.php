 <!-- <style>
     .rate {

         border-bottom-right-radius: 12px;
         border-bottom-left-radius: 12px;

     }



     .rating {
         display: flex;
         flex-direction: row-reverse;
         justify-content: center
     }

     .rating>input {
         display: none
     }

     .rating>label {
         position: relative;
         width: 1em;
         font-size: 30px;
         font-weight: 300;
         color: #FFD600;
         cursor: pointer
     }

     .rating>label::before {
         content: "\2605";
         position: absolute;
         opacity: 0
     }

     .rating>label:hover:before,
     .rating>label:hover~label:before {
         opacity: 1 !important
     }

     .rating>input:checked~label:before {
         opacity: 1
     }

     .rating:hover>input:checked~label:before {
         opacity: 0.4
     }


     .buttons {
         top: 36px;
         position: relative;
     }


     .rating-submit {
         border-radius: 15px;
         color: #fff;
         height: 49px;
     }


     .rating-submit:hover {

         color: #fff;
     }
 </style> -->


 <!-- Anime Section Begin -->
 <section class="anime-details spad">
     <div class="container">
         <div class="row">
             <div class="col-lg-12">
                 <div class="anime__video__player">
                     <iframe width="100%" height="600" src="https://www.youtube.com/embed/0bJXtdfb7hg?si=OIDcGq6HOFVRZ3vk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-lg-8">
                 <div class="anime__details__review">
                     <div class="section-title">
                         <h5>BÌNH LUẬN</h5>
                     </div>
                     <div class="anime__review__item">
                         <div class="anime__review__item__pic">
                             <img src="<?= $CONTENT_URL ?>/assets/img/anime/review-1.jpg" alt="">
                         </div>
                         <div class="anime__review__item__text">
                             <h6>Chris Curry - <span>1 Hour ago</span></h6>
                             <p>?</p>
                         </div>
                     </div>
                 </div>
                 <div class="anime__details__form">
                     <div class="section-title">
                         <h5>BÌNH LUẬN CỦA BẠN</h5>
                     </div>
                     <?php
                        if (!isset($_SESSION['username'])) {
                            echo '<h5 class="text-center"><i class="text-danger">Đăng nhập để bình luận về phim này</i></h5>';
                            echo '<div class="d-flex justify-content-center mt-4">';
                            echo '<a href="../form/login_xuly.php"><button type="submit" class="btn btn-danger d-flex justify-content-center" style="background: #e53637;">ĐĂNG NHẬP</button></a>';
                            echo '</div>';
                        } else {
                        ?>
                         <form method="POST" action="./index.php?trailer" id="comment-form" name="comment-form" class="comment-form">
                             <div class="rating"> <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label> <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label> <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label> <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label> <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
                             </div>
                             <textarea placeholder="Bình luận của bạn" name="message" id="message"></textarea> <span class="error text-danger"></span><br>
                             <button type="submit"><i class="fa fa-location-arrow" id="trailer" name="trailer"></i>ĐĂNG</button>
                         </form>
                     <?php
                        } ?>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- Anime Section End -->
 <script>
     var form_message = document.getElementById("comment-form");
     form_message.addEventListener('submit', function(event) {
         var message = document.getElementById("message");
         var error = document.getElementsByClassName("error");
         var has_error = true;
         error[0].innerHTML = '';
         if (message.value.trim() === "") {
             error[0].innerHTML = 'Vui lòng nhập bình luận của bạn.';
             has_error = false;
         }
         if (has_error == false) {
             event.preventDefault();
         }
     });
 </script>