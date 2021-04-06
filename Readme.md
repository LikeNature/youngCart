\#hd_wr_inner #hd_btn .gnb_wrap{display: inline}

- 사이드메뉴
- https://www.berriart.com/sidr/



- 스크롤바 수직 위치를 가져옴

```js
  $( 'div' ).scrollTop();
```

  - 스크롤바 수직 위치 지정

```js
  $( 'div' ).scrollTop( 300 );
```

  #hd_wr_inner.gnb_wrap{display:block;float:left;margin-left:40px;}

  \#hd_wr_inner.gnb_wrap li {display: inline-block;}

  \#hd_wr_inner.gnb_wrap li a {padding: 0 15px;}



- 상단메뉴 추가

.gnb_wrap {text-align:center;}

.gnb_wrap span {display: inline-block;width: 100px;}



- 메인배너

  - 페이징 속도: www\yc5\theme\buzinga\mobile\skin\shop\basic\mainbanner.10.skin.php

  ```js
  jQuery(function($){
      var swiper = new Swiper('#main_bn', {
          slidesPerView: 1,
          spaceBetween: 0,
          loop: true,
          autoplay: {delay: 5000, disableOnInteraction:false},
          pagination: {el: '.swiper-pagination', clickable: true}
      });
  });
  ```

  

  