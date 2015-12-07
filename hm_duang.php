<?php if (!defined('SYSTEM_ROOT')) { die('Insufficient Permissions'); }
/*
Plugin Name: hm_duang
Version: 1.0
Plugin URL: http://www.ihm.xyz/
Description: 启用本插件会在左下角显示一个CSS3的酷炫加载圈
Author: 幻梦
Author Email: i@ihm.xyz
Author URL: http://www.ihm.xyz/
For: V3.9
*/

//插入CSS代码
 function hm_duang_top() {
     ?>
<style>
    #circle {
    background-color: rgba(0,0,0,0);
    border:5px solid rgba(0,183,229,0.9);
    opacity:.9;
    border-top:5px solid rgba(0,0,0,0);
    border-left:5px solid rgba(0,0,0,0);
    border-radius:50px;
    box-shadow: 0 0 35px #2187e7;
    width:30px;
    height:30px;
    margin:0 auto;
    -moz-animation:spin .5s infinite linear;
    -webkit-animation:spin .5s infinite linear;
    -o-animation:spin .5s infinite linear;
    -ms-animation:spin .5s infinite linear;
    position:fixed;
    left:20px;
    bottom:20px;
    }
    #circle1 {
    background-color: rgba(0,0,0,0);
    border:5px solid rgba(0,183,229,0.9);
    opacity:.9;
    border-top:5px solid rgba(0,0,0,0);
    border-left:5px solid rgba(0,0,0,0);
    border-radius:50px;
    box-shadow: 0 0 15px #2187e7;
    width:10px;
    height:10px;
    margin:0 auto;
    position:fixed;
    left:30px;
    bottom:30px;
    -moz-animation:spinoff .5s infinite linear;
    -webkit-animation:spinoff .5s infinite linear;
    -o-animation:spinoff .5s infinite linear;
    -ms-animation:spinoff .5s infinite linear;
    }
    @-moz-keyframes spin {
    0% { -moz-transform:rotate(0deg); }
    100% { -moz-transform:rotate(360deg); }
    }
    @-moz-keyframes spinoff {
    0% { -moz-transform:rotate(0deg); }
    100% { -moz-transform:rotate(-360deg); }
    }
    @-webkit-keyframes spin {
    0% { -webkit-transform:rotate(0deg); }
    100% { -webkit-transform:rotate(360deg); }
    }
    @-webkit-keyframes spinoff {
    0% { -webkit-transform:rotate(0deg); }
    100% { -webkit-transform:rotate(-360deg); }
    }
    @-o-keyframes spin {
    0% { -o-transform:rotate(0deg); }
    100% { -o-transform:rotate(360deg); }
    }
    @-o-keyframes spinoff {
    0% { -o-transform:rotate(0deg); }
    100% { -o-transform:rotate(-360deg); }
    }
    @-ms-keyframes spin {
    0% { -ms-transform:rotate(0deg); }
    100% { -ms-transform:rotate(360deg); }
    }
    @-ms-keyframes spinoff {
    0% { -ms-transform:rotate(0deg); }
    100% { -ms-transform:rotate(-360deg); }
    }
    </style>
<?php
}

//HEADER挂载div
function hm_duang_header(){
?>
<div id="circle"></div> <div id="circle1"></div>
<?php
}
//FOOTER挂载script

function hm_duang_footer() {
    ?>
    <script type="text/javascript">
        $(window).load(function() {
            $("#circle").fadeOut(500);
            $("#circle1").fadeOut(700);
        });
    </script>
<?php
}

addAction('header','hm_duang_top');
addAction('header','hm_duang_header');
addAction('footer','hm_duang_footer');
?>


