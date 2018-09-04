
  <div class="layui-header">
    <div class="layui-logo"><img src='<?=$assetsRoot?>images/logo1.png'/></div>
    <div class="logo_txt">悦租管家<i><?php if(in_array($controller,['Index2','Rent2']) || $gyModeCookie==2){ ?>集中式<?php }else{ ?>分散式<?php } ?></i></div>
    <ul class="layui-nav layui-layout-right bgw">
     <!--  <li class="layui-nav-item"><a href="javascript:;">我的网店</a>
         <dl class="layui-nav-child">
          <dd>
            <p style="text-align: center;">网点二维码</p>
            <p><img src="http://www.easybui.com/static/images/qrcode.png" width="80" height="80" style="margin: 0 auto; display: block;"></p>
          </dd>
        </dl>
      </li> -->
      <li class="layui-nav-item"> <a href="javascript:;"> <img src="<?=$member['avatar']?$member['avatar']:$assetsRoot.'images/noface.jpg';?>" class="layui-nav-img"><?=$member['nick']?:$member['mobile']?></a>
        <dl class="layui-nav-child">
          <dd><a href="/manage/account/index">基本资料</a></dd>
          <dd><a href="/manage/account/saveindex">安全设置</a></dd>
          
          <?php if($son == 0) { ?>
          <dd><a href="/manage/personal/index">账户管理</a></dd>
          <dd><a href="/manage/authority/authmanage">子账户管理</a></dd>
          <?php } ?>
        </dl>
      </li>
      <li class="layui-nav-item"><a href="/manage/member/logout">退出</a></li>
    </ul>
  </div>
