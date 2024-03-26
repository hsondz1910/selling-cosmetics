
<footer class="Footer">

  <style>
    .wrapper {
    display: inline-flex;
    list-style: none;
    margin-left: 10%;
    transition: 0.3s ease-in-out;
    margin-top: -8  0%;
  }
  
  .wrapper .icon {
    position: relative;
    background: #2b5acf;
    border-radius: 50%;
    padding: 15px;
    margin: 10px;
    width: 10px;
    height: 10px;
    font-size: 13px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
    cursor: pointer;
    transition: all 0.2s cubic-bezier(0.68, -0.55, 0.265, 1.55);
  }
  
  .wrapper .tooltip {
    position: absolute;
    top: 0;
    font-size: 14px;
    background: #ffffff;
    color: #ffffff;
    padding: 5px 8px;
    border-radius: 5px;
    box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
    opacity: 0;
    pointer-events: none;
    transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
  }
  
  .wrapper .tooltip::before {
    position: absolute;
    content: "";
    height: 8px;
    width: 8px;
    background: #ffffff;
    bottom: -3px;
    left: 50%;
    transform: translate(-50%) rotate(45deg);
    transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
  }
  
  .wrapper .icon:hover .tooltip {
    top: -45px;
    opacity: 1;
    visibility: visible;
    pointer-events: auto;
  }
  
  .wrapper .icon:hover span,
  .wrapper .icon:hover .tooltip {
    text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.1);
  }
  
  .wrapper .facebook:hover,
  .wrapper .facebook:hover .tooltip,
  .wrapper .facebook:hover .tooltip::before  {
    background: #1877F2;
    color: #ffffff;

  }
  
  .wrapper .twitter:hover,
  .wrapper .twitter:hover .tooltip,
  .wrapper .twitter:hover .tooltip::before {
    background: #14181b;
    color: #ffffff;
  }
  
  .wrapper .instagram:hover,
  .wrapper .instagram:hover .tooltip,
  .wrapper .instagram:hover .tooltip::before {
    background: #E4405F;
    color: #ffffff;
  }
  
  .wrapper .github:hover,
  .wrapper .github:hover .tooltip,
  .wrapper .github:hover .tooltip::before {
    background: #333333;
    color: #ffffff;
  }
  
  .wrapper .youtube:hover,
  .wrapper .youtube:hover .tooltip,
  .wrapper .youtube:hover .tooltip::before {
    background: #CD201F;
    color: #ffffff;
  }
  </style>
    <a href="./TrangChu" class="image-logo--footer">
        <img class="Footer__Image" src="Public/image/logooo.png" alt="">
    </a>
   
    <div class="Footer__Contain">
        
        <ul>
            <h4>Thông tin liên hệ</h4>
            <li>
                <p class=""><i class="fa-solid fa-location-dot"></i>Trường ĐH Tôn Đức Thắng, đường Nguyễn Hữu Thọ, Phường Tân Phong, Quận 7, tp Hồ Chí Minh, Việt Nam</p>
            </li>
        </ul>

        <ul>
            <h4>Hổ trợ</h4>
            <li>
                <i class="fa-solid fa-phone"></i>
                <span>0914037057</span>
            </li>
            <li>
                <i class="fa-solid fa-phone"></i>
                <span>0988520884</span>
            </li>
            <li>
                <i class="fa-solid fa-envelope"></i>
                <span> hsondz1910@gmail.com</span>
            </li>
            <li>
                <i class="fa-solid fa-clock"></i>
                <span>T2 - T6 ( 9h -> 17h30 )</span>
            </li>
        </ul>

        <ul>
            <h4>Dịch vụ khách hàng</h4>
            <li>
                <a href="">Tìm kiếm</a>
            </li>
            <li>
                <a href="">Chính sách đổi trả</a>
            </li>
            <li>
                <a href="">Chính sách bảo mật</a>
            </li>
            <li>
                <a href="">Điều khoản dịch vụ</a>
            </li>
        </ul>

        <ul>
            <h4>Về chúng tôi</h4>
            <li>
                <a href="">Tin mới</a>
            </li>
            <li>
                <a href="">Khuyến mại mới nhất tại cửa hàng</a>
            </li>
            <li>
                <a href="">Địa điểm cửa hàng Suplo Beauty</a>
            </li>
            <li>
                <a href="">Câu lạc bộ làm đẹp</a>
            </li>
        </ul>

        <ul>
            <h4>ĐĂNG KÝ BẢN TIN</h4>
            <li>
                <p>
                    Hãy nhập địa chỉ email của bạn vào ô dưới đây để có thể nhận được tất cả các tin tức mới nhất của Suplo về các sản phẩm mới, các chương trình khuyến mãi mới. Suplo xin đảm bảo sẽ không gửi mail rác, mail spam tới bạn.
                </p>
            </li>
            <li>
                <form method="POST" action="" class="form__Footer">
                    <input type="text" class="Email__Footer" placeholder="Nhập email của bạn">
                    <input type="submit" class="submit__Footer" value="Đăng ký">
                </form>

            </li>
            <li>
                <div class="Icon__Footer">
                <ul  class="wrapper">
    
    <a href=" https://www.facebook.com/hsondz1910">
        <li class="icon facebook">
            <span  class="tooltip" >Facebook</span>
            <span href="" ><i  class="fab fa-facebook"></i></span>
          </li>
    </a>
    
    <a href=" https://www.tiktok.com/@sonsosai">
        <li class="icon twitter">
            <span class="tooltip">TikTok</span>
            <span><i class="fab fa-tiktok"></i></span>
          </li>
    </a>
    <a href=" https://www.instagram.com/son.hwaph/">
         <li class="icon instagram">
      <span class="tooltip">Instagram</span>
      <span><i class="fab fa-instagram"></i></span>
    </li>
    </a>
    
    <a href=" https://github.com/hsondz1910">
        <li class="icon github">
            <span class="tooltip">Github</span>
            <span><i class="fab fa-github"></i></span>
          </li>
    </a>
   <a href=" https://www.youtube.com/channel/UCbZ6TS5JGHhMIO-y62vloNw">
    <li class="icon youtube">
        <span class="tooltip">Youtube</span>
        <span><i class="fab fa-youtube"></i></span>
      </li>
   </a>
    
   
  </ul>
                </div>
            </li>
        </ul>
    </div>
</footer>