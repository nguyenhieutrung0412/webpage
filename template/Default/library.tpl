<div class="container">
     <div class="title">
                <h3>Library</h3>
                <p>Trang chủ <i class="fa-solid fa-angles-right"></i> library</p>
                <div class="tips"></div>
            </div>
     <div class="img-library">
           <div class="gallery">
            <ul id="lightgallery" class="list-unstyled row">
            <!--BASIC gl-->
                <li {gl.fix} data-responsive="{_UPLOAD}{gl.image} 375, {_UPLOAD}{gl.image} 480, {_UPLOAD}{gl.image} 800" data-src="{_UPLOAD}{gl.image}" data-sub-html="<h4>{gl.name}</h4><p>{gl.intro}</p>">
                    <a href="">
                        <img class="img-responsive" src="{_UPLOAD}{gl.image}">
                        <h3>{gl.name}</h3>
                    </a>
                    
                </li>
               <!--BASIC gl-->
                
            </ul>
            <div class="pagination">
                {divpage}
            </div>
        </div>
     </div>
        

    
</div>