<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>my title</title>
<style type="text/css">
.yourclass{width:420px; height:240px; background-color:#81BA25; box-shadow: none; color:#fff;}
.yourclass .layui-layer-content{ padding:20px;}
.show_select
</style>
</head>
<body>


<?php 

$this->load->view("admin/t33/common/js_view"); //加载公用css、js
$this->load->view("admin/t33/common/dest_tree"); //加载树形营业部   

?>

<!--=================右侧内容区================= -->
    <div class="page-body m_w" id="bodyMsg">
    
        <!-- ===============我的位置============ -->
        <div class="current_page">
            <a href="<?php echo base_url('admin/t33/role/menu_list/index');?>" class="main_page_link"><i></i>菜单管理</a>
            <span class="right_jiantou">&gt;</span>
            <a href="#">所有订单</a>
        </div>
        
        <!-- =============== 右侧主体内容  ============ -->
        <div class="page_content bg_gray">      
            
            <!-- tab切换表格 -->
            <div class="table_content">
                <div class="itab">
                    <ul data-value="0"> 
                        <li static="0"><a href="#tab1" class="active">全部订单</a></li> 
                        <li static="1"><a href="#tab1">预留位</a></li> 
                        <li static="2"><a href="#tab1">已留位</a></li> 
                        <li static="3"><a href="#tab1">已确认</a></li> 
                        <li static="4"><a href="#tab1">出团中</a></li> 
                        <li static="5"><a href="#tab1">行程结束</a></li> 
                        <li static="6"><a href="#tab1">已取消</a></li> 
                        <li static="7"><a href="#tab1">改价/退团</a></li> 
      
                    </ul>
                </div>
                <div class="tab_content">
                    <div class="table_list">
                        <form class="search_form" method="post" action="">
                            <div class="search_form_box clear">
                                <div class="search_group">
                                    <label>目的地：</label>
                                    <input type="text" id="dest_id" onfocus="showMenu(this.id);" placeholder="输入关键字搜索" onkeyup="showMenu(this.id,this.value);" class="search_input" style="width:180px;" />
                                </div>
                            	
                                <div class="search_group status_div">
                                    <label>订单状态：</label>
                                    <div class="form_select" style="margin-right:0;">
                                        <div class="search_select div_order">
                                            <div class="show_select order_status" data-value="0" style="width:96px;">全部</div>
                                            <ul class="select_list">
                                                    <li value="0">全部</li>
                                                    <li value="1">预留位</li>
                                                    <li value="2">已留位</li>
	                                                <li value="3">已确认</li>
	                                                <li value="4">出团中</li>
	                                                <li value="5">行程结束</li>
	                                                <li value="6">已取消</li>
	                                                <li value="7">改进/退团</li>
                                            </ul>
                                            <i></i>
                                        </div>
                                        <input type="hidden" name="" value="" class="select_value"/>
                                        </div>
                               </div>
                                <div class="search_group">
                                    <label>订单编号：</label>
                                    <input type="text" id="ordersn" name="" class="search_input" style="width:90px;" />
                                </div>
                                <div class="search_group">
                                    <label>产品名称：</label>
                                    <input type="text" id="productname" name="" class="search_input" style="width:120px;" />
                                </div>
                                 <div class="search_group">
                                    <label>营业部：</label>
                                   <input type="text" id="depart_id" onfocus="showMenu_depart(this.id,this.value);" onkeyup="showMenu_depart(this.id,this.value);" placeholder="输入关键字搜索" class="search_input" data-id="" style="width:180px;"/>
                                </div>
                                <div class="search_group">
                                    <label>供应商：</label>
                                    <input type="text" id="supplier_name" name="" class="search_input" style="width:90px;" />
                                </div>
                                 <div class="search_group">
                                    <label>出发地：</label>
                                    <input type="text" id="startplace" name="" class="search_input" style="width:90px;" />
                                </div>
                                 <div class="search_group">
                                    <label>销售姓名：</label>
                                    <input type="text" id="expert_name" name="" class="search_input" style="width:90px;" />
                                </div>
                                <div class="search_group">
                                    <label>出团日期：</label>
                                    <input class="search_input" type="text" id="starttime" data-date-format="yyyy-mm-dd" value="" placeholder="" style="float: none;width:90px;"> ~ <input class="search_input" type="text" id="endtime" data-date-format="yyyy-mm-dd" value="" placeholder="" style="float: none;width:90px;">
                                </div>
                                 <div class="search_group">
                                    <label style='width:42px;'>团号：</label>
                                    <input type="text" id="item_code" name="" class="search_input" style="width:90px;" />
                                </div>
              
                               <!-- 搜索按钮 -->
                                <div class="search_group">
                                    <input type="button" id="btn_submit" name="submit" class="search_button" value="搜索"/>
                                </div>
           
                            </div>
                        </form>
                        <table class="table table-bordered table_hover">
                            <thead class="">
                                <tr>
                                    <th width="70">订单编号</th>
                                    <th width="100">团号</th>
                                    <th width="150">产品名称</th>
                                    <th width="75">出团日期</th>
                                    <th width="50">人数</th>
                                    <th width="50">天数</th>
                                    
                                    <th width="70">应收</th>
                                    <th width="70">已收款</th>
                                    <th width="70">结算价</th>
                                    <th width="70">已结算</th>
                                    <th width="50">操作费</th>
<!--                                     <th width="70">未结算</th> -->
                                    <th width="80">销售部门</th>
                                     <th>销售员</th> 
<!--                                     <th>下单时间</th> -->
                                    <th width="70">状态</th>
                                    <th width="50">操作</th>
                                </tr>
                            </thead>
                            <tbody class="data_rows">
                            <!--  <tr>
                                    <td style="text-align:left"> <a target="_blank" href="http://localhost/admin/b2/line_apply/line_detial_apply?id=673">海外技术部马尔代夫欢乐岛Fun</a></td>
                                    <td>
                                                                                           中国
                                    </td>
                                    <td>深圳市</td>
                                    <td>1%</td>
                                    <td>深圳海外国际技术部</td> 
                                    <td>1%</td>
                                    <td>深圳海外国际技术部</td> 
                                    <td>
                                    <a href="javascript:void(0)">修改</a>
                                    <a href="javascript:void(0)">停用</a>
                                    <a href="javascript:void(0)">启用</a>
                                    </td>
                                </tr>--> 
      
                            </tbody>
                        </table>
                        <!-- 暂无数据 -->
                        <div class="no-data" style="display:none;">木有数据哟！换个条件试试</div>
                    </div>                   
                </div>
                <div id="page_div"></div>
            </div>

        </div>
        
    </div>
   

  <!-- 复制订单 弹层 -->
 <div class="fb-content" id="depart_div" style="display:none;">
    <div class="box-title">
        <h5>复制订单</h5>
        <span class="layui-layer-setwin">
            <a class="layui-layer-ico layui-layer-close layui-layer-close1" href="javascript:;">×</a>
        </span>
    </div>
    <div class="fb-form">
        <form method="post" action="#" id="add-data" class="form-horizontal">
           
           <div class="form-group">
                <div class="fg-title" style="width:18%;">旅行社id：<i>*</i></div>
                <div class="fg-input" style="width:71%;"><input type="text" id="union_id" class="showorder" name="showorder"></div>
            </div>
            <div class="form-group">
                <div class="fg-title" style="width:18%;">管家id：<i>*</i></div>
                <div class="fg-input" style="width:77%;"><input type="text" id="expert_id" class="showorder" name="showorder"></div>
            </div>
            
            <div class="form-group">
                <div class="fg-title" style="width:18%;">供应商id：<i>*</i></div>
                <div class="fg-input" style="width:77%;"><input type="text" id="supplier_id" class="showorder" name="showorder"></div>
            </div>
            
            <div class="form-group">
                <input type="hidden" name="id" value="">
                <input type="button" class="fg-but layui-layer-close" value="取消">
                <input type="button" class="fg-but btn_add_depart" value="确定">
            </div>
            <div class="clear"></div>
        </form>
    </div>
</div> 

<script type="text/javascript">

	//js对象
	var object = object || {};
	var ajax_data={};
	object = {
        init:function(){ //初始化方法
            var productname=$("#productname").val();
            var ordersn=$("#ordersn").val();
            var starttime=$("#starttime").val();
            var endtime=$("#endtime").val();
            var item_code=$("#item_code").val();
            var expert_name=$("#expert_name").val();
            var destname=$("#destname").val();
            var startplace=$("#startplace").val();
            var order_code=$(".itab ul").attr("data-value");
            var dest_id=$("#dest_id").attr("data-id");
            var supplier_name=$("#supplier_name").val();
            var depart_id=$("#depart_id").attr("data-id");

            //接口数据
            var post_url="<?php echo base_url('admin/t33/role/menu_list/api_all_order')?>";
            ajax_data={page:"1",dest_id:dest_id,productname:productname,ordersn:ordersn,starttime:starttime,endtime:endtime,item_code:item_code,expert_name:expert_name,destname:destname,startplace:startplace,order_code:order_code,supplier_name:supplier_name,depart_id:depart_id};
        	var list_data=object.send_ajax(post_url,ajax_data); //数据结果
        	var total_page=list_data.data.total_page; //总页数
        	
        
        	//调用分页
        	laypage({
        	    cont: 'page_div',
        	    pages: total_page,
        	    jump: function(ret){

        	    	var html="";  //html内容
		        	ajax_data.page=ret.curr; //页数
		        	var return_data=null;  //数据
		        	if(ret.curr==1)
		        	{
		        		return_data=list_data;
		        	}
		        	else
		        	{
		        		return_data=object.send_ajax(post_url,ajax_data);
			        }

		        	//写html内容
		        	if(return_data.code=="2000")
		        	{
	                	html=object.pageData(ret.curr,return_data.data.page_size,return_data.data.result,return_data.data.account);
	                	$(".no-data").hide();
		        	}
		        	else if(return_data.code=="4001")
		        	{
			        	html="";
			        	$(".no-data").show();
			        }
		        	else
		        	{
		        		layer.msg(return_data.msg, {icon: 1});
		        		$(".no-data").hide();
			        }
                	
        	        $(".data_rows").html(html);
        	        
        	    }
        	    
        	})
            //end
        },
        pageData:function(curr,page_size,data,account){  //生成表格数据
        	
    	 		var str = '', last = curr*page_size - 1;
        	    last = last >= data.length ? (data.length-1) : last;
        	    
        	    str +="<tr><td>总计：</td><td colspan='3'></td><td>"+(account.sum_people_num==""?'0':account.sum_people_num)+"</td><td colspan='10'></td>";
        	    for(var i = 0; i <= last; i++)
        	    {
                    var tr_class="order_type2";
                    if(data[i].order_code=="3"||data[i].order_code=="4"||data[i].order_code=="5")
                    	tr_class="order_type1";
                    else  if(data[i].order_code=="6"||data[i].order_code=="7")
                    	tr_class="order_type3";
        	        str += "<tr class=''>";
        	        str +=     "<td><a href='javascript:void(0)' class='a_order' order-id='"+data[i].id+"'>"+data[i].ordersn+"</a></td>";
        	        str +=     "<td align=\"left\"><a href='javascript:void(0)' class='a_team' data-id='"+data[i].item_code+"'>"+data[i].item_code+"</a></td>";
         	        str +=     "<td class='td_long' align=\"left\"><a href='javascript:void(0)' class='a_line' line-id='"+data[i].productautoid+"' line-name='"+data[i].productname+"'>"+data[i].productname+"</a></td>";
         	        str +=     "<td>"+data[i].usedate+"</td>"; 
          	        str +=     "<td align=\"right\">"+data[i].total_people+"</td>"; 
         	        str +=     "<td>"+data[i].lineday+"</td>";
         	        
        	        str +=     "<td>"+data[i].total_price+"</td>"; //订单金额
        	        str +=     "<td>"+data[i].receive_price+"</td>"; //已收款
        	        str +=     "<td>"+data[i].supplier_cost+"</td>";  //结算价=供应商成本-平台佣金
        	        str +=     "<td>"+data[i].balance_money+"</td>";  //已结算
        	        str +=     "<td>"+data[i].all_platform_fee+"</td>";  //平台佣金
//         	        str +=     "<td>"+data[i].nopay_money+"</td>";  //未结算

        	       
        	        str +=     "<td>"+data[i].depart_name+"</td>";
         	        str +=     "<td style='width:50px;'>"+data[i].expertname+"</td>";
        	       
//         	        str +=     "<td>"+data[i].addtime+"</td>";
        	        str +=     "<td>"+data[i].order_status+"</td>";
        	        //操作
        	        var status_str="";
                   /*  if(data[i].status=="2")
                   		var status_str="<a href='javascript:void(0)' class='close_expert' title='"+data[i].id+"'>停用</a>";
                    else if(data[i].status=="-1")
                    	var status_str="<a href='javascript:void(0)' class='open_expert' title='"+data[i].id+"'>开启</a>";
 */
                  // status_str += "<a href='javascript:void(0)' class='a_trip' line-id='"+data[i].lineid+"'>行程</a>";
                   
                   str +=     "<td><a href='javascript:void(0)' class='a_order' order-id='"+data[i].id+"'>复制</a>"+status_str+"</td>";
        	       str += "</tr>";

        	   }
        	    
        	    return str;
           
        },
        send_ajax:function(url,data){  //发送ajax请求，有加载层
        	  layer.load(2);//加载层
	          var ret;
	    	  $.ajax({
	        	 url:url,
	        	 type:"POST",
	             data:data,
	             async:false,
	             dataType:"json",
	             success:function(data){
	            	 ret=data;
	            	 layer.closeAll('loading');
	            	 /*setTimeout(function(){
	           		  layer.closeAll('loading');
	           		}, 100);*/  //0.2秒后消失
	             },
	             error:function(data){
	            	 ret=data;
	            	 //layer.closeAll('loading');
	            	 layer.msg('请求失败', {icon: 2});
	             }
	                     
	        	});
	      	    return ret;
    	  
          
        },
        send_ajax_noload:function(url,data){  //发送ajax请求，无加载层
      	      //没有加载效果
	          var ret;
	    	  $.ajax({
	        	 url:url,
	        	 type:"POST",
	             data:data,
	             async:false,
	             dataType:"json",
	             success:function(data){
	            	 ret=data;
	            	
	             },
	             error:function(){
	            	 ret=data;
	             }
	                     
	        	});
	      	    return ret;
 
      },
      accAdd:function(arg1, arg2){
    	  var r1, r2, m, c;
  	    try {
  	        r1 = arg1.toString().split(".")[1].length;
  	    }
  	    catch (e) {
  	        r1 = 0;
  	    }
  	    try {
  	        r2 = arg2.toString().split(".")[1].length;
  	    }
  	    catch (e) {
  	        r2 = 0;
  	    }
  	    c = Math.abs(r1 - r2);
  	    m = Math.pow(10, Math.max(r1, r2));
  	    if (c > 0) {
  	        var cm = Math.pow(10, c);
  	        if (r1 > r2) {
  	            arg1 = Number(arg1.toString().replace(".", ""));
  	            arg2 = Number(arg2.toString().replace(".", "")) * cm;
  	        } else {
  	            arg1 = Number(arg1.toString().replace(".", "")) * cm;
  	            arg2 = Number(arg2.toString().replace(".", ""));
  	        }
  	    } else {
  	        arg1 = Number(arg1.toString().replace(".", ""));
  	        arg2 = Number(arg2.toString().replace(".", ""));
  	    }
  	    return (arg1 + arg2) / m;
      }
      //object  end
    };

var copy_order_id=""; //要复制的订单
$(function(){
	object.init();

	//tab切换事件
	$(".itab ul li").click(function(){

		    var value=$(this).attr("static");
		    $(".itab ul").attr("data-value",value);
		    if(value=="0")
			    $(".status_div").show();
		    else
			    $(".status_div").hide();
		    object.init();
		    
   })
   //订单状态
   $(".div_order ul li").click(function(){
		var value=$(this).attr("value");
		//$(".div_order .order_status").attr("data-value",value);
		$(".itab ul").attr("data-value",value);
	})
   $("#btn_submit").click(function(){
	   object.init();
	})
	//日历控件
	$('#starttime').datetimepicker({
		lang:'ch', //显示语言
		timepicker:false, //是否显示小时
		format:'Y-m-d', //选中显示的日期格式
		formatDate:'Y-m-d',
	});
	//日历控件
	$('#endtime').datetimepicker({
		lang:'ch', //显示语言
		timepicker:false, //是否显示小时
		format:'Y-m-d', //选中显示的日期格式
		formatDate:'Y-m-d',
	});
	
	//线路详情    on：用于绑定未创建内容
	$("body").on("click",".a_line",function(){
		var line_id=$(this).attr("line-id");
		var line_name=$(this).attr("line-name");
		
		window.top.openWin({
		  title:line_name,
		  type: 2,
		  area: ['1000px', '80%'],
		  fix: true, //不固定
		  maxmin: true,
		  content: "<?php echo base_url('admin/t33/sys/line/detail');?>"+"?id="+line_id
		});
		
	});
	//团号下面的所有订单
	$("body").on("click",".a_team",function(){
		var id=$(this).attr("data-id");
	    var title=id+"团号下的所有订单";
		window.top.openWin({
		  type: 2,
		  area: ['78%', '80%'],
		  title :title,
		  fix: true, //不固定
		  maxmin: true,
		  content: "<?php echo base_url('admin/t33/sys/approve/team_order');?>"+"/"+id
		});
	});
	//复制订单    on：用于绑定未创建内容
	$("body").on("click",".a_order",function(){
		var order_id=$(this).attr("order-id");
		copy_order_id=$(this).attr("order-id");
		layer.open({
			  type: 1,
			  title: false,
			  closeBtn: 0,
			  area: '500px',
			  //skin: 'layui-layer-nobg', //没有背景色
			  shadeClose: false,
			  content: $('#depart_div')
			});
	});
	//复制订单提交按钮
	$("body").on("click",".btn_add_depart",function(){
		var flag = COM.repeat('btn');//频率限制
    	if(!flag)
    	{
			var union_id=$("#depart_div #union_id").val();
			var expert_id=$("#depart_div #expert_id").val();
			var supplier_id=$("#depart_div #supplier_id").val();
		  
	        if(union_id=="") {tan('请填写旅行社id');return false;}
	        if(expert_id=="") {tan('请填写管家id');return false;}
	        if(supplier_id=="") {tan('请填写供应商id');return false;}
	        
	        var url="<?php echo base_url('admin/t33/role/menu_list/api_copy_order');?>";
	        var data={order_id:copy_order_id,union_id:union_id,expert_id:expert_id,supplier_id:supplier_id};
	        var return_data=object.send_ajax_noload(url,data);
	        if(return_data.code=="2000")
	        {
	        	t33_close();
				tan2(return_data.data);
				t33_refresh();
	        }
	        else
	        {
	            tan(return_data.msg);
	        }
    	}
		
	})


});



</script>
</html>


