function form_data_submit () {

    $(document).ready(function() {
        var Input_2010 = parseInt($("#input_2010").val(), 10);
        var Input_2011 = parseInt($("#input_2011").val(), 10);
        var Input_2012 = parseInt($("#input_2012").val(), 10);
        var Input_2013 = parseInt($("#input_2013").val(), 10);
        var Input_2014 = parseInt($("#input_2014").val(), 10);

        var Total_days = Input_2010 + Input_2011 + Input_2012 + Input_2013 + Input_2014;

        $('.year_2010').append(Input_2010);
        $('.year_2011').append(Input_2011);
        $('.year_2012').append(Input_2012);
        $('.year_2013').append(Input_2013);
        $('.year_2014').append(Input_2014);


        $('.total_days').append(Total_days);

     });

};