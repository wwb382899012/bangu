<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" >
<meta name="viewport" content="maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width,initial-scale=1.0"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="<?php echo $web['description']?>" />
<meta name="keywords" content="<?php echo $web['keyword']?>" />
<link rel="icon" href="<?php echo site_url('/bangu.ico'); ?>" type="image/x-icon"/>
<link href="/static/css/Butler_service.css" rel="stylesheet" />
<link rel="stylesheet" href="<?php echo base_url('static/css/aboutus.css'); ?>" />
<link href="/static/css/common.css" rel="stylesheet" />
<script src="/static/js/jquery-1.11.1.min.js" type=text/javascript></script>
<title>合作协议-帮游旅行网</title>
</head>
<body>
<!--头部开始-->
<?php echo $this -> load -> view('common/article_header'); ?>
<!--头部结束--> 
        <div class="butler_main">
            <div class="butler_left">
                <ul>
                    <li><a href="/service/expert_agreement" >管家服务总则</a></li>
                    <li class="xieyi_lvs"><a href="/service/cooperation" class="xieyi_lvs">管家合作协议</a></li>
                </ul>
            </div>
            <div class="float_right">
                <ul>
                 <?php if(!empty($atrr)){
					foreach ($atrr as $k=>$v){
					foreach ($v['son'] as $key=>$val){
                ?>
                	 <li><a href="#butle_<?php echo $key + 1; ?>"><?php echo $val['title'] ?></a></li>
                <?php } }} ?>
                  <!--   <li><a href="#butle_1">合作内容</a></li>
                    <li><a href="#butle_2">合作期限</a></li>
                    <li><a href="#butle_3">协议准则</a></li>
                    <li><a href="#butle_4">甲方的权利与义务</a></li>
                    <li><a href="#butle_5">乙方的权利与义务</a></li>
                    <li><a href="#butle_6">知识产权</a></li>
                    <li><a href="#butle_7">协议的终止</a></li>
                    <li><a href="#butle_8">不可抗力</a></li>
                    <li><a href="#butle_9">保密条款</a></li>
                    <li><a href="#butle_10">法律适用</a></li> -->
                </ul>
            </div>
            <div class="butler_right">
                <div class="biaiti">帮游旅行网旅游管家合作协议</div>
                <ul class="butler_list">
                    <li>甲方：<span class="fr">协议编号：BU</span></li>
                    <li>地址：</li>
                    <li>邮编：</li>
                    <li>电话：</li>
                    <li>传真：</li>
                </ul>
                <ul class="butler_list">
                    <li>乙方：深圳市帮游网络科技有限公司</li>
                    <li>地址：</li>
                    <li>邮编：</li>
                    <li>电话：</li>
                    <li>传真：</li>
                </ul>
                <div class="zhuyi">
              		  乙方在此特别提醒甲方认真阅读、充分理解本协议各条款，如果乙方一经点击“我已阅读、同意并接受”，即表示其接受了本协议，并同意受本协议各项条款的约束。
                </div>
                <div class="zhuyi">甲乙双方本着友好合作、平等互利、共创双嬴的原则，就甲方加入乙方帮游旅行网平台成为旅游管家事宜达成如下协议：</div>
       
                <?php if(!empty($atrr)){
            		foreach ($atrr as $k=>$v){
         	    	if(!empty($v['son'])){
					foreach ($v['son'] as $key=>$val){	
            	?>
                <h2 id="butle_<?php echo $key + 1; ?>"><?php echo $key + 1; ?>.<?php echo $val['title']; ?></h2>
                <?php echo $val['content']; ?>
              	<?php }}else{ echo '<br>暂无信息'; } } }else{ echo '暂无信息';} ?>
              	<div class="qianzi">
                    <div class="qianzi_le">
                        <ul>
                            <li>甲方：</li>
                            <li>(盖章)</li>
                            <li>授权代表： </li>
                            <li>签字日期： </li>
                        </ul>
                    </div>
                    <div class="qianzi_ri">
                        <ul>
                            <li>乙方：深圳市帮游网络科技有限公司</li>
                            <li>(盖章)</li>
                            <li>授权代表： </li>
                            <li>签字日期： </li>                                                            
                        </ul>
                    </div>
                </div>
              <!--<h2 id="butle_1">1.合作内容</h2>
                <ul class="butler_list">
                    <li>甲方申请成为帮游旅行网平台旅游管家，并协助游客采购乙方签约供应商提供的旅游同业产品。</li>
                </ul> 
          		<h2 id="butle_2">2.合作期限</h2>     
         		 <ul class="butler_list">
                    <li>从协议签订之日起，有效期为一年，期满如果甲方没有任何违约行为则协商重新续约。</li>
                </ul>
                <h2 id="butle_3">3.协议准则</h2>
                <ul class="butler_list">
                    <li>1）本协议内容包括本协议正文以及乙方已经和将在乙方网站上公布的各类管理与服务规则。所有规则与本协议正文具有同等法律效力，是本协议不可分割的部
    					 分。除此以外，对于乙方针对分销服务所制定的专项规则，如与乙方网站其他规则存在冲突，则以专项规则为准。</li>
                    <li>2）甲方在使用乙方提供的采购分销服务以及其他服务的同时，也自然视为承诺遵守与这些服务相关的各项规则的规定。乙方有权根据市场变化，及时、合理地
    					 更新、修订或调整各类管理与服务内容和规则（含专项规则），并在网站上以公告形式通知甲方，并在公告内容中明确生效日期，生效后的内容成为本协议
    					 的一部分。如甲方不同意相关变更，应以书面形式通知乙方终止本协议。甲方在相关变更生效后，继续使用乙方服务则表示甲方自动接受经修订的协议。除
     					 附有特别声明外，乙方服务新内容均受本协议约束。</li>
                    <li>3）双方签署本协议后，本协议即在甲方和乙方之间产生法律效力。本协议不涉及乙方的其他用户与甲方之间发生的法律关系和产生的法律纠纷。</li>
                </ul>
                <h2 id="butle_4">4.甲方的权利与义务</h2>
                <ul class="butler_list">
                    <li>1）甲方有权在服务有效期内，享受由乙方提供的帮游旅行网技术服务。</li>
                    <li>2）甲方有权利拥有自己在帮游旅行网的账户名及登陆密码，并有权利使用自己的账户名及密码随时登陆乙方帮游旅行网平台。通过乙方系统登录的甲方身份证
     					      信息（包括不限于用户名、密码等）所操作的行为将视为甲方行为或甲方的授权行为，由甲方承担相应的后果。因甲方保管不善、密码丢失等行为造成的任
     					      何损失，由甲方自行承担。</li>
                    <li>3）甲方有权根据本协议的规定以及帮游旅行网平台上发布的相关规则利用乙方平台查询产品信息、为游客提供定制行程服务、向供应商询价了解旅游产品、向
    					      游客销售旅游产品、参加平台上的有关活动以及其它相关信息服务。</li>
                    <li>4）甲方有义务向乙方提供本人身份证、个人职业简历、已认证的个人支付宝账号。并保证其向乙方提供的全部证明文件真实、准确、有效且不存在超过时效问
     					      题。</li>
                    <li>5）甲方有义务在注册时提供自己的真实资料，并保证诸如电子邮件地址、联系电话、联系地址、邮政编码等真实有效，保证乙方可通过上述联系方式与甲方进
     					      行联系。同时，甲方也有义务在相关资料实际变更时及时更新有关注册资料。甲方保证不以他人资料在乙方帮游旅行网平台进行注册或认证，若由此产生的
     					      任何争议、纠纷、处罚、诉讼、仲裁、投诉、索赔、损失等均由甲方自行负责处理并承担全部法律责任，并且乙方有权立即终止甲方使用甲方账户的权利，
     					      并终止与商家的全部合作。</li>
                    <li>6）甲方承诺在协议期内，上述信息（包括相关资质证明文件）的任何变更甲方都将及时通知乙方。如因上述原因发生纠纷或被相关国家主管机关处罚，甲方应
    					       当独立承担全部责任，如给乙方造成损失的，甲方同意赔偿乙方全部损失。</li>
                    <li>7）在向供应商采购过程中，甲方需遵守：</li>
                    <li class="mar-le">⑴、甲方保证，最终销售给消费者的零售价格符合供应商的市场指导价要求；</li>
                    <li class="mar-le">⑵、甲方保证，通过定制或者包团流程所采购产品生成的销售订单均由原产品供应商接待；</li>
                    <li class="mar-le">⑶、甲方有义务在交易完成过程中使用平台中的功能向平台和供应商提供出游游客的完整信息资料，以便供应商进行相应的订位和下单的操作。</li>
                    <li class="mar-le">⑷、甲方有义务在交易中引导游客使用平台在线支付功能完成交易，并督促游客尽快通过线下方式支付剩余的金额。</li>
                    <li>8）甲方应保证在交易过程中遵守诚实守信原则，不得采取不正当竞争行为，不扰乱网上交易的正常秩序，不从事与网上交易无关的行为；</li>
                    <li>9）甲方承诺在使用帮游旅行网平台销售产品时实施的所有行为均遵守国家法律、法规和乙方的相关规定。如因违反上述行为产生的任何后果，甲方须自行承担。</li>
                    <li>10） 甲方承诺对乙方帮游旅行网平台签约供应商提供的产品、服务进行客观公正的销售引导和评价。</li>
                </ul>
                <h2 id="butle_5">5.乙方的权利与义务</h2>
                <ul class="butler_list">
                    <li>1）乙方保留自行决定对帮游旅行网旅游管家服务及相关功能、应用软件等进行变更升级的权利。同时保留在分销服务中开发新的模块、功能、软件、其它语种
     					和文字服务的权利。上述所有新的模块、功能、软件服务的提供，除非乙方另有说明，否则仍适用本协议。</li>
                    <li>2）乙方有权对甲方的注册信息及经营行为进行查阅，若发现存在任何问题或怀疑，均有权向甲方发出询问及要求改正的通知。对于甲方不及时改正或者性质严
     					 重的信息直接作出删除等处理。。</li>
                    <li>3）如甲方不履行与平台和供应商之间的支付行为、拖欠款项，乙方有权关闭甲方的旅游管家账号及帮游旅行网网店。</li>
                    <li>4）如甲方违反本协议的约定，乙方有权取消甲方旅游管家资格并删除账号。</li>
                    <li>5）经国家生效法律文书或行政处罚决定确认甲方存在违法行为，或者乙方有足够事实依据可以认定甲方存在违法或违反协议行为的，乙方有权进行处理并在帮
     					游旅行网平台公布甲方的违法和/或违规行为。</li>
                    <li>6）如因甲方违约或甲方的其他原因导致乙方遭受损失的，包括但不限于乙方向用户支付赔偿或政府罚款，则乙方有权从甲方现金账户中直接扣除相应的费用，
    					 扣除费用不足以抵偿乙方损失的，甲方还应当另行支付。</li>
                    <li>7）乙方对于甲方在帮游旅行网平台旅游管家注册、使用帮游旅行网平台服务过程中，所遇到的有关问题及反馈，应及时回复处理。乙方有义务维护帮游旅行网
     					平台的正常使用，并努力提升和改进技术，对相关产品服务进行维护和升级。对系统功能的增加或修改，或因定期、不定期的维护而暂缓提供服务，应以公
    				         告等方式向甲方发出通知。</li>
                </ul>
                <h2 id="butle_6">6.知识产权</h2>
                <ul class="butler_list">
                    <li>除国家法律法规另有明确规定或本协议另有明确约定外，本协议项下，甲方提供的服务和服务成果的知识产权均归甲方所有。未经甲方事先书面授权，乙方
						不得为任何目的和形式使用甲方商标、标志及企业商号、字号等，否则，乙方应承担由此引致的全部法律责任（包括但不限于赔偿给甲方造成的全部损失）。</li>
                    <li>本网站禁止制作、复制、发布、传播等具有反动、色情、暴力、淫秽等内容的信息，一经发现，立即删除。若您因此触犯法律，我们对此不承担任何法律责任。 </li>
                    <li>本网站会员自行上传或通过网络收集的资源，我们仅提供一个展示、交流的平台，不对其内容的准确性、真实性、正当性、合法性负责，也不承担任何法律责任。</li>
                    <li>任何单位或个人认为通过本网站网页内容可能涉嫌侵犯其著作权，应该及时向我们提出书面权利通知，并提供身份证明、权属证明及详细侵权情况证明。我们收
						到上述法律文件后，将会依法尽快处理。</li>
                </ul>
                <h2 id="butle_7">7.协议的终止</h2>
                <ul class="butler_list">
                    <li>1）依照本协议准则，甲方发生违反本协议的相关约定或相关协议执行原则，包括但不限于甲方违反向乙方及帮游旅行网平台其他用户的承诺或保证，乙方保留
     					和享有单方面终止本协议的权利。</li>
                    <li>2）对于甲方相关资质证明出现无效、虚假、信息变更或甲方禁止使用网络推广并提供公司声明文件使得甲方不再具备履行本协议条件的情形出现时，乙方有权
    					 立即终止本协议。</li>
                    <li>3）甲方在协议期内未在帮游旅行网平台开展经营活动，并在乙方发出询问通知后15天内，甲方仍未采取相应措施，乙方有权终止本协议。</li>
                    <li>4）针对以上第1、2、3条款的情况，乙方有权单方终止本协议。</li>
                    <li>5）协议终止前后有关事项的处理：</li>
                    <li class="mar-le">⑴、协议终止前：甲方已经与第三方就某产品或服务信息达成交易协议的，乙方根据情况可以在协议终止后保留该项交易30天，且乙方有权在协议终止时，
					将协议终止的的情况通知该交易中的另一方。</li>
                    <li class="mar-le">⑵、协议终止后：对于旅游管家账号及相关的任何信息，乙方没有为甲方保留的义务。对于甲方在帮游旅行网平台上任何未曾阅读或发送的信息，乙方没有
					义务转发给甲方或第三方。乙方亦没有义务因此向甲方或任何第三方承担相关责任；</li>
                    <li class="mar-le">⑶、甲方对于在协议终止前的行为所导致的任何赔偿和责任，必须完全且独立地承担；</li>
                    <li class="mar-le">⑷、协议终止后，乙方有权保留甲方的注册数据及在帮游旅行网平台上的行为记录。如甲方在协议终止前在帮游旅行网平台上存在违法或违反协议的行为，
					乙方仍可行使本协议所规定的相关权利；</li>
                    <li>6）协议终止后，乙方在五个工作日内将甲方现金账户余额如数退还到指定账户内。</li>
                </ul>
                <h2 id="butle_8">8.不可抗力</h2>
                <ul class="butler_list">
                    <li>任何一方遇有不能预见、不能避免的客观事件（包括但不限于自然灾害以及社会事件以及因网站所具有的网络技术和网络媒体的特殊性质而产生的包括黑客
						攻击、电信部门技术调整导致的影响、因政府管制而造成的暂时性关闭等在内的任何影响网络正常经营的因素等）而全部或部分不能履行本协议或迟延履行本协
						议，甲乙双方相互不承担违约责任。</li>
                </ul>
                <h2 id="butle_9">9.保密条款</h2>
                <ul class="butler_list">   
                    <li>除适用之法律法规另有规定外，甲乙双方对于本合同内容及因履行本合同而获知的另一方的商业和技术秘密负有保密义务，任何一方不得将本合同内容及已
						获知的另一方的商业和技术秘密泄露或以其他任何变相形式告知任何非本合同当事人，或用于除本合同履行之外的其他目的</li>
                    <li>如果不同意本网站对服务条款所做的修改，用户有权停止使用帮游旅行网服务。如果用户继续使用帮游旅行网服务，则视为用户接受服务条款的变动。</li>
                </ul>
                <h2 id="butle_10">10.法律适用</h2>
                <ul class="butler_list">
                    <li>本协议适用中华人民共和国法律,或参照通用的国际商业惯例和行业惯例。本协议经甲方在线签订后生效，执行如有异议，双方应协商解决，协商不成的，任
						何一方可向乙方所在地有管辖权的人民法院提请诉讼解决。</li>
                    <li>如双方就本协议内容或其执行发生任何争议，双方应尽量友好协商解决；协商不成时，任何一方均可向本网站所在地的人民法院提起诉讼。</li>
                </ul>
                <div class="qianzi">
                    <div class="qianzi_le">
                        <ul>
                            <li>甲方：</li>
                            <li>(盖章)</li>
                            <li>授权代表： </li>
                            <li>签字日期： </li>
                        </ul>
                    </div>
                    <div class="qianzi_ri">
                        <ul>
                            <li>乙方：深圳市帮游网络科技有限公司</li>
                            <li>(盖章)</li>
                            <li>授权代表： </li>
                            <li>签字日期： </li>                                                            
                        </ul>
                    </div>
                </div>-->
            </div>
        </div>
	<div style="winth:100%; background: #fff;margin-top:50px; border-top:1px solid #ccc; border-bottom:1px solid #ccc;">
<?php echo $this -> load -> view('common/article_footer'); ?>
</div>

<script type="text/javascript">
$(".float_right ul li a").click(function() {
	$(".float_right ul li a").removeClass("float_on");
	$(this).addClass("float_on");
	$(".float_right ul li a").css("border-left", "3px solid #fff");
	$(this).css("border-left", "3px solid #4c8704");
});
</script>