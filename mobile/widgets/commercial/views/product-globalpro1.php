<img class="meiri_by" src="http://7xoo3k.com2.z0.glb.qiniucdn.com/m-shouye-quanqiu_jin.jpg">
<?php $items = $advertisement->getItems(); ?>
<?php for($i=0; $i<count($items); $i++): ?>
<?php
if (!empty($items[$i]->product)) {
	$brand = json_decode($items[$i]->product->brand, true);
	$country = explode('_', $brand['country']);
}
?>
<a class="goods_pd" href="<?=$items[$i]->href?>">
    <!--<span class="tejiaa">特价</span>-->
    <img src="<?=$items[$i]->productImage?>" width="230" height="230">
    <div class="goods_text">
        <p class="f_text"><?=$items[$i]->title?></p>
        <p class="goods_text_p">
            <span>【官方授权】</span>
            <?=$items[$i]->description?>
        </p>
        <p class="guoqi_t" ><img class="guoqi" src="http://7xoo3k.com2.z0.glb.qiniucdn.com/wap-static-flag-<?=isset($country[0])?$country[0]:''?>.png" width="40" onerror="this.style.display='none'"><?=isset($country[1])?$country[1]:''?></p>
        <span class="goods_price"><span>￥</span><?=$items[$i]->price?></span>
        <del class="gs_line">国内参考价:￥<?=$items[$i]->listPrice?></del>
        <!--<img class="xing" src="http://7xoo3k.com2.z0.glb.qiniucdn.com/m-shouye-xin.png">-->
        <button class="goods_see">去看看</button>
    </div>
</a>
<?php endfor;?>