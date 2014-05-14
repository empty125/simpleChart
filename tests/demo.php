<?php
/**
 * draw a demo
 */
require __DIR__.'/../src/xDraw.class.php';
require __DIR__.'/../src/xUtil.class.php';

use SimpleChart\xUtil;

$xdraw = new \SimpleChart\xDraw(400,300);

$xdraw->setShadow(array('X'=>10,'Y'=>10,'Color'=>array('R'=>180,'G'=>180,'B'=>180,'Alpha'=>60)));

$green = xUtil::hex2RGB('green',100);
$xdraw->setFormat(array(
    'Color'=>$green,
    'FontColor'=>$green,
    'BorderColor'=> $green,
));

$xdraw->setFormat('FontName', '/usr/share/fonts/wenquanyi/wqy-zenhei/wqy-zenhei.ttc');
$xdraw->setFormat('FontSize', 18);

$xdraw->drawFromPNG(0, 0, __DIR__.'/../chart/l-success.png');
$xdraw->drawText(250, 250, '过');
$xdraw->drawFilledArc(150, 150, 100, 50,-45,-90,array('Border'=>true));

$xdraw->drawFilledArc(150, 150, 102, 51,-45,-90,array('Border'=>true));

$xdraw->stroke();
