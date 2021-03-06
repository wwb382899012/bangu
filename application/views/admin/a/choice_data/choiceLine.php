<div class="choice-box-line">
	<div class="cb-body">
		<h3 class="cb-title">选择线路</h3>
		<div class="cb-colse db-cancel">x</div>
		<div class="cb-search">
			<span class="cb-prompt"><!--已选择不可更改的信息提示--></span>
			<form action="#" method="post" id="cb-search-form">
				<input type="text" name="keyword" placeholder="关键词">
				<input type="text" name="linecode" placeholder="线路编号">
				<span id="cb-choice-city"></span>
				<input type="hidden" name="page_new" value="1">
				<input type="hidden" name="city_id" value="">
				<input type="hidden" name="dest_id" value="">
				<input type="hidden" name="themeId" value="">
				<input type="submit" value="搜索" id="db-submit">
			</form>
		</div>
		<div class="db-data-list">
			<ul class="db-data-line">
				<li class="db-data-row row-odd db-active">
					<div class="db-line-pic"><img src="" /></div>
					<ul>
						<li>
							<div class="db-row-title">姓名：</div>
							<div class="db-row-content">jiakairong</div>
						</li>
						<li>
							<div class="db-row-title">手机号：</div>
							<div class="db-row-content">18682327560</div>
						</li>
						<li>
							<div class="db-row-title">所在地：</div>
							<div class="db-row-content">广东省深圳市龙岗区坂田杨美村999巷666号11田杨美村999巷666号11</div>
						</li>
					</ul>
				</li>
				<li class="db-data-row">
					<div class="db-line-pic"><img src="" /></div>
					<ul>
						<li>
							<div class="db-row-title">姓名：</div>
							<div class="db-row-content">jiakairong</div>
						</li>
						<li>
							<div class="db-row-title">手机号：</div>
							<div class="db-row-content">18682327560</div>
						</li>
						<li>
							<div class="db-row-title">所在地：</div>
							<div class="db-row-content">广东省深圳市龙岗区坂田杨美村999巷666号11</div>
						</li>
					</ul>
				</li>
			</ul>
			<div class="db-pagination page-button">分页</div>
		</div>
		
		<div class="db-button">
			<div class="db-cancel">取消</div>
			<div class="db-submit line-submit">确认选择</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="/assets/ht/js/layer.js"></script>
<script>
	function createLineHtml() {
		$.ajax({
				url:'/admin/commonData/getLineJson',
				type:'post',
				dataType:'json',
				data:$("#cb-search-form").serialize(),
				success:function(data){
					if ($.isEmptyObject(data.list)) {
						$(".db-pagination").html('');
						$(".db-data-line").html('<div class="db-msg">暂无数据</div>');
					} else {
						var html = '';
						$.each(data.list ,function(key ,val){
							var overcity = val.overcity.split(',');
                                                        // 将cj和gn改为line,添加后缀.html
							// var url = $.inArray('1' ,overcity) == -1 ? '/gn/'+val.lineid : '/cj/'+val.lineid;
                                var url = $.inArray('1' ,overcity) == -1 ? '/line/'+val.lineid + '.html' : '/line/'+val.lineid + '.html';
							if (key % 2 == 1) {
								html += '<li class="db-data-row row-odd" data-val="'+val.lineid+'" data-name="'+val.linename+'">';
							} else {
								html += '<li class="db-data-row" data-val="'+val.lineid+'" data-name="'+val.linename+'">';
							}
							html += '<div class="db-data-pic"><img src="'+val.mainpic+'" /></div>';
							html += '<ul><li>';
							//html += '<div class="db-row-title">线路名：</div><div class="db-row-content"><a href="'+url+'" target="_blank" >'+val.linename+'</a></div>';
							html += '<div class="db-row-title">线路名：</div><div class="db-row-content"><a href="javascript:void(0);" onclick="see_detail('+val.lineid+')">'+val.linename+'</a></div>';
							html += '</li><li>';
							html += '<div class="db-row-title">供应商：</div><div class="db-row-content">'+val.company_name+'</div>';	
							html += '</li><li>';		
							html += '<div class="db-row-title">始发地：</div><div class="db-row-content">'+val.cityname+'<span style="float:right;margin-right:10px;color: #ff0000;">¥'+val.s_price+'</span></div>';			
							html += '</li></ul></li>';	
						})
						$(".db-data-line").html(html);
					}
					$(".db-pagination").html(data.page_string);
					rowClick();
					pageClick();
					if ($(".choice-box-line").is(':hidden')) {
						$(".choice-box-line").show();
					}
					$('html,body').animate({scrollTop:0}, 'slow');
				}
			});
	}
	function rowClick() {
		$(".db-data-row").click(function(){
			if ($(this).hasClass('db-active')) {
				$(this).removeClass('db-active');
			} else {
				$(this).addClass('db-active').siblings().removeClass('db-active');
			}
		})
	}
	function pageClick(){
		$(".db-pagination").find('li').click(function(){
			if (!$(this).hasClass('active')){
				$("#cb-search-form").find('input[name=page_new]').val($(this).find('a').attr('page_new'));
				createLineHtml();
			}
		})
	}
	$("#cb-search-form").submit(function(){
		$("#cb-search-form").find('input[name=page_new]').val(1);
		createLineHtml();
		return false;
	})
	$(".db-cancel").click(function(){
		$(".choice-box-line").hide();
	})
	//线路详情
	function see_detail(id){	
		layer.open({
			title:'线路详情',
			type: 2,
			area: ['1000px', '90%'],
			fix: false, //不固定
			maxmin: true,
			content: "<?php echo base_url('admin/a/lines/line/detail');?>"+"?id="+id+"&type=1"
		});
	}
</script>