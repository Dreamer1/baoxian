<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
        <meta name="keywords" content="<?php echo $SEO['keyword'];?>">
            <meta name="description" content="<?php echo $SEO['description'];?>">
                <link href="/muban/style/css.css" rel="stylesheet" type="text/css" />
                <script src="/muban/Scripts/jquery.js" type="text/javascript"></script>
                </head>
                <body>
                    <!--[if IE 6]>
                    <script type="text/javascript" src="/muban/Scripts/TheFuckingIE6_PNG.js"></script>
                    <script type="text/javascript">
                     DD_belatedPNG.fix('.customer');
                    </script>
                    <![endif]-->







                    <div class="base top">
                        <p></p>
<!--                        <p><a href='<?php echo siteurl($siteid);?>' onClick="this.style.behavior = 'url(#default#homepage)';
                                this.setHomePage('<?php echo siteurl($siteid);?>');">设为首页</a>|<a href="javascript:window.external.AddFavorite('<?php echo siteurl($siteid);?>','<?php echo $SEO['site_title'];?>');">加入收藏</a>
                        </p>-->
                        <div class="logo"></div>
                    </div>
                    <div class="nav">
                        <ul>


                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c8248b6e14f55ae7ab7445fed168915d&action=category&catid=0&num=7&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'7',));}?>

                            <li><a href="<?php echo siteurl($siteid);?>">首页</a></li>
                            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                            <li><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
                            <?php $n++;}unset($n); ?>

                            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

                        </ul>
                    </div>
                    <div class="clear"></div>
                    <div class="banner">
                        <div class="videoList-container" id="pcList" style="display:none;margin-bottom:0px;">
                            <div id="slide-index">          
                                <div class="slides">

                                    <div class="slide autoMaxWidth" links=[{left:'30px',top:'81px'},{left:'30px',top:'244px'},{direction:'tb'}]>	  		
                                        <div class="image" id='bi_0'>

                                            <img src="/uploadfile/2016/0309/20160309043833942.jpeg" alt="" />
                                        </div>			
                                        <div class="text" id='bt_0'></div>
                                        <div class="button" id='bb_0'></div>
                                    </div>


                                </div>
                                 <div class="slides">

                                    <div class="slide autoMaxWidth" links=[{left:'30px',top:'81px'},{left:'30px',top:'244px'},{direction:'tb'}]>	  		
                                        <div class="image" id='bi_0'>

                                            <img src="/uploadfile/2016/0309/20160309043916244.jpg" alt="" />
                                        </div>			
                                        <div class="text" id='bt_1'></div>
                                        <div class="button" id='bb_1'></div>
                                    </div>


                                </div>
                                <div class="control">	
                                    <a href="#"></a>	
                                    <a href="#"></a>

                                </div>
                            </div>			
                        </div>
                    </div>
