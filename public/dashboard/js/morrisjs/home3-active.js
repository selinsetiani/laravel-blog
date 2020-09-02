(function ($) {
    "use strict";


    var chart = Morris.Bar({
        element: 'morris-bar-chart',
        // data: [0,0],
        xkey: 'date',
        //ykeys: ['value'],
        ykeys: ['Draft', 'Publish', 'Total'],
        labels: ['Draft', 'Publish', 'Total'],
        barColors:['#933EC5', '#006DF0', '#65b12d'],
        hideHover: 'auto',
            barSizeRatio:0.45,  
        gridLineColor: '#eef0f2',
        resize: true
    });
    
    requestData(7, chart);
    $('ul.ranges a').click(function(e){
        e.preventDefault();
        // Get the number of days from the data attribute
        var el = $(this);
        days = el.attr('data-range');
        // Request the data and render the chart using our handy function
        requestData(days, chart);
        // Make things pretty to show which button/tab the user clicked
        el.parent().addClass('active');
        el.parent().siblings().removeClass('active');
    })
}) (jQuery); 