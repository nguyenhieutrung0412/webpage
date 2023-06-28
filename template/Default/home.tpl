    <div class="container container-home">
        <div class="f-container-home">
            <div class="f-left">
                {master.intro}
                <div class="f-function">
                    <a href="{root_dir}gioi-thieu" data-hover="Xem thêm">Xem thêm</a>
                </div>
            </div>
            <div class="f-right">
                <img src="{_UPLOAD}{master.icon}" alt="{master.about}">
            </div>
        </div>
        <div class="s-container-home">
            <h4>DỊCH VỤ TIÊU BIỂU</h4>
            
            <div class="selection-service">
                <div class="item">
                    <ul id="content-slider" class="content-slider">
                    <!--BASIC slider-->
                        <li>
                            <a href="{slider.name_seo}" ><img src="{_UPLOAD}{slider.icon}" alt="{slider.name}"> </a>
                        </li>
                    <!--BASIC slider-->
                    </ul>
                </div>

            </div>
        </div>
        <div class="t-container-home">
            <div class="left-t-container-home">
                <img src="{_UPLOAD}{master.image}" alt="{master.about2}">
               
            </div>
            <div class="right-t-container-home">
                {master.content}
            </div>
        </div>
        <div class="hotline-container-home">
            <div class="img-background-hotline">
            </div>
            <div class="content-hotline">
                <h3>Hãy liên hệ ngay với chúng tôi</h3>
                <p> Liên hệ ngay với chúng tôi để được tư vấn miễn phí và báo giá về các dịch vụ vận chuyển quốc tế và khai
                báo thủ tục Hải quan tại <span> LogisViet </span></p>
                <a href="">Điện thoại: {master.hotline} </a>
            </div>
             <div class="content-img">
             <img src="images/tu-van-trang-chu-1.png" alt="tư vấn viên">
             </div>
        </div>
        
        <div class="th-container-home">
            <img src="images/DV_KVPPHH.png" alt="">
            <div class="left-th-container-home">
                <h3>GỬI YÊU CẦU ĐỂ NHẬN SỰ TRỢ GIÚP</h3>
                <p>Thông tin của quý khách sẽ được công ty chúng tôi lưu trữ, và không tiết lộ thông tin ra bên ngoài.Xin cảm ơn</p>

                <form name="frmContact" id="frmContact" method="post" onsubmit="return Contact('lien-he','add','frmContact',1)" enctype="multipart/form-data">
                    <input type="text" name="txt_name" id="name" maxlength="50" placeholder="Nhập tên" required>
                    <input type="email" name="email" id="email" minlength =10 maxlength="50" placeholder="Nhập email" required>
                    <input type="tel" name="phone" id="phone" minlength =10 maxlength="10" placeholder="Nhập số điện thoại" required>
                    <input type="text" name="service" id="service" placeholder="Nhập dịch vụ muốn vận chuyển">
                    <textarea name="message" id="message"  cols="40"  rows="5" placeholder="Nhập tin nhắn muốn gửi" required></textarea>
                    <input type="submit" name="submit" id="submit" value="Gửi yêu cầu">
                </form>
            </div>

        </div>
    </div>