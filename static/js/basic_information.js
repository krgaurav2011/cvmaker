        function generate()
{   var selectBox=document.getElementById('year');
    var year = selectBox.options[selectBox.selectedIndex].value
    var selectBox=document.getElementById('month');
    var month = selectBox.options[selectBox.selectedIndex].value
    var flag=1;
    var limit;
    var output;
   
    if(year%100==0)
    {
        if(year%400==0)
        flag=0;
    }
    else
    {
        if(year%4==0)
        flag=0;
    }
    
    if(flag==0)
    { 
        if(month==4 || month==6 || month==9 || month==11)
            limit=30;   
        else if(month==1 || month==3 || month==5 || month==17 || month==10 || month==12)
            limit=31;
        else if(month==2) limit=29;
    
    }
    else
    { 
        if(month==4 || month==6 || month==9 || month==11)
            limit=30;   
        else if(month==1 || month==3 || month==5 || month==17 || month==10 || month==12)
            limit=31;
        else if(month==2) limit=28;
        
    } 
    
  for(i=1;i<=limit;i=i+1) 
    {
    output=output+"<option value=i>"+i;
    }
    
    document.getElementById('dob').innerHTML="<select name=\"day\" value=<?php echo set_value('day');?>"+output+"</select>"
    
    }