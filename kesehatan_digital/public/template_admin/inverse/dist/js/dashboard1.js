$(function () {
    ("use strict");
    //This is for the Notification top right
    $.toast({
        heading: "Welcome to Elite admin",
        text: "Use the predefined ones, or specify a custom position object.",
        position: "top-right",
        loaderBg: "#ff6849",
        icon: "info",
        hideAfter: 3500,
        stack: 6,
    });
    // Dashboard 1 Morris-chart
    $.ajax({
        url: "/getDataPerkembanganArtikel", // Ganti dengan URL sesuai dengan route Anda
        method: "GET",
        success: function (data) {
            Morris.Area({
                element: "morris-area-chart",
                data: data,
                xkey: "period",
                ykeys: ["jumlah_artikel"],
                labels: ["Jumlah Artikel"],
                pointSize: 3,
                fillOpacity: 0,
                pointStrokeColors: ["#00bfc7"],
                behaveLikeLine: true,
                gridLineColor: "#e0e0e0",
                lineWidth: 3,
                hideHover: "auto",
                lineColors: ["#00bfc7"],
                resize: true,
            });
        },
    });
    // Morris Area Chart
    Morris.Area({
        element: "morris-area-chart",
        data: data,
        xkey: "period",
        ykeys: ["jumlah_artikel"],
        labels: ["Jumlah Artikel"],
        pointSize: 3,
        fillOpacity: 0,
        pointStrokeColors: ["#00bfc7"],
        behaveLikeLine: true,
        gridLineColor: "#e0e0e0",
        lineWidth: 3,
        hideHover: "auto",
        lineColors: ["#00bfc7"],
        resize: true,
    });
});    
    // sparkline
    var sparklineLogin = function() { 
        $('#sales1').sparkline([20, 40, 30], {
            type: 'pie',
            height: '90',
            resize: true,
            sliceColors: ['#01c0c8', '#7d5ab6', '#ffffff']
        });
        $('#sparkline2dash').sparkline([6, 10, 9, 11, 9, 10, 12], {
            type: 'bar',
            height: '154',
            barWidth: '4',
            resize: true,
            barSpacing: '10',
            barColor: '#25a6f7'
        });
        
    };    
    var sparkResize;
 
        $(window).resize(function(e) {
            clearTimeout(sparkResize);
            sparkResize = setTimeout(sparklineLogin, 500);
        });
        sparklineLogin();
