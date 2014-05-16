<?php if (!defined('THINK_PATH')) exit();?><p> this is addpaper</p>
<script src="/lab/public/js/multi_select.js" type="text/javascript"></script>
 <form action="Addpaper/addpaper" method="post">
  	<p>题目:<input type="text" name="title"/></p>
    <p>期刊:<input type="text" name="journal"/></p>
    <p>年份:<input type="text" name="age"/></p>
    <p>作者:</p>  
<body>
<table width="477" height="192" border="1">
<tr>
<td width="181" align="center" valign="middle">
<select name="left_staff" size="7" multiple="multiple" id="left_staff" style="width:100px;" ondblclick="right_move('false','left_staff','right_staff')">
<?php if(is_array($staff_list)): $i = 0; $__LIST__ = $staff_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option name="staff_name[<?php echo ($vo["name"]); ?>]" value="<?php echo ($vo["sid"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
</select></td>
<td width="81" align="center" valign="middle">
<input type="button" name="Submit3" value="全部右移" onClick="right_move('true','left_staff','right_staff')"/><p />
<input type="button" name="Submit" value=" 右移&gt;&gt; " onClick="right_move('false','left_staff','right_staff')"/><p />
<input type="button" name="Submit2" value=" 删  除 " onClick="del_right('right_staff');" />

<td width="181" align="center" valign="middle">
<select name="right_staff[]" size="7" multiple="multiple" id="right_staff" style="width:100px;" ondblclick="del_right('right_staff');"></select>
<input type="submit" name="Submit4" value=" 提  交 " onclick="sel_all('right_staff')"/>
</td>
</td>

</tr></table>
</body>

<p>摘要:<textarea name="abtract"></textarea></p>
</form>