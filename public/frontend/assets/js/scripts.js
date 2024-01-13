const sliderItem =document.querySelectorAll('.slider-item')
for(let index = 0; index < sliderItem.length; index++){
    sliderItem[index].style.left = index * 100 + "%"
}

const sliderItems = document.querySelector('.slider-items')
const arrowLeft = document.querySelector('.arrowLeft')
const arrowRight = document.querySelector('.arrowRight')

let i = 0;
if(arrowRight != null && arrowLeft != null) {
    arrowRight.addEventListener('click', ()=>{
        if(i < sliderItem.length - 1){
            i++;
            sliderItems.style.left = -i*100 + "%"
    
        }else{
            return false;
        }
    })
    
    arrowLeft.addEventListener('click', ()=>{
        if(i <= 0){
            return false;
            
        }
        {
            i--;
            sliderItems.style.left = -i*100 + "%"
        }
    })
    
    
    function autoSlider(){
        if(i < sliderItem.length - 1){
            i++;
            sliderItems.style.left = -i*100 + "%"
        }
        else{
            i = 0;
            sliderItems.style.left = -i*100 + "%"
        }
    }
}
setInterval(autoSlider, 5000)


//Mobile menu bar
const Menubar = document.querySelector('.header-bar-icon')
const headerNav = document.querySelector('.header-nav')
Menubar.addEventListener('click', ()=>{
    headerNav.classList.toggle('active')
})

//Active Product
// const headingProduct = document.querySelector('.heading-product')
// const headingText = document.querySelectorAll('.heading-text')

// headingProduct.addEventListener('click', ()=>{
//     console.log("dsfsdf")
//     headingText.classList.toggle('active')
// })

//Click product Image detail

const imageSmall = document.querySelectorAll('.product-detail-items img')
const imageBig = document.querySelector('.main-image')

for (let index = 0; index < imageSmall.length; index++){
    imageSmall[index].addEventListener('click', () => {
        for (let a = 0; a < imageSmall.length; a++){
            imageSmall[a].classList.remove('active')
        
        }
        imageBig.src = imageSmall[index].src

        imageSmall[index].classList.add('active')
    })
}
//Quantity-Event

const minus = document.querySelector('.quantity-reduce')
const plus = document.querySelector('.quantity-augure')
const quanInput = document.querySelector('.quantity-input')
let qty = 0;

if(minus != null && plus != null){
    plus.addEventListener('click', ()=>{
        qty++;
        quanInput.value = qty;
    })
    minus.addEventListener('click', ()=>{
        if(quanInput.value <= 0){
            return false;
        }else{
            qty--;
            quanInput.value = qty;
        }
    })

}

