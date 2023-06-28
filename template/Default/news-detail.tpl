<div class="container">
        <div class="title">
            <h3>{detail.name}</h3>
            <p>Trang chủ <i class="fa-solid fa-angles-right"></i> Tin tức</p>
            <div class="tips"></div>
        </div>
        <div class="f-container-new-detail">
            <h2></h2>
            {detail.content}
            
        </div>
        <div class="l-container-new-detail">
            <h4>Tin tức liên quan</h4>
            <ul>
            <!--BASIC tin_tuc_khac-->
                <li {tin_tuc_khac.fix}>
                    <a href="{root_dir}{tin_tuc_khac.name_seo}"><img src="{_UPLOAD}{tin_tuc_khac.icon}" alt=""></a>
                    <div class="content">
                        <a href="{root_dir}{tin_tuc_khac.name_seo}">
                            <h4>{tin_tuc_khac.name}</h4>
                        </a>
                        <a href="{root_dir}{tin_tuc_khac.name_seo}">
                            <p>{tin_tuc_khac.intro}</p>
                        </a>
                    </div>
                </li>
            <!--BASIC tin_tuc_khac-->
               
               
              
            </ul>
        </div>
    </div>