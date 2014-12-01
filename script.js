
$(document).ready(function () {

    // click on submit button
    $('#form-input-submit-button').click(function(){ 
        
        // make sure there are no values present, expecially if user clicks back button
        $('.year_2010, .year_2011, .year_2012, .year_2013, .year_2014, .total_days, .resident_year_2010, .resident_year_2011, .resident_year_2012, .resident_year_2013, .resident_year_2014, .ordinary_resident, .resident_years_2010_2011, .resident_years_2011_2012, .resident_years_2012_2013').empty();
    
        //get inputs
        var Input_2010 = parseInt($("#input_2010").val(), 10);
        var Input_2011 = parseInt($("#input_2011").val(), 10);
        var Input_2012 = parseInt($("#input_2012").val(), 10);
        var Input_2013 = parseInt($("#input_2013").val(), 10);
        var Input_2014 = parseInt($("#input_2014").val(), 10);
        
        //count total days
        var Total_days = Input_2010 + Input_2011 + Input_2012 + Input_2013 + Input_2014;

        //print each input
        $('.year_2010').append(Input_2010);
        $('.year_2011').append(Input_2011);
        $('.year_2012').append(Input_2012);
        $('.year_2013').append(Input_2013);
        $('.year_2014').append(Input_2014);

        //print total days
        $('.total_days').append(Total_days);
        
        //check if resident each year
        if (Input_2010 < 183) {
            $('.resident_year_2010').append('WERE NOT').css('color', 'red');
        }
        else {
            $('.resident_year_2010').append('WERE').css("color", "green");
        }
        
        if (Input_2011 < 183) {
            $('.resident_year_2011').append('WERE NOT').css('color', 'red');
        }
        else {
            $('.resident_year_2011').append('WERE').css("color", "green");
        }
        
        if (Input_2012 < 183) {
            $('.resident_year_2012').append('WERE NOT').css('color', 'red');
        }
        else {
            $('.resident_year_2012').append('WERE').css("color", "green");
        }
        
        if (Input_2013 < 183) {
            $('.resident_year_2013').append('WERE NOT').css('color', 'red');
        }
        else {
            $('.resident_year_2013').append('WERE').css("color", "green");
        }
        
        if (Input_2014 < 183) {
            $('.resident_year_2014').append('WERE NOT').css('color', 'red');
        }
        else {
            $('.resident_year_2014').append('ARE').css("color", "green");
        }
        
        
        //resident in 2 years
        
        // 2010/2011
        var Years_2010_2011 = Input_2010 + Input_2011; 
        if (Years_2010_2011 >= 280) {
            $('.resident_years_2010_2011').append(Years_2010_2011 + ' days in years 2010 / 2011 therefore you ARE').css("color", "green");
            var or_2010_2011 = 1;
        }
        else {
            $('.resident_years_2010_2011').append('only ' + Years_2010_2011 + ' days in years 2010 / 2011 therefore you ARE NOT').css('color', 'red');
            var or_2010_2011 = 0;
        }
        
        // 2011/2012
        var Years_2011_2012 = Input_2011 + Input_2012; 
        if (Years_2011_2012 >= 280) {
            $('.resident_years_2011_2012').append(Years_2011_2012 + ' days in years 2011 / 2012 therefore you ARE').css("color", "green");
            var or_2011_2012 = 1;
        }
        else {
            $('.resident_years_2011_2012').append('only ' + Years_2011_2012 + ' days in years 2011 / 2012 therefore you ARE NOT').css('color', 'red');
            var or_2011_2012 = 0;
        }
        
        // 2012/2013
        var Years_2012_2013 = Input_2012 + Input_2013; 
        if (Years_2012_2013 >= 280) {
            $('.resident_years_2012_2013').append(Years_2012_2013 + ' days in years 2012 / 2013 therefore you ARE').css("color", "green");
            var or_2012_2013 = 1;
        }
        else {
            $('.resident_years_2012_2013').append('only ' + Years_2012_2013 + ' days in years 2012 / 2013 therefore you ARE NOT').css('color', 'red');
            var or_2012_2013 = 0;
        }

        
        //check ordinary resident
        if(or_2010_2011 == 1 && or_2011_2012 == 1 && or_2012_2013 == 1) {
            $('.ordinary_resident').append('You ARE ordinarily resident for year 2014').css("color", "green");
        }
        else {
            $('.ordinary_resident').append('You ARE NOT ordinarily resident for year 2014').css('color', 'red');
        }
        
        

    });
    
    
    
    

});