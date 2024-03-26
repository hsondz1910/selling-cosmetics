var checkIndex = location.href.indexOf("TrangChu");

    // Section 11 - slider
    const list = document.querySelector(".About .About_slider");
    const item = document.querySelectorAll(".About .About_slider .About_item");
    const dots = document.querySelectorAll(".About .About_slider .dots li");

    const slideBanner = document.querySelector('.section__1--slide');
    const countBanner = document.querySelectorAll('.slide--subItem');
    const slideMain = document.querySelector('.Iteams__Brand');
    const slideSale = document.querySelector('.Contain__ProductSale');
    const slideProSale= document.querySelector('.Item__Sale');
    const countProSale = document.querySelectorAll('.proDuct__Lenght');
    const slideNews = document.querySelector('.Contain__New');

    const lengthNews = document.querySelectorAll('.NewItem');
    const lenghtBrand = document.querySelectorAll('.subItem__Brand');
    const countpProdDuct__sale = document.querySelectorAll('.prodDuct__sale--PageMain');

    var preSlideBanner = document.querySelector('.left__Banner');
    var nextSlideBanner = document.querySelector('.right__Banner');
    var nextSlide = document.querySelector('.rigthBrand');
    var preSlide = document.querySelector('.leftBrand');
    var nextSlideSale = document.querySelector('.right__Sale');
    var preSlideSale = document.querySelector('.left__Sale');
    var nextSlideProSale = document.querySelector('.product__Right');
    var preSlideProSale = document.querySelector('.product__Left');
    var nextSlideNews= document.querySelector('.newRight');
    var preSlideNews= document.querySelector('.newLeft');
    
    if(nextSlide != null)
    {
        nextSlide.addEventListener("click",() => slider('right'));
    }
    if(preSlide != null)
    {
        preSlide.addEventListener("click",() => slider('left'));
    }

    if(nextSlideSale != null)
    {
        nextSlideSale.addEventListener("click",() => slider('rightSale'));
    }

    if(preSlideSale != null)
    {
        preSlideSale.addEventListener("click",() => slider('leftSale'));
    }

    if(nextSlideProSale != null)
    {
        nextSlideProSale.addEventListener("click",() => slider('productRight'));
    }

    if(preSlideProSale != null)
    {
        preSlideProSale.addEventListener("click",() => slider('productLeft'));
    }

    if(nextSlideBanner != null)
    {
        nextSlideBanner.addEventListener("click",() => slider('bannerRight'));
    }
    
    if(preSlideBanner != null)
    {
        preSlideBanner.addEventListener("click",() => slider('bannerLeft'));
    }

    if(preSlideNews != null)
    {
        preSlideNews.addEventListener("click",() => slider('newLeft'));
    }

    if(nextSlideNews != null)
    {
        nextSlideNews.addEventListener("click",() => slider('newRight'));
    }
    
    
    var index = 0;
    var indexSale = 0;
    var indexProSale = 0;
    var indexBanner = 0;
    var indexNew = 0;
    
    let active = 0;
    let lengthItems = item.length-1;

    function updateDisplay() {
        item.forEach((slide, index) => {
            const distance = Math.abs(index - active);
            const translateValue = index - active;
            slide.style.opacity = distance === 0 ? 1 : 0.5;
        });
    
        dots.forEach((dot, index) => {
            dot.classList.toggle("dots_active", index === active);
        });
    }
    
    function nextSlideDots() {
        if (active + 1 > lengthItems) {
            active = 0;
        } else {
            active = active + 1;
        }
        updateDisplay();
    }
    
    dots.forEach((dot, index) => {
        dot.addEventListener("click", function () {
            active = index;
            updateDisplay();
        });
    });
    
    // Tự động chuyển đổi sau mỗi 3 giây
    setInterval(nextSlideDots, 3000);
    
    // Khởi tạo hiển thị mặc định
    updateDisplay();


    function slider(param)
    {
        if(param === "right")
        {
            index++;
    
            if(screen.width > 1024)
            {
                if(index > getLength(lenghtBrand.length,6))
                {
                    index = 0;
                }
            }
            else
            {
                if(screen.width > 750)
                {
                    if(index > getLength(lenghtBrand.length,4))
                    {
                        index = 0;
                    }   
                }
                else
                {
                    if(index > getLength(lenghtBrand.length,2))
                    {
                        index = 0;
                    }   
                }

            }

            updateSlide("right")
        }        
        else if(param === "left")
        {
            index--;
            if(screen.width > 1024)
            {
                if(index < 0)
                {
                    index = getLength(lenghtBrand.length,6);
                }
            }
            else
            {    
                if(screen.width > 750)
                {
                    if(index < 0)
                    {
                        index = getLength(lenghtBrand.length,4);
                    }
                }
                else
                {
                    if(index < 0)
                    {
                        index = getLength(lenghtBrand.length,2);
                    }
                }
            }

            updateSlide("left");
        }
        else if(param === "rightSale")
        {
            indexSale++;
    
            if(indexSale > countpProdDuct__sale.length - 1)
            {
                indexSale = 0;
            }

            updateSlide("rightSale")
        }
        else if(param === "leftSale")
        {
            indexSale--;

            if(indexSale < 0)
            {
                indexSale = countpProdDuct__sale.length - 1;
            }
            
            updateSlide("leftSale")
        }
        else if(param === "productRight")
        {
            indexProSale++;
            
            if(screen.width <= 1024)
            {
                if(indexProSale > getLength(countProSale.length,1))
                {
                    indexProSale = 0;
                }
            }
            else
            {
                if(indexProSale > getLength(countProSale.length,4))
                {
                    indexProSale = 0;
                }
            }

            updateSlide("productRight")
        }
        else if(param === "productLeft")
        {
            indexProSale--;
    
            if(screen.width <= 1024)
            {
                if(indexProSale < 0)
                {
                    indexProSale = getLength(countProSale.length,1);
                }
            }
            else
            {
                if(indexProSale < 0)
                {
                    indexProSale = getLength(countProSale.length,4);
                }
            }

            updateSlide("productLeft")
        }
        else if(param === "bannerRight")
        {
            indexBanner++;
    
            if(indexBanner > countBanner.length - 1)
            {
                indexBanner = 0;
            }
            
            updateSlide("bannerRight")
        }
        else if(param === "bannerLeft")
        {
            indexBanner--;
    
            if(indexBanner < 0)
            {
                indexBanner = countBanner.length - 1;
            }
            updateSlide("bannerLeft")
        }
        else if(param === "newRight")
        {
            indexNew++;
            
            if(indexNew > lengthNews.length - 3)
            {
                indexNew = 0;
            }
            
            updateSlide("newRight")
        }
        else if(param === "newLeft")
        {
            indexNew--;
    
            if(indexNew < 0)
            {
                indexNew = lengthNews.length - 3;
            }
            updateSlide("newLeft")
        }
    
        function updateSlide(value)
        {
            if(screen.width <= 736){
                if(value === "left" || value === "right")
                {
                    slideMain.style.transform = `translateX(-${index * 100}%)`;
                }
                else if(value === "rightSale" || value === "leftSale")
                {
                    slideSale.style.transform = `translateX(-${indexSale * 100}%)`;
                }
                else if(value === "productRight" || value === "productLeft")
                {
                    slideProSale.style.transform = `translateX(-${indexProSale * 100}%)`;
                }
                else if(value === "bannerRight" || value === "bannerLeft")
                {
                    slideBanner.style.transform = `translateX(-${indexBanner * 100}%)`;
                }
                else if(value === "newRight" || value === "newLeft")
                {
                    slideNews.style.transform = `translateX(-${indexNew * 100}%)`;
                }
                }
                else if(screen.width > 736 && screen.width < 1024){
                    if(value === "left" || value === "right")
                    {
                        slideMain.style.transform = `translateX(-${index * 100}%)`;
                    }
                    else if(value === "rightSale" || value === "leftSale")
                    {
                        slideSale.style.transform = `translateX(-${indexSale * 85}%)`;
                    }
                    else if(value === "productRight" || value === "productLeft")
                    {
                        slideProSale.style.transform = `translateX(-${indexProSale * 85}%)`;
                    }
                    else if(value === "bannerRight" || value === "bannerLeft")
                    {
                        slideBanner.style.transform = `translateX(-${indexBanner * 85}%)`;
                    }
                    else if(value === "newRight" || value === "newLeft")
                    {
                        slideNews.style.transform = `translateX(-${indexNew * 85}%)`;
                    }
                }
                else{
                    if(value === "left" || value === "right")
                    {
                        slideMain.style.transform = `translateX(-${index * 100}%)`;
                    }
                    else if(value === "rightSale" || value === "leftSale")
                    {
                        slideSale.style.transform = `translateX(-${indexSale * 24}%)`;
                    }
                    else if(value === "productRight" || value === "productLeft")
                    {
                        slideProSale.style.transform = `translateX(-${indexProSale * 25}%)`;
                    }
                    else if(value === "bannerRight" || value === "bannerLeft")
                    {
                        slideBanner.style.transform = `translateX(-${indexBanner * 33.333}%)`;
                    }
                    else if(value === "newRight" || value === "newLeft")
                    {
                        slideNews.style.transform = `translateX(-${indexNew * 100}%)`;
                    }
            }    
        }
    }
    
    if(screen.width > 1024)
    {
        if(nextSlide != null && nextSlideSale != null && nextSlideProSale != null && nextSlideProSale && nextSlideNews != null && nextSlide != null)
        {
            setInterval(() =>
            {
                nextSlide.click();
                nextSlideSale.click();
                nextSlideProSale.click();
                nextSlideNews.click();
                nextSlideBanner.click();
            },3000);
        }
    }

/* Chi tiết sản phẩm */
var temp = document.querySelectorAll('.detailProduct--Image');
const slideDetails = document.querySelector('.detailProduct__mainImage');

var indexDetail = 0;

if(temp.length > 0) {
    temp[0].onclick = function()
    {
        document.querySelector('.showMainImage').src = temp[0].src;
        indexDetail = 0;
        updateSlideDetail()
    }

    temp[1].onclick = function()
    {
        document.querySelector('.showMainImage').src = temp[1].src;
        indexDetail = 1;
        updateSlideDetail()
    }
    temp[2].onclick = function()
    {
        document.querySelector('.showMainImage').src = temp[2].src;
        indexDetail = 2;
        updateSlideDetail()
        console.log(indexDetail);
    }
}


function updateSlideDetail()
{
    if(screen.width <= 736)
    {
        slideDetails.style.transform = `translateX(-${indexDetail * 100}%)`;
    }
    else if(screen.width > 736 && screen.width < 1024)
    {
        slideDetails.style.transform = `translateX(-${indexDetail * 5}%)`;
    }
    else
    {
        slideDetails.style.transform = `translateX(-${indexDetail * 85}%)`;
    }
}

/* tab__selection */

var tabDetail = document.querySelectorAll('.tab__selection');

changeColor(tabDetail,0);

if(tabDetail.length > 0)
{
    tabDetail[0].onclick = function()
    {
        changeDisplay(".tabDescription",'.guideBuyProduct','.provisionService')
        changeColor(tabDetail, 0);
    }
    tabDetail[1].onclick = function()
    {
        changeDisplay(".guideBuyProduct",'.tabDescription','.provisionService')
        changeColor(tabDetail, 1);
    }
    tabDetail[2].onclick = function()
    {
        changeDisplay(".provisionService",'.guideBuyProduct','.tabDescription')
        changeColor(tabDetail, 2);
    }
}

function changeDisplay(nameChange, name1, name2)
{
    document.querySelector(nameChange).style.display = "block";
    document.querySelector(name1).style.display = "none";
    document.querySelector(name2).style.display = "none";
}

function changeColor(tabDetail, index)
{
    for(var i = 0; i < tabDetail.length; i++)
    {
        if(index == i)
        {
            tabDetail[i].style.color = "var(--footer--color);";
            tabDetail[i].style.borderColor = "var(--footer--color);";
        }
        else if(index != i)
        {
            tabDetail[i].style.color = "#222222";
            tabDetail[i].style.borderColor = "transparent";
        }
    }
}

/* Product Involve */

var containInvolve = document.querySelector('.productInvolve__Items');
var countProdductInvolve = document.querySelectorAll('.productInvolve--Item');
var tabLeft = document.querySelector('.productInvolveLeft');
var tabRight = document.querySelector('.productInvolveRight');

if(tabLeft != null && tabRight != null)
{
    tabLeft.addEventListener("click", () => slideInvolve("InvolveLeft"));
    tabRight.addEventListener("click", () => slideInvolve("InvolveRight"));
}
var InvolveIndex = 0;

function slideInvolve(value)
{
    if(value === "InvolveRight")
    {
        InvolveIndex++;

        if(screen.width > 1024)
        {
            if(InvolveIndex > getLength(countProdductInvolve.length, 4))
            {
                InvolveIndex = 0;
            }
        }
        else
        {            
            if(screen.width > 723)
            {
                if(InvolveIndex > getLength(countProdductInvolve.length, 5))
                {
                    InvolveIndex = 0;
                }
            }
            else
            {
                if(InvolveIndex > getLength(countProdductInvolve.length, 2))
                {
                    InvolveIndex = 0;
                }
            }
        }
    }
    else
    {
        if(value === "InvolveLeft")
        {
            InvolveIndex--;

            if(screen.width > 1024)
            {
                if(InvolveIndex < 0)
                {
                    InvolveIndex = getLength(countProdductInvolve.length, 4);
                }
            }
            else
            {
                if(screen.width > 723)
                {
                    if(InvolveIndex < 0)
                    {
                        InvolveIndex = getLength(countProdductInvolve.length, 5);
                    }
                }
                else
                {
                    if(InvolveIndex < 0)
                    {
                        InvolveIndex = getLength(countProdductInvolve.length, 2);
                    }
                }
            }
        }
    }

    updateSlideInvolve();
}

function updateSlideInvolve(){
    containInvolve.style.transform = `translateX(-${InvolveIndex * 100}%)`;
}

/* tăng giảm số lượng */

if(document.querySelector('.reduce') != null && document.querySelector('.increase') != null){
    document.querySelector('.reduce').addEventListener("click",() => userMount("reduce"));
    document.querySelector('.increase').addEventListener("click",() => userMount("increase"));

    var mount = document.querySelector('.mount');

    var mountChange = 1;

    function userMount(value)
    {
        if(value === "reduce")
        {
            if(mountChange > 1)
            {
                mountChange--;
            }
        }
        else if(value === "increase")
        {
            mountChange++;
        }

        mount.value = mountChange;
    }
}

function getLength(lenghtName,amount)
{
    if(lenghtName % amount == 0)
    {
        return (lenghtName / amount) - 1;
    }
    else
    {
        return parseInt(lenghtName / amount);
    }
}







