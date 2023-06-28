<div class="container" ">
        <div class="title">
            <h3>Tin tức</h3>
            <p>Trang chủ <i class="fa-solid fa-angles-right"></i> Tin tức</p>
            <div class="tips"></div>
        </div>
        <div class="f-container-new">
            <ul>
            <!--BASIC tin_tuc-->
                
                <li {tin_tuc.fix}>
                        <div class="img-tin-tuc">
                         <a href="{root_dir}{tin_tuc.name_seo}">
                         <img src="{_UPLOAD}{tin_tuc.icon}" alt="{tin_tuc.name}">
                            </a>
                        </div>
                        <a href="{root_dir}{tin_tuc.name_seo}">
                       
                        
                            <h4>{tin_tuc.name}</h4> 
                            <p>{tin_tuc.intro}</p>
                        </a>
                    
                        
                </li>


                <!--BASIC tin_tuc-->

               
            </ul>

            <div class="pagination">
                {divpage}
            </div>


        </div>
    </div>