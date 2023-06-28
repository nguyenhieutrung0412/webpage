<div class="container">
    
    <div class="f-container-dvdetail">
  
        <div class="title">
                    <h3>{detail.name}</h3>
                    <p>Trang chủ <i class="fa-solid fa-angles-right"></i> Dịch vụ</p>
                    <div class="tips"></div>
        </div>
        {detail.content}
   
          <div class="online-dvdetail">
            <a href="facebook.com" class="fb"><i class="fa-brands fa-facebook"></i></a>
            <a href="twitter.com" class="tw"><i class="fa-brands fa-twitter"></i></a>
            <a href="youtube.com" class="yt"><i class="fa-brands fa-youtube"></i></a>
          </div>
    </div>
     <div class="s-container-dvdetail">
        <h3>Dịch vụ </h3>
        <ul>
        <!--BASIC dvk-->
              <li><a href="{root_dir}{dvk.name_seo}" title="{dvk.name}">{dvk.name}</a></li>
        <!--BASIC dvk-->
        </ul>
     </div>
    <div class="l-container-dvdetail">
    <h4>Để lại liên hệ cho chúng tôi</h4>
    <span>Để được tư vấn cũng như thắc mắc của khách hàng hãy liên hẹ với chúng tôi. Những trường gắn (*) là bắt buộc </span>
        <form name="frmContact" id="frmContact" method="post" onsubmit="return Contact('lien-he','add','frmContact',1)" enctype="multipart/form-data">
                    <div class="form-group">
                       
                        <input type="text" name="txt_name" id="name-contact" maxlength="50" class="form-input" placeholder="Họ và tên" required>
                    </div>
                    <div class="form-group">                
                        <input type="tel" name="txt_phone" id="phone-contact" maxlength="10" class="form-input" placeholder="Nhập số điện thoại" required>
                    </div>
                    <div class="form-group">
                     
                        <input type="email" name="txt_email" id="email-contact" maxlength="50" class="form-input" placeholder="Nhập email" required>
                    </div>

                    <div class="form-group">
     
                        <textarea name="txt_message" id="message-contact" cols="30" rows="10" class="form-input" placeholder="Nội dung lời nhắn" required></textarea >
                    </div>

                    <button type="submit" data-hover="Gửi yêu cầu" id="btn-submit-contact" class="button-submit">Gửi yêu cầu</button>


                </form>
    </div>
</div>