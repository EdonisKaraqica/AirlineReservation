
      $(document).ready(function(){ //
       $("#flights").click(function(event){

            $.ajax({url: "flights.php?f=getAdminFlights", method:"GET", success: function(result){
                  
                  var jsonObj = $.parseJSON('[' + result + ']');
                         $(".table").html(
                                "<thead bgcolor = #508ff4><tr><th>"+"Id e fluturimit"+
                                "</th><th>"+"Aircraft number"+
                                "</th><th>"+"Kapaciteti"+
                                "</th><th>"+"Prej"+
                                "</th><th>"+"Per"+
                                "</th><th>"+"Data e nisjes"+
                                "</th><th>"+"Koha e nisjes"+
                                "</th><th>"+"Data e mberritjes"+
                                "</th><th>"+"Koha e mberritjes"+
                                "</th><th>"+"Çmimi"+
                                "</th></tr></thead><tr></tr>");

                 for(var i = 0; i< jsonObj[0].length; i++){
                                
                    $(".table").append("<tr><th>"+'<input type="radio" name="vehicle" value="Bike">'+
                        jsonObj[0][i]['id_flights']+
                        "</th><th> " +
                        jsonObj[0][i]['aircraftnr']+
                        "</th><th>" +
                        jsonObj[0][i]['capacity']+
                        "</th><th>" +
                        jsonObj[0][i]['placefrom']+
                        "</th><th>" +
                        jsonObj[0][i]['placeto']+
                        "</th><th>" +
                        jsonObj[0][i]['departuredate']+
                        "</th><th>" +
                        jsonObj[0][i]['departuretime']+
                        "</th><th>" +
                        jsonObj[0][i]['arrivaldate']+
                        "</th><th>" +
                        jsonObj[0][i]['arrivaltime']+
                        "</th><th>" +
                        jsonObj[0][i]['priceticket']+

                        "</th></tr><tr></tr>" ); 
                 
                     }

             $(".table").append(
                 "<tr><th>"+'<input type="submit" value="Add new flight">'+
                 "</th><th>"+'<input type="number" name="aircraftnr" >'+
                 "</th><th>"+'<input type="number" name="capacity" >'+
                 "</th><th>"+'<input type="text" name="placefrom" >'+
                 "</th><th>"+'<input type="text" name="placeto" >'+
                 "</th><th>"+'<input type="date" name="departuredate" >'+
                 "</th><th>"+'<input type="time" name="departuretime" >'+
                 "</th><th>"+'<input type="date" name="arrivaldate" >'+
                 "</th><th>"+'<input type="time" name="arrivaltime" >'+
                 "</th><th>"+'<input type="number" name="priceticket" >'+
                 "</th></tr>"+"<tr><th>"+'<button id="delete" >Delete selected flight</button></th></tr>');



                    }});




                    event.preventDefault();
            });


        });

         $(document).ready(function(){
         $( "#add" ).on( "submit", function( event ) { 
                var values = $(this).serialize();
                console.log(values);
                $.ajax({

                        url: "flights.php?f=addFlight",
                        type: "post",
                        data: values ,
                        success: function (response) {

                            alert("New flight added!");
                         }
                     });

                event.preventDefault();
            });
          });

         $(document).ready(function(){
            $("#reservations").click(function(){
                $.ajax({url: "flights.php?f=getReservations", method:"GET", success: function(result){
                  
                    var jsonObj = $.parseJSON('[' + result + ']');
                    $(".table").html(

                                "<thead bgcolor = #508ff4><tr><th>"+"Reservation id"+
                                "</th><th>"+"First name"+
                                "</th><th>"+"Last name"+
                                "</th><th>"+"Flight ID"+
                                "</th><th>"+"Prej"+
                                "</th><th>"+"Per"+
                                "</th><th>"+"Data"+
                                "</th><th>"+"Koha e nisjes"+
                                "</th><th>"+"Numri i uleses"+
                                "</th><th>"+"Pagesa"+
                                "</th><th>"+"Menyra e pageses"+
                                "</th><th>"+"E konfirmuar"+
                                "</th></tr></thead><tr></tr>");
                     for(var i = 0; i< jsonObj[0].length; i++){
                    
                            
                        
                    $(".table").append("<tr><th>"+
                        jsonObj[0][i]['id_reservation']+
                        "</th><th> " +
                        jsonObj[0][i]['firstname']+
                        "</th><th>" +
                        jsonObj[0][i]['lastname']+
                        "</th><th>" +
                        jsonObj[0][i]['id_flights']+
                        "</th><th>" +
                        jsonObj[0][i]['placefrom']+
                        "</th><th>" +
                        jsonObj[0][i]['placeto']+
                        "</th><th>" +
                        jsonObj[0][i]['departuredate']+
                        "</th><th>" +
                        jsonObj[0][i]['departuretime']+
                        "</th><th>" +
                        jsonObj[0][i]['seatrreserved']+
                        "</th><th>" +
                        jsonObj[0][i]['pay']+
                        "</th><th>" +
                        jsonObj[0][i]['optionpay']+
                        "</th><th>" +
                        jsonObj[0][i]['confirm']+

                        "</th></tr>" ); 
                 
                     }




                }});
             });
        });

         $(document).ready(function(){
            $("#users").click(function(){
                $.ajax({url: "flights.php?f=getUsers", method:"GET", success: function(result){
                  
                    var jsonObj = $.parseJSON('[' + result + ']');
                    $(".table").html(

                                "<thead bgcolor = #508ff4><tr><th>"+"User id"+
                                "</th><th>"+"Role"+
                                "</th><th>"+"Username"+
                                "</th><th>"+"First name"+
                                "</th><th>"+"Last name"+
                                "</th><th>"+"Address"+
                                "</th><th>"+"Email"+
                                "</th></tr></thead><tr></tr>");
                     for(var i = 0; i< jsonObj[0].length; i++){
                    
                            
                        

                    
                    $(".table").append("<tr><th>"+
                        jsonObj[0][i]['id_user']+
                        "</th><th> " +
                        jsonObj[0][i]['user_type']+
                        "</th><th> " +
                        jsonObj[0][i]['username']+
                        "</th><th> " +
                        jsonObj[0][i]['firstname']+
                        "</th><th> " +
                        jsonObj[0][i]['lastname']+
                        "</th><th> " +
                        jsonObj[0][i]['address']+
                        "</th><th> " +
                        jsonObj[0][i]['email']+
                        

                        "</th></tr>" ); 
                 
                     }

                }});
            });
        });
 $(document).ready(function(){
    $("#searchBy").on("submit",function(event){
               var values = $(this).serialize();
               console.log(values);

                 $.ajax({
                        url: "flights.php?f=searchBy",
                        type: "post",
                        data: values ,
                        success: function (response) {          
                var jsonObj = $.parseJSON('[' + response + ']');
                               $(".table").html(
                                "<thead bgcolor = #508ff4><tr><th>"+"Id e fluturimit"+
                                "</th><th>"+"Aircraft number"+
                                "</th><th>"+"Kapaciteti"+
                                "</th><th>"+"Prej"+
                                "</th><th>"+"Per"+
                                "</th><th>"+"Data e nisjes"+
                                "</th><th>"+"Koha e nisjes"+
                                "</th><th>"+"Data e mberritjes"+
                                "</th><th>"+"Koha e mberritjes"+
                                "</th><th>"+"Çmimi"+
                                "</th></tr></thead><tr></tr>");
                     for(var i = 0; i< jsonObj[0].length; i++){
                                
                    $(".table").append("<tr><th>"+
                        jsonObj[0][i]['id_flights']+
                        "</th><th> " +
                        jsonObj[0][i]['aircraftnr']+
                        "</th><th>" +
                        jsonObj[0][i]['capacity']+
                        "</th><th>" +
                        jsonObj[0][i]['placefrom']+
                        "</th><th>" +
                        jsonObj[0][i]['placeto']+
                        "</th><th>" +
                        jsonObj[0][i]['departuredate']+
                        "</th><th>" +
                        jsonObj[0][i]['departuretime']+
                        "</th><th>" +
                        jsonObj[0][i]['arrivaldate']+
                        "</th><th>" +
                        jsonObj[0][i]['arrivaltime']+
                        "</th><th>" +
                        jsonObj[0][i]['priceticket']+

                        "</th></tr>" ); 
                 
                     }

                        }

                 });

                  event.preventDefault();
             
            });  
         });
