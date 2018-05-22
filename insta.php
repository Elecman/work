<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Instagram");
?>
    <style type='text/css'>
        .widget {
            width: 250px;
            overflow: hidden;
        }
        .widget .title {
            margin: 10px 0 0 10px;
        }
        .widget .icon img{
            padding: 5px 5px 5px 0;
            width: 60px;
            display: inline-block;
            float: left;
        }
        .widget .text {
            display: inline-block;
            padding: 5px 9px 5px;
            text-align: center;
            height: 30px;
            font-size: 14px;
            font-weight: bold;
        }
        .widget .text span {
            display: block;
            font-size: 9px;
            font-weight: bold;
            color: #999999;
            margin: -2px 0 0 0;
        }
        .widget a.follow:link, .widget a.follow:visited {
            display: inline-block;
            background: #ad4141;
            text-decoration: none;
            font-size: 14px;
            color: #FFF;
            font-weight: bold;
            width: 130px;
            margin: 0 10px 0;
            padding: 4px 4px 4px 10px;
            border: 3px solid #FFF;
            border-radius: 5px 5px 5px 5px;
            -webkit-border-radius: 5px 5px 5px 5px;
            -moz-border-radius: 5px 5px 5px 5px;
            box-shadow: 0 0px 2px rgba(0, 0, 0, 0.5);
        }
        .widget .data {
            text-align: left;
            margin: 10px 0 0 10px;
            padding: 0 0 5px 0;
        }
        .widget .data a.image:link, .widget .data a.image:visited {
            width: 50px;
            height: 50px;
        }
        .widget .data a.image:link, .widget .data a.image:visited {
            display: block;
            float: left;
            margin: 0 5px 5px 0;
            overflow: hidden;
            border: 2px solid #FFF;
            box-shadow: 0 1px 1px rgba(0,0,0,0.3);
            ling-height: 0px;
            text-decoration: none;
        }
        .widget .data .image span img{
            width: 50px;
            height: 50px;
        }
        .widget .data .image span {
            display: block;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
        }
        .clear {
            clear: both;
            height: 0;
            line-height: 0;
        }
    </style>
    <div id="widget" class="widget">
        <div class="title">
            <div class="icon">
                <a href="http://instagram.com/traektoria_boardshop"><img src="https://scontent-arn2-1.cdninstagram.com/vp/719d146e3f28684920c48d6a45c362da/5B834310/t51.2885-19/s320x320/22802634_123637438303639_8312901977273008128_n.jpg"></a></div>
            <div class="text">2635<span>posts</span></div>
            <div class="text">29280<span>followers</span></div>
            <div class="text">0<span>following</span></div>
            <a href="http://instagram.com/traektoria_boardshop" class="follow" target="_blank">Подписаться ►</a>
            <div class="clear">&nbsp;</div>
        </div>
        <div class="data">
            <a href="https://www.instagram.com/p/BjCvBjeH3dr" class="image" target="_blank">
            <span>
                <img src="https://scontent-arn2-1.cdninstagram.com/vp/85c5419cfdd8129d737eb149de98bbc0/5B7BCC9E/t51.2885-15/s150x150/e35/32102306_596572604075247_5997765689622921216_n.jpg"/>
            </span>
            </a>
            <a href="https://www.instagram.com/p/BjCcgalnAv9/" class="image" target="_blank">
            <span>
                <img src="https://scontent-arn2-1.cdninstagram.com/vp/2684fe8101614ea739814cc285142b53/5B860C15/t51.2885-15/s150x150/e35/31936450_418045951940459_2970065297882480640_n.jpg">
            </span>
            </a>
            <a href="https://www.instagram.com/p/BjCAeszHpIS/" class="image" target="_blank">
            <span>
                <img src="https://scontent-arn2-1.cdninstagram.com/vp/dfb87cc591ea93f5449d68624c8b6b29/5B8A0FDD/t51.2885-15/s150x150/e35/c0.135.1080.1080/33111760_382702218910111_4649559813137629184_n.jpg">
            </span>
            </a>
            <a href="https://www.instagram.com/p/Bi_59LXHvnb/" class="image" target="_blank">
                <span><img src="https://scontent-arn2-1.cdninstagram.com/vp/d4c011056080aeeab6fb61e2aaa66851/5B05F853/t51.2885-15/s150x150/e15/31816142_210080836266972_2651128753127686144_n.jpg"></span>
            </a>
            <a href="https://www.instagram.com/p/Bi_ecsWHoQV/" class="image" target="_blank">
                <span><img src="https://scontent-arn2-1.cdninstagram.com/vp/c3517bc26d615fb756023f86c3d7f107/5B7DCE80/t51.2885-15/s150x150/e35/31894456_240164256735688_7851513917204332544_n.jpg"></span>
            </a>
            <a href="https://www.instagram.com/p/Bi9Sx-cHKr_/" class="image" target="_blank">
                <span><img src="https://scontent-arn2-1.cdninstagram.com/vp/daa4fdec428c23fc5a8e7bbc5cb34f51/5B7F7ECC/t51.2885-15/s150x150/e35/32063924_600631763622812_8264296648427962368_n.jpg"></span>
            </a>
            <a href="https://www.instagram.com/p/Bi82oeTHFdm/" class="image" target="_blank">
                <span><img src="https://scontent-arn2-1.cdninstagram.com/vp/090c2f99278d1460ed9be3fd5c7bead2/5B843916/t51.2885-15/s150x150/e35/31745671_1865213133777912_4964157882577715200_n.jpg"></span>
            </a>
            <a href="https://www.instagram.com/p/Bi7Heudnb9S/" class="image" target="_blank">
                <span><img src="https://scontent-arn2-1.cdninstagram.com/vp/188bfaf20e5b1ab0ee5ae842ee78eb19/5B7DA750/t51.2885-15/s150x150/e35/c0.108.1080.1080/32203110_630069904009559_5844149183484788736_n.jpg"></span>
            </a>
            <a href="https://www.instagram.com/p/Bi6sN1pnaLe/" class="image" target="_blank">
                <span><img src="https://scontent-arn2-1.cdninstagram.com/vp/9f238c11e72b3efc084736408c793088/5B99255D/t51.2885-15/s150x150/e35/31754698_213871416064276_3777212557585022976_n.jpg"></span>
            </a>
            <a href="https://www.instagram.com/p/Bi6PA_AnStI/" class="image" target="_blank">
                <span><img src="https://scontent-arn2-1.cdninstagram.com/vp/a4fcafb7f5db70ae847e4da837323be7/5B05E3A4/t51.2885-15/s150x150/e15/31784905_1635895736519317_5913375775599362048_n.jpg"></span>
            </a>
            <a href="https://www.instagram.com/p/Bi4j7AzH0hq/" class="image" target="_blank">
                <span><img src="https://scontent-arn2-1.cdninstagram.com/vp/df20a3efe287e56504b48c3a6b140477/5B050FDD/t51.2885-15/s150x150/e15/c140.0.360.360/32103363_174478879934852_6100683328057245696_n.jpg"></span>
            </a>
            <a href="https://www.instagram.com/p/Bi4OMhnHz8x/" class="image" target="_blank">
                <span><img src="https://scontent-arn2-1.cdninstagram.com/vp/7130f8dc0b3746b0d632697757c1127a/5B05E4B3/t51.2885-15/s150x150/e15/c236.0.607.607/31752462_1719976238056393_6149054091558387712_n.jpg"></span>
            </a>
            <div class="clear">&nbsp;</div>
        </div>
    </div>
<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");