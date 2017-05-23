 $(document).ready(function(){
        $.ajax({url: "flights.php?f=getFlights", method:"GET", success: function(result){
          
var jsonObj = $.parseJSON('[' + result + ']');
            $(".table").html(
                        "<thead bgcolor = #508ff4><tr><th>"+"Data e fluturimit"+
                        "</th><th>"+"Nisja"+
                        "</th><th>"+"Mberritja"+
                        "</th><th>"+"Airporti"+
                        "</th><th>"+"Destinacioni"+
                        "</th><th>"+"Route Code"+
                        "</th><th>"+"Çmimi"+
                        "</th></tr></thead><tr></tr>");
             for(var i = 0; i< jsonObj[0].length; i++){
    
            $(".table").append("<tr><th>"+
                jsonObj[0][i]['data_fluturimit']+
                "</th><th> " +
                jsonObj[0][i]['nisja']+
                "</th><th>" +
                jsonObj[0][i]['mberritja']+
                "</th><th>" +
                jsonObj[0][i]['airoporti']+
                "</th><th>" +
                jsonObj[0][i]['destinacioni']+
                "</th><th>" +
                jsonObj[0][i]['routecode']+
                "</th><th>" +
                jsonObj[0][i]['qmimi']+

                "</th></tr>" ); 
         
             }

         	 

        }});

});

