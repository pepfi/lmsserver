<div class="row">AP查询</div>
<form action='/device/search' method="post">
<div class="row" style='margin-top:3px'>
    <div class='col-md-1' style="padding-top:6px;padding-left:11px">MAC</div>
    <div class='col-md-2'><input type="text" name='mac' class="form-control" id="" placeholder="MAC"></div>
    <div class='col-md-1' style="padding-top:6px;padding-left:11px">热点名称</div>
    <div class='col-md-2'>
        <select class="form-control">
          <option></option>
          <option>未分配</option>
        </select>    
    </div>
    <div class='col-md-1' style="padding-top:6px;padding-left:11px">设备状态</div>
    <div class='col-md-2'>
        <select class="form-control" name='state'>
          <option value=""></option>
          <option value='1'>在线</option>
          <option value="0">离线</option>
        </select>
    </div>
    <div class='col-md-1' style="padding-top:6px;padding-left:11px">IpAddress</div>
    <div class='col-md-2'><input type="text" name='ip_address' class="form-control" id="" placeholder="IpAddress"></div>
</div>
<div class="row" style='margin-top:3px'>
    <div class='col-md-1' style="padding-top:6px;padding-left:11px">固件版本</div>
    <div class='col-md-2'><input type="text" name='firmware_version' class="form-control" id="" placeholder="固件版本"></div>
    <div class='col-md-1' style="padding-top:6px;padding-left:11px">时长类型</div>
    <div class='col-md-2'>
        <select class="form-control">
          <option></option>
          <option>在线时长(h)</option>
          <option>离线时长(h)</option>
          <option>注册时长(h)</option>
        </select>    
    </div>
    <div class='col-md-1' style="padding-top:6px;padding-left:11px">起始</div>
    <div class='col-md-2'><input type="text" class="form-control" id="" placeholder="起始"></div>
    <div class='col-md-1' style="padding-top:6px;padding-left:11px">结束</div>
    <div class='col-md-2'><input type="text" class="form-control" id="" placeholder="结束"></div>
</div>
<div class="row" style='margin-top:3px'>
    <div class='col-md-1' style="padding-left:11px"><h6>首次注册时间</h6></div>
    <div class='col-md-2'><input type="text" class="sang_Calender" id="" placeholder="Email" name='first_registration_time_start'></div>
    <div class='col-md-1' style="padding-top:6px;padding-left:11px"><-----------></div>
    <div class='col-md-2'><input type="text" class="sang_Calender" id="" placeholder="Email" name='first_registration_time_end'></div>
    <div class='col-md-1' style="padding-left:11px"><h6>最后注册时间</h6></div>
    <div class='col-md-2'><input type="text" class="sang_Calender" id="" placeholder="Email" name='last_registration_time_start'></div>
    <div class='col-md-1' style="padding-top:6px;padding-left:11px"><-----------></div>
    <div class='col-md-2'><input type="text" class="sang_Calender" id="" placeholder="Email" name='last_registration_time_end'></div>
</div>
<div class="row" style='margin-top:3px'>
    <div class='col-md-1' style="padding-top:6px;padding-left:11px">设备编号</div>
    <div class='col-md-2'><input type="text" class="form-control" id="" placeholder="设备编号"></div>
    <div class='col-md-1' style="padding-top:6px;padding-left:11px">内容版本</div>
    <div class='col-md-2'><input type="text" name='content_version' class="form-control" id="" placeholder="内容版本"></div>
    <div class='col-md-1' style="padding-top:6px;padding-left:11px">IP归属地</div>
    <div class='col-md-2'><input type="text" name='ip_location' class="form-control" id="" placeholder="IP归属地"></div>
    <div class='col-md-1' style="padding-top:6px;padding-left:11px">&nbsp;</div>
    <div class='col-md-2'><input type="submit" class="btn btn-primary" value="搜索"></div>
</div>
</form>
<div class="row" style="border-bottom:1px solid black">&nbsp;</div>
<div class="row">AP分配状态列表</div>
<div class="row" style="margin-bottom:4px">
    <div class="col-md-1"><button type="button" class="btn btn-default btn-xs">删除</button></div>
    <div class="col-md-1"><button type="button" class="btn btn-default btn-xs">批量分配设备</button></div>
    <div class="col-md-1"><button type="button" class="btn btn-default btn-xs">解除绑定</button></div>
    <div class="col-md-1"><button type="button" class="btn btn-default btn-xs">下载</button></div>
    <div class="col-md-1"><button type="button" class="btn btn-default btn-xs">上传</button></div>
    <div class="col-md-1"><button type="button" class="btn btn-default btn-xs">下发命令</button></div>
    <div class="col-md-1"><button type="button" class="btn btn-default btn-xs">帮助</button></div>
    <div class="col-md-2"></div>
    <div class="col-md-1"></div>
    <div class="col-md-1">每页显示：</div>
    <div class="col-md-1">
        <a href="/device/index/per_page/1">1</a>
        <a href="/device/index/per_page/2">2</a>
        <a href="/device/index/per_page/3">3</a>
        <a href="/device/index/per_page/4">4</a>
    </div>
    
</div>
<div>
    <table width='100%'>
        <tr style='background:#337ab7;color:white'>
            <td width='5%'>&nbsp;&nbsp;<input type="checkbox"></td>
            <td width='13%'>MAC</td>
            <td width='11%'>IpAddress</td>
            <td width='8%'>IP归属地</td>
            <td width='8%'>所属热点</td>
            <td width='11%'>设备编号</td>
            <td width='7%'>内容版本</td>
            <td width='13%'>首次注册时间</td>
            <td width='13%'>最后注册时间</td>
            <td width='6%'>设备状态</td>
            <td width='5%'>操作</td>
        </tr>
        <?php foreach($deviceinfo->result() as $row):?>
        <tr>
            <td width='5%'>&nbsp;&nbsp;<input type="checkbox"></td>
            <td width='13%'><?php echo $row->mac;?></td>
            <td width='11%'><?php echo $row->ip_address;?></td>
            <td width='8%'><?php echo $row->ip_location;?></td>
            <td width='8%'></td>
            <td width='11%'></td>
            <td width='7%'><?php echo $row->content_version;?></td>
            <td width='13%'><?php echo $row->first_registration_time;?></td>
            <td width='13%'><?php echo $row->last_registration_time;?>	</td>
            <td width='6%'><?php echo $row->state?'在线':'离线';?></td>
            <td width='5%'>操作</td>
        </tr>
        <?php endforeach;?>
    </table>
</div>
<div class="row"><div class='col-md-9'></div><div class='col-md-3'><?php echo $page;?></div></div>
<script src="<?php echo base_url('system/libraries/Javascript/datetime.js');?>" type="text/javascript"></script>
