
function right_move(fla,l_ele_id,r_ele_id)
{
    var con_data=[];
    for(var i=0;i<$(l_ele_id).length;i++)
    {
        if(fla=="false")
        {
            if($(l_ele_id).options[i].selected)
                con_data[con_data.length]=[$(l_ele_id).options[i].value,$(l_ele_id).options[i].text];
        }else
        {
            con_data[con_data.length]=[$(l_ele_id).options[i].value,$(l_ele_id).options[i].text];
        }
    }
    
    for(var i=0;i<con_data.length;i++)
    {
        var con_fla=true;
        for(var k=0;k<$(r_ele_id).length;k++)
        {
            $(r_ele_id).options[k].selected=false;
            if(con_data[i][0]==$(r_ele_id).options[k].value)
            {
                con_fla=false;
                break;
            }
        }
        if(con_fla){
            $(r_ele_id).options[$(r_ele_id).length]=new Option(con_data[i][1],con_data[i][0]);
        }
    }
    daf_sel(con_data,r_ele_id);
}

function daf_sel(data,r_ele_id){
    for(var i=0;i<data.length;i++){
        for(var k=0;k<$(r_ele_id).length;k++){
            if(data[i][0]==$(r_ele_id).options[k].value){
                $(r_ele_id).options[k].selected=true;
                break;
            }
        }
    }
}

function del_right(r_ele_id)
{
    var index_data=[];
    for(var i=0;i<$(r_ele_id).length;i++)
    {
        if($(r_ele_id).options[i].selected)
            index_data[index_data.length]=[i];
    }
    for(var i=index_data.length-1;i>=0;i--)
    {
        $(r_ele_id).removeChild($(r_ele_id).options[index_data[i]]);
    }
    if($(r_ele_id).options[0])
        $(r_ele_id).selectedIndex=0;
}

function sel_all(ele_id){
	//var index_data=[];
	for(var i=0; i < $(ele_id).length; i++){
		$(ele_id).options[i].selected = true;
		}
	}
function $(id){return document.getElementById(id);}
