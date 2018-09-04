<?php if($gyModeCookie==2){
  $this->display('global/left2.php');
}else{
?><div class="layui-side layui-bg-black">
    <div class="layui-side-scroll">
      <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
      <ul class="layui-nav layui-nav-tree">
        <li class="layui-nav-item<?=$controller=='Index'?' layui-this':''?>">
          <a href="/manage/index/index"><i class="icoblock"><img src="<?=$assetsRoot?>images/m1.png"></i>首页</a>
        </li>
        <li class="layui-nav-item<?=$controller=='Rent' && $action!='list'?' layui-this':''?>" <?=$menu['rent']?>>
          <a href="/manage/rent/index"><i class="icoblock"><img src="<?=$assetsRoot?>images/m2.png"></i>租务</a>
        </li>
        <li class="layui-nav-item<?=$controller=='Finance'?' layui-this':''?>" <?=$menu['finance']?>>
          <a href="/manage/finance/<?php if($son == 1) {echo('list');} else {echo('flow');}?>"><i class="icoblock"><img src="<?=$assetsRoot?>images/m3.png"></i>账务</a>
        </li>
        <li class="layui-nav-item<?=$controller=='Report'?' layui-this':''?>" <?=$menu['report']?>>
          <a href="/manage/report/<?php if($son == 1) {echo('list');} else {echo('operateday');}?>"><i class="icoblock"><img src="<?=$assetsRoot?>images/m4.png"></i>报表</a>
        </li>
        <li class="layui-nav-item<?=$controller=='index4'?' layui-this':''?>" style="display: none;">
          <a href="#"><i class="icoblock"><img src="<?=$assetsRoot?>images/m5.png"></i>统计</a>
        </li>
        <li class="layui-nav-item<?=$controller=='index5'?' layui-this':''?>"  style="display:none;">
          <a href="#"><i class="icoblock"><img src="<?=$assetsRoot?>images/m6.png"></i>服务</a>
        </li>
        <li class="layui-nav-item<?=$controller=='Rent' && $action=='list'?' layui-this':''?>" <?=$menu['housing']?>>
          <a href="/manage/rent/list"><i class="icoblock"><img src="<?=$assetsRoot?>images/m7.png"></i>房源</a>
        </li>
        <li class="layui-nav-item<?=$controller=='Reserve'?' layui-this':''?>" <?=$menu['reserve']?>>
          <a href="/manage/reserve/<?php if($son == 1) {echo('list');} else {echo('index');}?>"><i class="icoblock"><img src="<?=$assetsRoot?>images/m2.png"></i>服务</a>
        </li>

      </ul>
      <a href="/manage/index2/index" style="position: absolute; bottom: 0; left: 0;  text-align: center; height: 90px; color: #FFF; background: #008275; text-align: center; display: block; width: 90px;">
      <i style="display: block; margin: 18px 0 10px 0"><img src="<?=$assetsRoot?>images/qh.png"/></i>
           集中式公寓
    </a>
    </div>
  </div>
<?php } ?>