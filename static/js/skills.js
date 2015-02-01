
function add_technical_skill()
        { 
            var label1 = document.createElement("label");
            var label2 = document.createElement("label");
            var element = document.createElement("input");
            element.setAttribute("type", "text");
            element.setAttribute("name", "addedskill[]");
            element.setAttribute("style", "width:200px");
            label1.innerHTML = "Skills";
            label1.innerHTML = "Rating";
            
            
            var row = document.getElementById('newrow');
            row.appendChild(element);
            row.appendChild(label1)
        
        }