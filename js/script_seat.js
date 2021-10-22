window.onload = function() {
  //$(".seatStructure").hide();
  $(".displayerBoxes").hide();
  takeData();
};
Array.prototype.has=function(v){
  for (i=0; i<this.length; i++) {
    if (this[i]==v) return true;
  }
  return false;
}
$( "#movieTime" ).change(function() {
  takeData();
 });
$( "#movieDate" ).change(function() {
   takeData();
  });
$(":checkbox[class='seats']").click(function(){
    var seat_num = 0;
    $('#seatsBlock :checked').each(function() {
      seat_num+=1;
    });  
    $("#Numseats").val(seat_num);
    $("#Sum").val(100*$("#Numseats").val());
  });  
function takeData()
{
  $("#Numseats").val('0');
  $(":checkbox[class='seats']").each(function(){
      $(this).attr("disabled",false);
      $(this).prop("checked",false);
      $(this).parent().removeClass("takebox");
      //$(this).parent().css('background-color', 'transparent');
  });
  if ( $("#Numseats").val().length == 0)
  {
  alert("Будь-ласка заповніть дані");
  }
  else
  {
    //$(".seatStructure *").prop("disabled", false);
    $("#Sum").val(100*$("#Numseats").val());
    document.getElementById("notification").innerHTML = "<b style='margin-bottom:0px;background:yellow;'>Будь ласка виберіть місця</b>";
    var time = $("#movieTime").val();
    var date = $("#movieDate").val();

    function get(name){
      if(name=(new RegExp('[?&]'+encodeURIComponent(name)+'=([^&]*)')).exec(location.search))
         return decodeURIComponent(name[1]);
    }
    var id = get('id');
    let seats;
    $.ajax({
      type:'POST',
      dataType: 'json',
      url:"free_seats.php",
      data:{id:id, time:time, date:date},
      success: function(data){
        if(data.status===true){
          for(var i = 0; i< JSON.stringify(data.seats).match(/"seats"/g).length; i++){
            seats= data.seats[i]["seats"];
            seats = seats.split(' ');
            $(":checkbox[class='seats']").each(function(){
             if (seats.has($(this).val())) {
               $(this).attr("disabled",true);
               //$(this).parent().css('background-color', 'red');
               $(this).parent().toggleClass("takebox");
             }
           
           });
          }
        }
      }
    });
    
  
   
    //$(".inputForm *").prop("disabled", true);
    $(".seatStructure").show();
    
  }
}


function updateTextArea() { 
  $("#Sum").val(100*$("#Numseats").val());
  if ($("input:checked").length != 0)
    {
      //$(".seatStructure *").prop("disabled", true);
      
     var allNumberVals = [];
     var allSeatsVals = [];
  
     //Storing in Array
     allNumberVals.push($("#Numseats").val());
     $('#seatsBlock :checked').each(function() {
       allSeatsVals.push($(this).val());
     });
     //Displaying 
    // $(".inputForm *").prop("disabled", false);
     $('#Time').val($('#movieTime').val());
     $('#Date').val($('#movieDate').val());
     $('#Cost').val($('#Sum').val());
     $('#NumberDisplay').val(allNumberVals);
     $('#seatsDisplay').val(allSeatsVals);
    // $(".inputForm *").prop("disabled", true);
  
      var id_film = $('#film_id').val();
      var id_user = $('#id_user').val();
      var film_name = $('#film_name').val();
      var mtime = $('#movieTime').val();
      var mdate = $('#movieDate').val();
      var cost = $('#Sum').val();
      var seat_n = $('#Numseats').val();
      var selseats = allSeatsVals.join(' ');
      console.log(id_film);
      console.log(id_user);
      console.log(film_name);
      console.log(mtime);
      console.log(mdate);
      console.log(cost);
      console.log(seat_n);
      console.log(selseats);
      $.ajax({
          type: 'POST',
          url: 'buy_tickets_procces.php',
          data: {id_film:id_film,id_user:id_user,film_name:film_name,mtime:mtime,mdate:mdate,cost:cost,seat_n:seat_n,selseats:selseats},
          success: function(data){
              console.log(data);
              if($.trim(data)==="1"){
                  $.ajax({
                    type: 'POST',
                    url: 'send_ticket.php',
                    data: {film_name:film_name,mtime:mtime,mdate:mdate,cost:cost,selseats:selseats},
                    success: function(data){
                      console.log(data);
                      if($.trim(data)==="1"){
                        swal.fire({
                          icon:'success',
                          title:'Білет придбано!',
                          text: 'Електронний білет відправлено на пошту',
                      })
                      setTimeout('window.location.href = "index_login.php"', 3000);
                      }
                      else{
                        swal.fire({
                          icon:'error',
                          title:'Помилка',
                          text: 'Білет придбано, але не відправлено на пошту',
                      })
                      }
                    }
                  });
              }
              else if($.trim(data)==="0"){
                  swal.fire({
                      icon:'error',
                      title:'Помилка',
                      text: 'Під час транзакції виникла помилка',
                  })
              }
          },
          error: function(data){
              swal.fire({
                  icon:'error',
                  title:'Помилка',
                  text: 'Під час транзакції виникла помилка',
              })
          }
      });
      $(".seatStructure").hide();
    }
  else
    {
      alert("Будь ласка, виберіть місця!");
    }
  }


/*
function myFunction() {
  alert($("input:checked").length);
}
*/
/*
function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}
*/
/*
$(":checkbox").click(function() {
  if ($("input:checked").length == ($("#Numseats").val())) {
    $(":checkbox").prop('disabled', true);
    
    $(':checked').prop('disabled', false);
  }
    else
    {
      $(":checkbox").prop('disabled', false);
    }
  
});
*/
