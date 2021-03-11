## UI 구성 확인



### 메인이미지 출력





### 상품출력 

```php
// www\theme\buzinga\theme.config.php
// 값이 1인 경우에만 출력
'de_type1_list_use'=> 1, // pC 히트상품 출력
'de_type2_list_use'=> 1, // PC 추천상품 출력
'de_type3_list_use'=> 1, // PC 최신상품 출력
'de_type4_list_use'=> 1, // PC 인기상품 출력
'de_type5_list_use'=> 1, // PC 할인상품 출력
'de_mobile_type1_list_use' => 1, // 모바일 히트상품 출력
'de_mobile_type2_list_use' => 1, // 모바일 추천상품 출력
'de_mobile_type3_list_use' => 1, // 모바일 최신상품 출력
'de_mobile_type4_list_use' => 1,// 모바일 인기상품 출력
'de_mobile_type5_list_use' => 1, // 모바일 할인상품 출력
'de_rel_list_use' => 1, // 관련상품 출력
'de_mobile_rel_list_use' => 1, // 모바일 관련상품 출력
```

### 스킨 설정

```php
// C:\xampp\htdocs2\shop.config.php
// 스킨 경로 설정
    if(preg_match('#^theme/(.+)$#', $default['de_shop_skin'], $match)) {
		if(defined('G5_THEME_PATH')) {
			define('G5_SHOP_SKIN_PATH',  G5_THEME_PATH.'/'.G5_SKIN_DIR.'/shop/'.$match[1]);
			define('G5_SHOP_SKIN_URL',   G5_THEME_URL .'/'.G5_SKIN_DIR.'/shop/'.$match[1]);
		} else {
			define('G5_SHOP_SKIN_PATH',  G5_PATH.'/'.G5_SKIN_DIR.'/shop/'.$match[1]);
			define('G5_SHOP_SKIN_URL',   G5_URL .'/'.G5_SKIN_DIR.'/shop/'.$match[1]);
		}
    } else {
        define('G5_SHOP_SKIN_PATH',  G5_PATH.'/'.G5_SKIN_DIR.'/shop/'.$default['de_shop_skin']);
        define('G5_SHOP_SKIN_URL',   G5_URL .'/'.G5_SKIN_DIR.'/shop/'.$default['de_shop_skin']);
    }

    if(preg_match('#^theme/(.+)$#', $default['de_shop_mobile_skin'], $match)) {
		if(defined('G5_THEME_PATH')) {
			define('G5_MSHOP_SKIN_PATH', G5_THEME_MOBILE_PATH.'/'.G5_SKIN_DIR.'/shop/'.$match[1]);
			define('G5_MSHOP_SKIN_URL',  G5_THEME_URL .'/'.G5_MOBILE_DIR.'/'.G5_SKIN_DIR.'/shop/'.$match[1]);
		} else {
			define('G5_MSHOP_SKIN_PATH', G5_MOBILE_PATH.'/'.G5_SKIN_DIR.'/shop/'.$match[1]);
			define('G5_MSHOP_SKIN_URL',  G5_MOBILE_URL .'/'.G5_SKIN_DIR.'/shop/'.$match[1]);
		}
    } else {
        define('G5_MSHOP_SKIN_PATH', G5_MOBILE_PATH.'/'.G5_SKIN_DIR.'/shop/'.$default['de_shop_mobile_skin']);
        define('G5_MSHOP_SKIN_URL',  G5_MOBILE_URL .'/'.G5_SKIN_DIR.'/shop/'.$default['de_shop_mobile_skin']);
    }
```



G5_JS_URL

```php

//js 파일 경로
<script src="<?php echo G5_JS_URL; ?>/swipe.js"></script>
<script src="<?php echo G5_JS_URL; ?>/shop.mobile.main.js"></script>

// C:\xampp\htdocs2\config.php
define('G5_JS_DIR', 'js');    
    
// C:\xampp\htdocs2\config.php
define('G5_JS_URL',  G5_URL.'/'.G5_JS_DIR);

// URL 은 브라우저상에서의 경로 (도메인으로 부터의)
if (G5_DOMAIN) {
    define('G5_URL', G5_DOMAIN);
} else {
    if (isset($g5_path['url']))
        define('G5_URL', $g5_path['url']);
    else
        define('G5_URL', '');
}

```

- CSS 파일 추가

```php
if (defined('G5_IS_ADMIN')) {
    if(!defined('_THEME_PREVIEW_'))
        echo '<link rel="stylesheet" href="'.run_replace('head_css_url', G5_ADMIN_URL.'/css/admin.css?ver='.G5_CSS_VER, G5_URL).'">'.PHP_EOL;
} else {
    $shop_css = '';
    if (defined('_SHOP_')) $shop_css = '_shop';
    echo '<link rel="stylesheet" href="'.run_replace('head_css_url', G5_CSS_URL.'/'.(G5_IS_MOBILE?'mobile':'default').$shop_css.'.css?ver='.G5_CSS_VER, G5_URL).'">'.PHP_EOL;
}


css/mobile.shop.css

// defined('_SHOP_') 추적
// 커뮤니티 사용여부
if(defined('G5_COMMUNITY_USE') && G5_COMMUNITY_USE === false) {
    if (!defined('G5_USE_SHOP') || !G5_USE_SHOP)
        die('<p>쇼핑몰 설치 후 이용해 주십시오.</p>');

    define('_SHOP_', true);
}

// css 링크주소 추적
define('G5_CSS_URL',  G5_URL.'/'.G5_CSS_DIR);
define('G5_CSS_DIR',  'css');


/* 
function run_replace($tag, $arg = '')
run_replace 함수는 어떤 특정 값이 수정 될수 있거나 변경 될수 있는 값을 가르킬 때 사용하는 함수입니다.
함수 인수 중 $tag 변수는 어떤 특정 값을 영문자, 숫자,_ 문자열 형식으로 표기한 것을 나타냅니다.
함수 인수중 $arg 는 add_replace 함수 사용시 전해줄 인수를 나타냅니다.
*/

// PHP_EOL;
// PHP에서는 엔터를 쳐서 내려가도 실제 출력되는 html구문에는 엔터가 안나옵니다. 강제적으로 break line을 출력할 때 사용합니다.





```

