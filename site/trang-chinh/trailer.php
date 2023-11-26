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
                     <form method="POST" action="./index.php?trailer" id="comment-form" name="comment-form" class="comment-form">
                         <textarea placeholder="Bình luận của bạn" name="message" id="message"></textarea> <span class="error text-danger"></span><br>
                         <button type="submit"><i class="fa fa-location-arrow" name="trailer"></i>ĐĂNG</button>
                     </form>
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