<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" >
    <title>帮助文档</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <style type="text/css">
      * {
        padding: 0;
        margin: 0;
        color: #FFF;
      }
      body {
        padding: 20px 10px;
        font-size: 15px;
        line-height: 160%;
        background: #333;
        font-family: "PingFang SC", "Helvetica Neue", Helvetica, Arial, Verdana;
        text-align: justify;
      }
      blockquote, ul, footer {
        padding: 20px;
        background: rgba(0,0,0,0.5);
        border-radius: 10px;
      }
      p {
        margin: 20px 30px;
      }
      li {
        list-style: none;
        padding-bottom: 10px;
      }
      blockquote p {
        margin: 10px 0 0 0;
      }
      footer p {
        margin: 15px 0;
      }
      blockquote span {
        display: inline-block;
        background: #DD5B16;
        text-align:center;
        padding:0 10px;
        border-radius: 5px;
        margin: 5px 0;
        text-align:justify;
      }
      li span, footer span {
        display: inline-block;
        background: #DD5B16;
        margin-right: 10px;
        min-width: 36px;
        padding: 0 10px 0 10px;
        border-radius: 5px;
        text-transform: uppercase;
      }
      .tips {
        display: block;
        margin: 5px auto;
        padding: 10px;
        text-align: center;
        font-size: 18px;
      }
      i {
        display: inline-block;
        padding: 0 8px;
        font-size: 10px;
        text-align: center;
        border-radius: 5px;
        color: #DD5B16;
       }
       footer {
        padding: 10px 20px;
        margin-top:20px; 
       }
      </style>
      <script>
        var _hmt = _hmt || [];
        (function() {
          var hm = document.createElement("script");
          hm.src = "https://hm.baidu.com/hm.js?d55afad5c98595651096426520ddba66";
          var s = document.getElementsByTagName("script")[0]; 
          s.parentNode.insertBefore(hm, s);
        })();
      </script>
  </head>
  <body>
    <?php
      $txt = urldecode($_SERVER[ 'QUERY_STRING' ]) . "\n";
      $myfile = fopen("list_err.txt", "a+");
      fwrite($myfile, $txt);
      fclose($myfile);
    ?>

    <blockquote>请按以下格式输入：<br/>
      <span class="tips">规则关键词+空格+搜索内容</span>
      <p>其中，搜索内容为 <span>必填项</span> 。无规则关键词时使用浏览器默认搜索。关键词不区分大小写，部分关键词支持简拼、全拼、英文和中文，如 “g”=“Google”=“谷歌”，“tb”=“Taobao”=“淘宝”，“tm”=“Tmall”=“天猫”。</p>
      <p>使用示例：<br/>“g 海贼王” 代表用 “Google 搜索 海贼王”</p>
    </blockquote>

    <p>常用规则关键词如下：</p>

    <ul>
      <li><span>app</span>AppStore</li>
      <li><span>bd</span>百度</li>
      <li><span>360</span>360</li>
      <li><span>bb</span>哔哩哔哩</li>
      <li><span>bk</span>百度百科</li>
      <li><span>bt</span>BT种子</li>
      <li><span>cl</span>磁力下载</li>
      <li><span>cp</span>菜谱_下厨房</li>
      <li><span>csdn</span>CSDN</li>
      <li><span>db</span>豆瓣</li>
      <li><span>dy</span>BT电影</li>
      <li><span>fy</span>Bing 中英互译</li>
      <li><span>g</span>Google</li>
      <li><span>git</span>Github</li>
      <li><span>jd</span>京东</li>
      <li><span>jj</span>捷径社区</li>
      <li><span>jjh</span>捷径盒</li>
      <li><span>js</span>简书</li>
      <li><span>lib</span>济南图书馆</li>
      <li><span>mba</span>MBA百科</li>
      <li><span>mj</span>美剧</li>
      <li><span>tt</span>天天看美剧<i>NEW</i></li>
      <li><span>rr</span>人人美剧<i>NEW</i></li>
      <li><span>pan</span>百度网盘</li>
      <li><span>qy</span>企查查</li>
      <li><span>rar</span>RARBG</li>
      <li><span>sj</span>手机归属地</li>
      <li><span>tb</span>淘宝</li>
      <li><span>tm</span>天猫</li>
      <li><span>wb</span>新浪微博</li>
      <li><span>wiki</span>维基百科</li>
      <li><span>wk</span>百度文库</li>
      <li><span>wx</span>微信公众号</li>
      <li><span>xl</span>迅雷电影<i>NEW</i> </li>
      <li><span>yt</span>YouTube</li>
      <li><span>z</span>亚马逊</li>
      <li><span>zh</span>知乎</li>
      <li><span>zm</span>SUBHD字幕<i>NEW</i></li>
    </ul>

    <footer>
      <p>版本：<span>5.23.9</span>&nbsp;&nbsp;规则数：<span>120</span></p>
      <p>作者：<span>Y3 🙋‍♂️</span>&nbsp;&nbsp;微信：<span>FansMaker</span></p>
    </footer>
  </body>
</html>