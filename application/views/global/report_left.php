<div class="fl_menu">
    <div class="padding20">
    <h3 <?php if($son == 1 && empty($authority['report']['operatedays'])) {echo('style="display:none;"');}?>>运营统计</h3>
        <p <?php if($son == 1 && empty($authority['report']['operateday'])) {echo('style="display:none;"');}?> >&nbsp;&nbsp;&nbsp;&nbsp;<a href="operateday" <?php if($action_name=='operateday'){ ?> class="curs"<?php } ?>>日报表</a></p>
        <p <?php if($son == 1 && empty($authority['report']['operatemonth'])) {echo('style="display:none;"');}?> >&nbsp;&nbsp;&nbsp;&nbsp;<a href="operatemonth" <?php if($action_name=='operatemonth'){ ?> class="curs"<?php } ?>>月报表</a></p>
        
    <h3 <?php if($son == 1 && empty($authority['report']['financeser'])) {echo('style="display:none;"');}?> >财务报表</h3>
        <p <?php if($son == 1 && empty($authority['report']['financeday'])) {echo('style="display:none;"');}?> >&nbsp;&nbsp;&nbsp;&nbsp;<a href="financeday" <?php if($action_name=='financeday'){ ?> class="curs"<?php } ?>>日报表</a></p>
        <p <?php if($son == 1 && empty($authority['report']['financemonth'])) {echo('style="display:none;"');}?> >&nbsp;&nbsp;&nbsp;&nbsp;<a href="financemonth" <?php if($action_name=='financemonth'){ ?> class="curs"<?php } ?>>月报表</a></p>
        
    <h3 <?php if($son == 1 && empty($authority['report']['ownerall'])) {echo('style="display:none;"');}?> >业主/租客/房源清单</h3>
        <p <?php if($son == 1 && empty($authority['report']['owner'])) {echo('style="display:none;"');}?> >&nbsp;&nbsp;&nbsp;&nbsp;<a href="owner" <?php if($action_name=='owner'){ ?> class="curs"<?php } ?>>业主清单</a></p>
        <p <?php if($son == 1 && empty($authority['report']['tenant'])) {echo('style="display:none;"');}?> >&nbsp;&nbsp;&nbsp;&nbsp;<a href="tenant" <?php if($action_name=='tenant'){ ?> class="curs"<?php } ?>>租客清单</a></p>
        <?php if($gyModeCookie==1){ ?>
        <p <?php if($son == 1 && empty($authority['report']['rent'])) {echo('style="display:none;"');}?> >&nbsp;&nbsp;&nbsp;&nbsp;<a href="rent" <?php if($action_name=='rent'){ ?> class="curs"<?php } ?>>房源统计</a></p>
        <?php }else{ ?>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="apartment"<?php if($action_name=='apartment'){ ?> class="curs"<?php } ?>>公寓统计</a></p>
        <?php } ?>
    </div>
</div>
<style>
    .fl_menu .curs{ color: #00BDAA }
</style>