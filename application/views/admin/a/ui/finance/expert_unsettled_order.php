<style type="text/css">
.x-grid-cell .check_order_id{
  opacity: 5;
  position: relative;
  left: auto;
  line-height: 30px;
  z-index: 12;
  width: 13px;
  cursor: pointer;
}
.x-column-header .check_order_id{
  opacity: 5;
  position: relative;
  left: auto;
  line-height: 30px;
  z-index: 12;
  width: 13px;
  cursor: pointer;
}
</style>
<div class="col-xs-12 col-md-12 div_account_list">
<form action="<?php echo base_url();?>admin/a/finance/get_expert_unsettled_order" id='expert_unsettled_order' name='expert_unsettled_order' method="post" onSubmit="return check()">
    <!-- 其他搜索条件,放在form 里面就可以了 -->
                            <div class="form-group" style="display:inline-block;width:20%;margin-left: 10px;margin-top:27px;">
                                <label class="sr-only"> 产品名称 </label>
                                <input type="text" class="form-control" value="" name="productname" placeholder="产品名称"  style="display:inline;">
                            </div>
                            <div class="form-group" style="display:inline-block;width:20%;margin-top:27px;">
                              <label class="sr-only"> 订单编号 </label> <input type="text"
                                class="form-control" value="" name="ordersn" placeholder="订单编号">
                            </div>
                            <div class="form-group" style="display:inline-block;width:20%;">
                                  <button type="button" class="btn btn-darkorange active" id="searchBtn" style="margin-left: 50px;">
                                      搜索
                                   </button>
                            </div>
    <input type="hidden" name="expert_Id" value="<?php echo $expertId;?>">
     <input type="hidden" name="start_time" value="<?php echo $start_time;?>">
    <input type="hidden" name="end_time" value="<?php echo $end_time;?>">
<div id="unsettled_order_dataTable">
      <!--列表数据显示位置-->
</div>
<div class="row DTTTFooter">
<div class="col-sm-6" >
  <div class="dataTables_info" id="editabledatatable_info">
    第
    <span class='pageNum'>0</span> /
    <span class='totalPages'>0</span> 页 ,
    <span class='totalRecords'>0</span>条记录,每页
    <label>
      <select name="pageSize" id='unsettled_order_Select'
        class="form-control input-sm" >
        <option value="">
          --请选择--
        </option>
        <option value="5">
          5
        </option>
        <option value="10">
          10
        </option>
        <option value="15">
          15
        </option>
        <option value="20">
          20
        </option>
      </select>
    </label>
    条记录
  </div>
</div>
  <div class="col-sm-6">
    <div class="dataTables_paginate paging_bootstrap">
      <!-- 分页的按钮存放 -->
      <ul class="pagination"> </ul>
    </div>
  </div>
</div>
<tr><td><input type="submit" value="提交"/></td><td><input type="button" value="关闭" onclick="javascript:window.opener=null;window.open('','_self');window.close();"/></td></tr>
</form>
</div>
<?php echo $this->load->view('admin/a/common/time_script'); ?>
<script src="<?php echo base_url(); ?>assets/js/datetime/daterangepicker.js"></script>
<script src="<?php echo base_url() ;?>assets/js/bootbox/bootbox.js"></script>
<script>
$('#departure_date').daterangepicker();
/*function chooseAll(obj){
        if($(obj).checked){
            $("input[name='order[]']").each(function(){this.checked=true;});
        }else{
            $("input[name='order[]']").each(function(){this.checked=false;});
        }
    }*/

function check(){
    //获取选中的ID,设置到上级页面
    var orderIds ="" ;
    $("input[name='order[]']").each(function(){
        if(this.checked){
            orderIds+=$(this).val()+",";
        }

    });
    if(orderIds!=""){
         window.opener.document.getElementById('orderIds').value= orderIds ;
         window.opener.refreshOrder();
         window.close();
    }else{
          alert('你还未选择任何订单!');
    }
            return false ;

}


$(document).ready(function(){
  // 列数据映射配置
  var columns=[ {field : 'order_id',title : "",width : '4%',align : 'center',
              formatter: function(value,rowData,rowIndex){
                  return "<input type='checkbox' class='check_order_id' name='order[]'' id='order_check'  value="+value+">";
              } },
  {field : 'ordersn',title : '订单编号',width : '6%',align : 'center'},
      {field : 'truename',title : '预定人',width : '8%',align : 'center'},
      {field : 'productname',title : '产品标题',width : '16%',align : 'center'},
      {field : 'people_num',title : '参团人数',align : 'center', width : '6%'},
      {field : 'total_price',title : '订单金额',align : 'center', width : '6%'},

       {field : 'total_price',title : '平台管理费',align : 'center', width : '6%',
         formatter : function(value,  rowData, rowIndex){
           return (value*rowData['agent_rate']).toFixed(2);
         }
        },
        {field : 'agent_fee',title : '管家佣金',align : 'center', width : '6%'},
         {field : 'total_price',title : '结算金额',align : 'center', width : '8%',
          formatter : function(value,  rowData, rowIndex){
           return (value - value*rowData['agent_rate'] - rowData['agent_fee']).toFixed(2);
         }
       },
      {field : 'usedate',title : '出团日期',align : 'center', width : '6%'},
       {field : 'addtime',title : '下单日期',align : 'center', width : '8%'}
      ];


  var isJsonp= false ;// 是否JSONP,跨域
  initTableForm("#expert_unsettled_order","#unsettled_order_dataTable",columns,isJsonp ).load();

  $('#unsettled_order_Select').change(function(){
    initTableForm("#expert_unsettled_order","#unsettled_order_dataTable",columns,isJsonp ).load();
  });
 $("#searchBtn").click(function(){
    initTableForm("#expert_unsettled_order","#unsettled_order_dataTable",columns,isJsonp ).load();
  });

 /*
  $('#bill_Select').change(function(){
    initTableForm("#bill_record","#bill_record_dataTable",bill_columns,isJsonp ).load();
  });*/

});
</script>