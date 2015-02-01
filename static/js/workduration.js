function func(a)
        { 
           var month;
           var year;
            var selectBox=document.getElementByName('status[]');
    var val= selectBox.options[selectBox.selectedIndex].value;
        alert(val);
            if(val==0)
            {  
               document.getElementById('duration').innerHTML="&nbsp;&nbsp;Duration:<input type=text name=workduration[]>" ;
            }
           else
            { if(val==1)
                {for(var i=1;i<=12;i=i+1) 
                {
                 month=month+"<option value=i>"+i;
                }
               // document.getElementById('duration').innerHTML=month;
                 for(i=2000;i>=1945;i=i-1) 
                {
                 year=year+"<option value=i>"+i;
                }
                
            document.getElementById('duration').innerHTML="<td>&nbsp;&nbsp;From:&nbsp;&nbsp;Month<select name=\"month[]\" value=<?php set_value('month[]');>>"+month+"</select>&nbsp;&nbsp;Year<select name=year[] value=<?php echo set_value('year[]');>>"+year+"</select></td>"; 
        }
        } 
        }

function add_row(name,namerow)
        { 
          
        var  row=document.getElementById(namerow);
        var      newrow=row.cloneNode(true);
        document.getElementById(name).appendChild(newrow);
        }
        
