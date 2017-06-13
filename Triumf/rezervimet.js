

 $(document).ready(function(){
  var selected1=0;
  var selected2=0;

  var jsonObj1;
  var jsonObj2;
    $("#rezerv").on("submit",function(event){ 

               var values = $(this).serialize();
				console.log(values);
                 $.ajax({
                        url: "function.php?f=getFlightsGO",
                        type: "post",
                        data: values ,
                        success: function (response) { 
                          console.log(response);
                      if(response==0)
                        {
                          alert("JOJO");
                        }else{
          jsonObj1 = $.parseJSON('[' + response + ']');
                               $(".tabela1").html(
                        "<thead bgcolor = #508ff4 clthead-inverse style='text-align: center;'><tr><th>"+"Data e nisjes"+

                        "</th><th>"+"Çmimi"+
                        "</th><th>"+"Rezervo"+
                        "</th></tr></thead><tr></tr>");
                     for(var i = 0; i< jsonObj1[0].length; i++){
                                //IF JSON OBJ[0].LENGTH = 0 alert

                $(".tabela1").append("<tr><th>"+

                jsonObj1[0][i]['departuredate']+
                "   " +
                jsonObj1[0][i]['departuretime']+
                "</th><th>" +
                jsonObj1[0][i]['priceticket']+

                "</th><th> <input type='radio' name='rezervoo' style='padding-left: 10px;'/>"+

                

                "</th></tr>" ); 
         
                 
                     }
        $("#rezervo").html("<input type='submit' style=' width:200px;'  value='Rezervo' >");
             $("#rezervo").on("submit",function(event) { 
                    event.preventDefault();
                    /*if (i lloguar)*/
                    swal({
                      title: "Are you sure you want to book selected flights?",
                      
                      type: "warning",
                      showCancelButton: true,
                      confirmButtonColor: "#DD6B55",
                      // confirmButtonText: "Yes.",
                      closeOnConfirm: false
                    },
                function(){
                
                for (var i = jsonObj1[0].length - 1; i >= 0; i--) {
                    if (document.getElementsByName('rezervoo')[i].checked ) {
                        
                        selected1 = jsonObj1[0][i]['id_flights'];
                      }
                    }
   if (document.getElementsByName('cbox')[0].checked) 
                  {
                    for (var i = jsonObj2[0].length - 1; i >= 0; i--) {
                    if (document.getElementsByName('rezervooo')[i].checked ) {
                        
                        selected2 = jsonObj2[0][i]['id_flights'];
                      }
                    }
                   }
                        console.log(selected1+ " "+selected2);
                         $.ajax({
                        url: "function.php?f=bookFlight",
                        type: "post",
                        data: {"id1":selected1,"id2":selected2},
                        success: function (response) {
                            console.log(response);
                            

                  swal({
                          title: " Reservation booked",
                          text : "",
                          timer: 2000,
                          showConfirmButton: false ,
                          type :"success"
                        });

                           
                         }
                     });
                          
                   
            
               
                });    
                });

                        }

                 }});
                  if (document.getElementsByName('cbox')[0].checked) 
                  {
                      $.ajax({
                        url: "function.php?f=getFlightsRETURN",
                        type: "post",
                        data: values ,
                        success: function (response) {
                          console.log(response);
                         if(response==0)
                        {
                          alert("JOJO");
                        }
                        else{
         jsonObj2 = $.parseJSON('[' + response + ']');
                 $(".tabela2").html(
                        "<thead bgcolor = #508ff4 clthead-inverse style='text-align: center;'><tr><th>"+"Data e nisjes"+

                        "</th><th>"+"Çmimi"+
                        "</th><th>"+"Rezervo"+
                        "</th></tr></thead><tr></tr>");
                        console.log(response);
                     for(var i = 0; i< jsonObj2[0].length; i++){
                                //IF JSON OBJ[0].LENGTH = 0 alert

$(".tabela2").append("<tr><th>"+

                jsonObj2[0][i]['departuredate']+
                "   " +
                jsonObj2[0][i]['departuretime']+
                "</th><th>" +
                jsonObj2[0][i]['priceticket']+

                "</th><th> <input type='radio' name='rezervooo' style='padding-left: 10px;'/>"+

                

                "</th></tr>" ); 
         
                 
                     }
                  }  }                });}

                  event.preventDefault();
             
            });  
         });



function a(){
var checker = document.getElementById('checkme');
var sendbtn = document.getElementById('sendNewSms');
var sendbtn1 = document.getElementById('data2');

checker.onchange = function() {
  sendbtn.disabled = !this.checked;
  sendbtn1 .disabled=!this.checked;

};
}





