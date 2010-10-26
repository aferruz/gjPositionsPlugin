  var idBase =null;
  var next= null;
  var child =null;
  var copyObject = null;
  var copy = null;
      
  $(function() {
    $("ul.droptrue").sortable({
      connectWith: 'ul',
      receive: function(event, ui) {
          copyObject = $('#'+ui.item.attr("id")).clone();
          if (copy)
          {
            if (prev.length)
            {
              copyObject.insertAfter(prev);
            }
            else
            {
              child = $('#'+idBase).children(":first");
              
              if (child.length)
              {
                copyObject.insertBefore(child);
              }
              else
              {
                copyObject.appendTo('#'+idBase);
              }
            }
            
          copy = false;
           }
        },
      start: function(event, ui) { 
        copy = true;
        prev = ui.item.prev();
        idBase = this.id;
        }
    }); 

    $("#sortable1, #sortable2, #sortable3, #sortable4, #sortable5, #sortable6, #sortable7, #sortable8, #sortable9, #sortable10").disableSelection();
    
    $("#accordion1").accordion({ 
      active: false,
      autoheight: false,
      clearStyle: true 
    });
    
    $("#accordion2").accordion({ 
      active: false,
      autoheight: false,
      clearStyle: true  
    });
    
    $("#tabs").tabs();
  });
