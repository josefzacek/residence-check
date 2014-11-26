function form_data_submit() {

    $(document).ready(function () {
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
            $('.resident_year_2010').append('WERE NOT');
        }
        else {
            $('.resident_year_2010').append('WERE');
        }
        
        if (Input_2011 < 183) {
            $('.resident_year_2011').append('WERE NOT');
        }
        else {
            $('.resident_year_2011').append('WERE');
        }
        
        if (Input_2012 < 183) {
            $('.resident_year_2012').append('WERE NOT');
        }
        else {
            $('.resident_year_2012').append('WERE');
        }
        
        if (Input_2013 < 183) {
            $('.resident_year_2013').append('WERE NOT');
        }
        else {
            $('.resident_year_2013').append('WERE');
        }
        
        if (Input_2014 < 183) {
            $('.resident_year_2014').append('WERE NOT');
        }
        else {
            $('.resident_year_2014').append('ARE');
        }
        
        //check ordinary resident
        if (Input_2011 > 183 && Input_2012 > 183 && Input_2013 > 183) {
            $('.ordinary_resident').append('You are ordinary resident');
        }
        else {
            $('.ordinary_resident').append('You haven\'t been resident in 2011/ 2012/ 2013 therefore you are NOT ordinary resident');
        }


     });

};