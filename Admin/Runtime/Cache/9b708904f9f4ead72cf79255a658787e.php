<?php if (!defined('THINK_PATH')) exit();?><p>This is add project!</p>
<script src="/lab/public/js/multi_select.js" type="text/javascript"></script>

<form action="Addproject/addproject" method="post">
<p>项目名称<input type="text" name="name"/></p>
<p>项目简介<textarea></textarea></p>

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

</td>
</td>

</tr>
</table>



<table width="477" height="192" border="1">
<tr>
<td width="181" align="center" valign="middle">
<select name="left_paper" size="7" multiple="multiple" id="left_paper" style="width:100px;" ondblclick="right_move('false','left_paper','right_paper')">
<?php if(is_array($staff_list)): $i = 0; $__LIST__ = $staff_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option name="staff_name[<?php echo ($vo["name"]); ?>]" value="<?php echo ($vo["sid"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
</select></td>
<td width="81" align="center" valign="middle">
<input type="button" name="Submit3" value="全部右移" onClick="right_move('true','left_paper','right_paper')"/><p />
<input type="button" name="Submit" value=" 右移&gt;&gt; " onClick="right_move('false','left_paper','right_paper')"/><p />
<input type="button" name="Submit2" value=" 删  除 " onClick="del_right('right_paper');" />

<td width="181" align="center" valign="middle">
<select name="right_paper[]" size="7" multiple="multiple" id="right_paper" style="width:100px;" ondblclick="del_right('right_paper');"></select>

</td>
</td>

</tr></table>

<table width="477" height="192" border="1">
<tr>
<td width="181" align="center" valign="middle">
<select name="left_soft" size="7" multiple="multiple" id="left_soft" style="width:100px;" ondblclick="right_move('false','left_soft','right_soft')">
<?php if(is_array($staff_list)): $i = 0; $__LIST__ = $staff_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option name="staff_name[<?php echo ($vo["name"]); ?>]" value="<?php echo ($vo["sid"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
</select></td>
<td width="81" align="center" valign="middle">
<input type="button" name="Submit3" value="全部右移" onClick="right_move('true','left_soft','right_soft')"/><p />
<input type="button" name="Submit" value=" 右移&gt;&gt; " onClick="right_move('false','left_soft','right_soft')"/><p />
<input type="button" name="Submit2" value=" 删  除 " onClick="del_right('right_soft');" />

<td width="181" align="center" valign="middle">
<select name="right_soft[]" size="7" multiple="multiple" id="right_soft" style="width:100px;" ondblclick="del_right('right_soft');"></select>

</td>
</td>

</tr></table>

<table width="477" height="192" border="1">
<tr>
<td width="181" align="center" valign="middle">
<select name="left_patent" size="7" multiple="multiple" id="left_patent" style="width:100px;" ondblclick="right_move('false','left_patent','right_patent')">
<?php if(is_array($staff_list)): $i = 0; $__LIST__ = $staff_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option name="staff_name[<?php echo ($vo["name"]); ?>]" value="<?php echo ($vo["sid"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
</select></td>
<td width="81" align="center" valign="middle">
<input type="button" name="Submit3" value="全部右移" onClick="right_move('true','left_patent','right_patent')"/><p />
<input type="button" name="Submit" value=" 右移&gt;&gt; " onClick="right_move('false','left_patent','right_patent')"/><p />
<input type="button" name="Submit2" value=" 删  除 " onClick="del_right('right_patent');" />

<td width="181" align="center" valign="middle">
<select name="right_patent[]" size="7" multiple="multiple" id="right_patent" style="width:100px;" ondblclick="del_right('right_patent');"></select>

</td>
</td>

</tr></table>

</form>