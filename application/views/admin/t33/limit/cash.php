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


<?php $this->load->view("admin/t33/common/js_view"); //加载公用css、js   ?>

<!--=================右侧内容区================= -->
    <div class="page-body m_w" id="bodyMsg">
    
        <!-- ===============我的位置============ -->
        <div class="current_page">
            <a href="#" class="main_page_link"><i></i>额度管理</a>
            <span class="right_jiantou">&gt;</span>
            <a href="#">额度使用明细</a>
        </div>
        
        <!-- =============== 右侧主体内容  ============ -->
        <div class="page_content bg_gray">      
            
            <!-- tab切换表格 -->
            <div class="table_content">
                <div class="itab">
                    <ul> 
                        <li static="1"><a href="#tab1" class="active">额度使用明细</a></li> 
      
                    </ul>
                </div>
                <div class="tab_content">
                    <div class="table_list">
                        <form class="search_form" method="post" action="">
                            <div class="search_form_box clear">
                                <div class="search_group">
                                    <label>营业部名称</label>
                                    <input type="text" id="name" style="width:120px;" class="search_input"/>
                                </div>
                                <div class="search_group">
                                    <label>现金额度</label>
                                    <input type="text" id="small_value" name="" class="search_input" style="float:none;width:70px;" /> -  <input type="text" id="big_value" name="" class="search_input" style="float:none;width:70px;" />
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
                                    <th>营业部名称</th>
                                    <th>现金额度</th>
                                    <th>可用额度</th>
                                
                                    <th>操作</th>
                                   <!--  <th>操作</th> -->
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



<script type="text/javascript">
	var flag=true;
	//js对象
	var object = object || {};
	var ajax_data={};
	object = {
        init:function(){ //初始化方法
            var name=$("#name").val();
            var small_value=$("#small_value").val();
            var big_value=$("#big_value").val();

            //接口数据
            var post_url="<?php echo base_url('admin/t33/sys/limit/api_cash')?>";
        	ajax_data={page:"1",small_value:small_value,big_value:big_value,name:name};
        	var list_data=object.send_ajax(post_url,ajax_data); //数据结果
        	var total_page=list_data.data.total_page; //总页数
        	 
        	//调用分页
        	laypage({
        	    cont: 'page_div',
        	    pages: total_page,
        	    jump: function(ret){
        	    	
        	    	var html=""; //html内容
		        	ajax_data.page=ret.curr; //页数
		        	var return_data=null;  //数据
		        	if(ret.curr==1&&flag==true)
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
	                	html=object.pageData(ret.curr,return_data.data.page_size,return_data.data.result);
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
        	flag=false;
        	//end
        	
        },
        pageData:function(curr,page_size,data){  //生成表格数据
        	
    	 		var str = '', last = curr*page_size - 1;
        	    last = last >= data.length ? (data.length-1) : last;
        	    for(var i = 0; i <= last; i++)
        	    {

        	        str += "<tr>";
        	        str +=     "<td>"+data[i].name+"</td>";
        	        str +=     "<td>"+toDecimal2(data[i].cash_limit)+"</td>";
        	        str +=     "<td>"+toDecimal2(data[i].credit_limit)+"</td>";
        	       
        	        //操作
        	       /*  var status_str="";
                    if(data[i].status=="1")
                   		var status_str="<a href='javascript:void(0)' class='stop_depart' data-id='"+data[i].id+"'>停用</a>";
                    else if(data[i].status=="-1")
                    	var status_str="<a href='javascript:void(0)' class='start_depart' data-id='"+data[i].id+"'>开启</a>";

                   status_str += "<a href='javascript:void(0)' class='set_bank' data-id='"+data[i].id+"'>银行账户</a>";
                   */
                   str +=     "<td><a href='javascript:void(0)' class='a_detail' data-id='"+data[i].id+"'>查看使用记录</a></td>";

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
	            	 setTimeout(function(){
	           		  layer.closeAll('loading');
	           		}, 200);  //0.2秒后消失
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
 
      }
      //object  end
    };

	
$(function(){
	object.init();

	//搜索按钮
    $("#btn_submit").click(function(){
		   object.init();
		})
	//营业部额度使用记录
	$("body").on("click",".a_detail",function(){
		var depart_id=$(this).attr("data-id");
		//depart_id="1";
	
		window.top.openWin({
		  type: 2,
		  area: ['840px', '600px'],
		  title :'额度使用详情',
		  fix: true, //不固定
		  maxmin: true,
		  content: "<?php echo base_url('admin/t33/sys/limit/limit_log');?>"+"/"+depart_id
		});
	});


});



</script>
</html>


