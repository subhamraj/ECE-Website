$(function(){
    //original field values
    var field_values = {
            //id        :  value
            'username'  : 'Enrollment number',
                    'Year' : 'Enrollment year',
            'Phonenumber' : 'Phone number',
            'firstname'  : 'first name',
            'lastname'  : 'last name',
            'email'  : 'email address',
            'address' : 'address'
    };


    //inputfocus
    $('input#username').inputfocus({ value: field_values['username'] });
    $('input#password').inputfocus({ value: field_values['Year'] });
    $('input#cpassword').inputfocus({ value: field_values['Phonenumber'] }); 
    $('input#lastname').inputfocus({ value: field_values['lastname'] });
    $('input#firstname').inputfocus({ value: field_values['firstname'] });
    $('input#email').inputfocus({ value: field_values['email'] }); 
    $('input#address').inputfocus({ value: field_values['address']});
    $('input#feedback').inputfocus({ value: field_values['feedback']});
    $('input#Interest').inputfocus({value: field_values['feedback']});




    //reset progress bar
    $('#progress').css('width','0');
    $('#progress_text').html('0% Complete');

    //first_step
    $('form').submit(function(){ return false; });
    $('#submit_first').click(function(){
        //remove classes
        $('#first_step input').removeClass('error').removeClass('valid');

        //ckeck if inputs aren't empty
        var fields = $('#first_step input[type=text], #first_step input[type=password]');
        var error = 0;
        fields.each(function(){
            var value = $(this).val();
            if( value.length<4 || value==field_values[$(this).attr('id')] ) {
                $(this).addClass('error');
                $(this).effect("shake", { times:3 }, 50);
                
                error++;
            } else {
                $(this).addClass('valid');
            }
        });        
        
        if(!error) {
            if( $('#password').val() != $('#cpassword').val() ) {
                    $('#first_step input[type=password]').each(function(){
                        $(this).removeClass('valid').addClass('error');
                        $(this).effect("shake", { times:3 }, 50);
                    });
                    
                    return false;
            } else {   
                //update progress bar
                $('#progress_text').html('20% Complete');
                $('#progress').css('width','85px');
                
                //slide steps
                $('#first_step').slideUp();
                $('#second_step').slideDown();     
            }               
        } else return false;
    });


    $('#submit_second').click(function(){
        //remove classes
        $('#second_step input').removeClass('error').removeClass('valid');

        var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;  
        var fields = $('#second_step input[type=text]');
        var error = 0;
        fields.each(function(){
            var value = $(this).val();
            if( value.length<1 || value==field_values[$(this).attr('id')] || ( $(this).attr('id')=='email' && !emailPattern.test(value) ) ) {
                $(this).addClass('error');
                $(this).effect("shake", { times:3 }, 50);
                
                error++;
            } else {
                $(this).addClass('valid');
            }
        });

        if(!error) {
                //update progress bar
                $('#progress_text').html('40% Complete');
                $('#progress').css('width','170px');
                
                //slide steps
                $('#second_step').slideUp();
                $('#third_step').slideDown();     
        } else return false;

    });

    $('#submit_third').click(function(){
        //remove classes
        $('#third_step input').removeClass('error').removeClass('valid');

        //ckeck if inputs aren't empty
        var fields = $('#third_step input[type=text], #third_step input[type=text]');
        var error = 0;
        fields.each(function(){
            var value = $(this).val();
            if( value.length<4 || value==field_values[$(this).attr('id')] ) {
                $(this).addClass('error');
                $(this).effect("shake", { times:3 }, 50);
                
                error++;
            } else {
                $(this).addClass('valid');
            }
             if(!error) {
                //update progress bar
                $('#progress_text').html('60% Complete');
                $('#progress').css('width','255px');
                
                //slide steps
                $('#third_step').slideUp();
                $('#fourth_step').slideDown();     
        } else return false;

        });  





    $('#submit_fourth').click(function(){
        //update progress bar
        $('#progress_text').html('80% Complete');
        $('#progress').css('width','339px');

        //prepare the fourth step
        var fields = new Array(
            $('#username').val(),
            $('#Year').val(),
            $('#email').val(),
            $('#firstname').val() + ' ' + $('#lastname').val(),
            $('#age').val(),
            $('#gender').val(),
            $('#Interest').val(),  
            $('address').val(),
            $('feedback').val()                  
        );
        var tr = $('#fifth_step tr');
        tr.each(function(){
            //alert( fields[$(this).index()] )
            $(this).children('td:nth-child(2)').html(fields[$(this).index()]);
        });
                
        //slide steps
        $('#fourth_step').slideUp();
        $('#fifth_step').slideDown();            
    });


    $('#submit_fifth').click(function(){
        //send information to server
        alert('kitni baar type krega');
    });

});