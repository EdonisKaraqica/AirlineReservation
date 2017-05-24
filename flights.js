 $(document).ready(function(){
        $.ajax({url: "flights.php?f=getFlights", method:"GET", success: function(result){
          
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

         	 

        }});

});

