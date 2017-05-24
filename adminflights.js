
 $(document).ready(function(){
    $("#flights").click(function(){

        $.ajax({url: "flights.php?f=getAdminFlights", method:"GET", success: function(result){
          
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
});

 $(document).ready(function(){
    $("#reservations").click(function(){
        $.ajax({url: "flights.php?f=getReservations", method:"GET", success: function(result){
          
            var jsonObj = $.parseJSON('[' + result + ']');
            $(".table").html(

                        "<thead bgcolor = #508ff4><tr><th>"+"Reservation id"+
                        "</th><th>"+"Username"+
                        "</th><th>"+"Data fluturimit"+
                        "</th><th>"+"Nisja"+
                        "</th><th>"+"Mberritja"+
                        "</th><th>"+"Airoporti"+
                        "</th><th>"+"Destinacioni"+
                        "</th><th>"+"Route code"+
                        "</th><th>"+"Qmimi"+
                        "</th></tr></thead><tr></tr>");
             for(var i = 0; i< jsonObj[0].length; i++){
            
                    
                

            
            $(".table").append("<tr><th>"+
                jsonObj[0][i]['reservationid']+
                "</th><th> " +
                jsonObj[0][i]['username']+
                "</th><th>" +
                jsonObj[0][i]['data_fluturimit']+
                "</th><th>" +
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
});

 $(document).ready(function(){
    $("#users").click(function(){
        $.ajax({url: "flights.php?f=getUsers", method:"GET", success: function(result){
          
            var jsonObj = $.parseJSON('[' + result + ']');
            $(".table").html(

                        "<thead bgcolor = #508ff4><tr><th>"+"User id"+
                        "</th><th>"+"Username"+
                        "</th></tr></thead><tr></tr>");
             for(var i = 0; i< jsonObj[0].length; i++){
            
                    
                

            
            $(".table").append("<tr><th>"+
                jsonObj[0][i]['userid']+
                "</th><th> " +
                jsonObj[0][i]['username']+
                

                "</th></tr>" ); 
         
             }

        }});
    });
});





 $(document).ready(function(){
 $("#searchBy").click(function(event){
       var values = $(this).serialize();

         $.ajax({
                url: "flights.php?f=searchBy",
                type: "post",
                data: values ,
                success: function (response) {          
           var jsonObj = $.parseJSON('[' + response + ']');
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

                }

         });

         event.preventDefault();



        
    });  
});
