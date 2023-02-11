'use strict';

{
  // ---------------------------------
  // メインビジュアルのスライドショー
  // ---------------------------------
  const images = document.querySelectorAll('.mainvisual li img');
  let currentIndex = 0;
  function play(){
    setTimeout(()=>{
      images[currentIndex].classList.remove('current')
      currentIndex++;
      if(currentIndex > images.length - 1){
        currentIndex = 0;
      }
      images[currentIndex].classList.add('current');
      play();
    },5000);    
  }
  play();

  //--------------------------
  // ハンバーガーメニュー
  //--------------------------
  const hamburger = document.getElementById('hamburger');
  const hamburgerMenu = document.querySelector('.hamburger-menu');

  hamburger.addEventListener('click',()=>{
    hamburgerMenu.classList.toggle('show');
    hamburger.classList.toggle('show');
  });

  //-------------------------
  // to-topボタン、headerの表示変換
  //-------------------------
  const toTop = document.getElementById('to-top');
  const index = document.getElementById('index');
  const header = document.getElementById('header');
  const observer = new IntersectionObserver(callback);
  observer.observe(index);

  //header下のindexが見えなくなれば、to-topボタンの表示
  function callback(entries){
    entries.forEach(entry=>{
      if(!entry.isIntersecting){
        toTop.classList.add('scrolled');
        header.classList.add('scrolled');
      }else{
        toTop.classList.remove('scrolled');
        header.classList.remove('scrolled');
      }
    });
  }
  //to-topボタンを押したら、スクロールトップ
  toTop.addEventListener('click',e =>{
    e.preventDefault();
    window.scrollTo({
      top:0,
      behavior:'smooth',
    });
  });

  //------------------------
  // スクロールフェード(オブジェクト)
  //-----------------------
  function inViewCallback(entries,obs){
    entries.forEach(entry =>{
      if(!entry.isIntersecting){
        return;
      }
      entry.target.classList.add('appear');
      obs.unobserve(entry.target);
    });
  }  
  const inviewObserver = new IntersectionObserver(inViewCallback,{
    threshold:0.4,
    rootMargin:'0px 0px -100px'
  });
  const animates = document.querySelectorAll('.animate');
  animates.forEach(animate =>{
    inviewObserver.observe(animate);
  });
  //-----------------------
  //スクロールフェード(ライン)
  //-----------------------
  function lineCallback(entries,obs){
    entries.forEach(entry =>{
      if(!entry.isIntersecting){
        return;
      }
      entry.target.classList.add('appear');
      obs.unobserve(entry.target);
    });
  }  
  const lineObserver = new IntersectionObserver(lineCallback,{
    rootMargin:'0px 0px -300px',
  });
  const lines = document.querySelectorAll('h2,.beginner .merits h3');
  lines.forEach(line =>{
    lineObserver.observe(line);
  });

  //--------------------------
  // スクロールアニメーション
  //--------------------------
  const wrappers = document.querySelectorAll('.wrapper');
  wrappers.forEach(wrapper =>{
    if(wrapper.classList.contains('join')){
      window.addEventListener('scroll',()=>{
        const elem = document.getElementById('slide1');
        const scrollY = window.scrollY / 10;
        elem.style.width = 300 + scrollY + 'px';
      });
      window.addEventListener('scroll',()=>{
        const elem = document.getElementById('slide2');
        const scrollY = window.scrollY / 6;
        elem.style.paddingLeft = -100 + scrollY + 'px';
      });
      window.addEventListener('scroll',()=>{
        const elem = document.getElementById('slide3');
        const scrollY = window.scrollY / 6;
        elem.style.paddingRight = 0 + scrollY + 'px';
      });
      window.addEventListener('scroll',()=>{
        const elem = document.getElementById('slide4');
        const scrollY = window.scrollY / 4;
        elem.style.paddingTop = 0 + scrollY + 'px';
      });
    }
  });
  
}