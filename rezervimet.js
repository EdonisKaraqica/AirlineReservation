$(document).ready(function(){
 $(".btn1").click(function(event){

       var values = $(this).serialize();
            e.preventDefault();
         $.ajax({
                url: "function.php?f=getReservations",
                type: "post",
                data: values,
                success: function (response) {    

           var jsonObj = $.parseJSON('[' + response + ']');

            $("#tabela1").html(
                        "<thead bgcolor = #508ff4><tr><th>"+"Data e fluturimit"+
                        "</th><th>"+"Nisja"+
                        "</th><th>"+"Mberritja"+
                        "</th><th>"+"Destinacioni"+
                        "</th><th>"+"Çmimi"+
                        "</th></tr></thead><tr></tr>");

            for(var i = 0; i< jsonObj[0].length; i++){
                        
            $("#tabela1").append("<tr><th>"+

                // jsonObj[0][i]['aircraftnr']+
                // "</th><th>" +
                jsonObj[0][i]['placefrom']+
                "</th><th>" +
                jsonObj[0][i]['placeto']+
                "</th><th>" +
                jsonObj[0][i]['departuredate']+
                "  " +
                jsonObj[0][i]['departuretime']+
                "</th><th>" +
                jsonObj[0][i]['arrivaldate']+
                "  " +
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


//  $(document).ready(function(){

//  $(".btn1").click(function(event){
//     var values = $(this).serialize();
//         $.ajax({
//             url: "function.php?f=getReservations",
//              method:"GET",
//              data: values ,
//              success: function(result){

          
// var jsonObj = $.parseJSON('[' + result + ']');
//                        $(".tabela1").html(
//                         "<thead bgcolor = #508ff4><tr><th>"+"Id e fluturimit"+
//                         "</th><th>"+"Aircraft number"+
//                         "</th><th>"+"Kapaciteti"+
//                         "</th><th>"+"Prej"+
//                         "</th><th>"+"Per"+
//                         "</th><th>"+"Data e nisjes"+
//                         "</th><th>"+"Koha e nisjes"+
//                         "</th><th>"+"Data e mberritjes"+
//                         "</th><th>"+"Koha e mberritjes"+
//                         "</th><th>"+"Çmimi"+
//                         "</th></tr></thead><tr></tr>");
//              for(var i = 0; i< jsonObj[0].length; i++){
                        
//             $(".tabela1").append("<tr><th>"+
//                 jsonObj[0][i]['id_flights']+
//                 "</th><th> " +
//                 jsonObj[0][i]['aircraftnr']+
//                 "</th><th>" +
//                 jsonObj[0][i]['capacity']+
//                 "</th><th>" +
//                 jsonObj[0][i]['placefrom']+
//                 "</th><th>" +
//                 jsonObj[0][i]['placeto']+
//                 "</th><th>" +
//                 jsonObj[0][i]['departuredate']+
//                 "</th><th>" +
//                 jsonObj[0][i]['departuretime']+
//                 "</th><th>" +
//                 jsonObj[0][i]['arrivaldate']+
//                 "</th><th>" +
//                 jsonObj[0][i]['arrivaltime']+
//                 "</th><th>" +
//                 jsonObj[0][i]['priceticket']+

//                 "</th></tr>" ); 
         
//              }
                
             

//         }});

//         event.preventDefault();

// });

// });

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
