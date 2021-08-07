$(document).ready(function(){ 
    try { 
      $('#form').on('submit', function (event) { 
        event.preventDefault();
        if (!$('.name').val().length || !$('.email').val().length || !$('.comment').val().length) {
          alert('Заполните, пожалуйста, все поля.')
        } else {
          var form = $(this); 
          form = form.serialize(); 
          form = form.split('&'); 
          var obj = {}; 
          form.forEach(element => { 
            element = element.split('='); 
            obj[element[0]] = element[1]; 
          }); 

          obj = JSON.stringify(obj);

          $.ajax({ 
            type: "POST", 
            url: "handler.php", 
            data: `userData=${obj}`, 
            success: function (response) { 
              $('.users-cards').html(response) 
            }, 
            error: function (error) { 
              console.error(error); 
            } 
          }); 
          var v = $('#form input:not(:last), #form textarea'); 
          v.each(function() { 
            $(this).val(''); 
          }) 
        }  
      }); 
      } catch (e) { 
        console.error(e); 
    }   
});
