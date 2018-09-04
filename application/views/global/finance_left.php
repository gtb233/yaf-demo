<div class="fl_menu">
    <div class="padding20">
    <h3>财务收支流水</h3>
        <p <?php if($son == 1 && empty($authority['finance']['flow'])) {echo('style="display:none;"');}?> >&nbsp;&nbsp;&nbsp;&nbsp;<a href="flow" <?php if($action_name=='flow'){ ?>class="curs"<?php } ?>>收支流水</a></p>
        <p <?php if($son == 1 && empty($authority['finance']['flowdetail'])) {echo('style="display:none;"');}?> >&nbsp;&nbsp;&nbsp;&nbsp;<a href="flowdetail" <?php if($action_name=='flowdetail'){ ?>class="curs"<?php } ?>>流水明细</a></p>
    
    <h3>财务收支预算</h3>
        <p <?php if($son == 1 && empty($authority['finance']['budgetin'])) {echo('style="display:none;"');}?> >&nbsp;&nbsp;&nbsp;&nbsp;<a href="budgetIn" <?php if($action_name=='budgetin'){ ?>class="curs"<?php } ?>>收入预算</a></p>
        <p <?php if($son == 1 && empty($authority['finance']['budgetout'])) {echo('style="display:none;"');}?> >&nbsp;&nbsp;&nbsp;&nbsp;<a href="budgetOut" <?php if($action_name=='budgetout'){ ?>class="curs"<?php } ?>>支出预算</a></p>
    </div>
</div>
<style type="text/css">
	.fl_menu .curs{ color: #00BDAA }
</style>