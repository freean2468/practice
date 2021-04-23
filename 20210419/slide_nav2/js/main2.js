function call_js(){

//변수지정  
let slideshow = document.querySelector('.slideshow');
let slideshowSlides = document.querySelector('.slideshow_slides');
let slide = document.querySelectorAll('.slideshow_slides a');
let prev = document.querySelector('.prev'); 
let next = document.querySelector('.next'); 
let slideCount = slide.length; //slide.length;
let currentIndex =0; 
let timer = "";  //자동타이머 설정변수

//슬라이드 가로로 배열
for(let i=0; i< slide.length; i++){
    let newLeft = i*100+'%';
    slide[i].style.left = newLeft;
}

//슬라이드 이동함수
function gotoSlide(index){
    currentIndex = index;
    let newLeft = index * -100 +'%';
    slideshowSlides.style.left = newLeft;
    slideshowSlides.classList.add('animated');
   // updateNav(); //처음인지, 마지막인지 검사
}

// 슬라이드 초기화
gotoSlide(0);


// 슬라이드 처음인지 , 마지막인지 검사하는 함수
function updateNav() { 
    if(currentIndex === 0)
      prev.classList.add('disabled');
    else
      prev.classList.remove('disabled');

    if(currentIndex === slideCount -1)
      next.classList.add('disabled');
    else
      next.classList.remove('disabled');
}

//좌우버튼으로 이동하기
prev.addEventListener('click', function(e){
    e.preventDefault();
    if(currentIndex !== 0){
        currentIndex -= 1;
    }else{
        currentIndex = slideCount - 1;
    }
    gotoSlide(currentIndex);
});


next.addEventListener('click', function(e){
    e.preventDefault();
    if(currentIndex !== slideCount - 1){
        currentIndex += 1;
    }else{
        currentIndex = 0;
    }
    gotoSlide(currentIndex);
});

//자동 슬라이드 함수
function startTimer(){
    //일정시감나다 할일
    //setInterval(실제로할일, 시간)
    timer = setInterval(function(){
        let nextIndex = (currentIndex +1) % slideCount ;
        gotoSlide(nextIndex);
    } , 3500);
}
startTimer();

// 자동 슬라이드 함수 정지하고 시작하기 
slideshowSlides.addEventListener('mouseenter', function(){
    clearInterval(timer);
});

slideshowSlides.addEventListener('mouseleave', function(){
    startTimer();
});



}//end of function