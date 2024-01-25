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
        url: "/getDataPerkembanganArtikel",
        method: "GET",
        success: function (data) {
            var groupedData = groupDataByWeek(data);

            Morris.Area({
                element: "morris-area-chart",
                data: groupedData,
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

    function groupDataByWeek(data) {
        // Kelompokkan data per minggu
        var groupedData = [];
        var currentWeek = null;

        data.forEach(function (item) {
            var week = moment(item.period)
                .startOf("isoWeek")
                .format("YYYY-MM-DD");

            if (currentWeek !== week) {
                currentWeek = week;
                groupedData.push({
                    period: currentWeek,
                    jumlah_artikel: item.jumlah_artikel,
                });
            } else {
                // Jika minggu sama, agregat jumlah_artikel (Anda dapat memodifikasi logika ini)
                groupedData[groupedData.length - 1].jumlah_artikel +=
                    item.jumlah_artikel;
            }
        });

        return groupedData;
    }
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
var sparklineLogin = function () {
    $("#sales1").sparkline([20, 40, 30], {
        type: "pie",
        height: "90",
        resize: true,
        sliceColors: ["#01c0c8", "#7d5ab6", "#ffffff"],
    });
    $("#sparkline2dash").sparkline([6, 10, 9, 11, 9, 10, 12], {
        type: "bar",
        height: "154",
        barWidth: "4",
        resize: true,
        barSpacing: "10",
        barColor: "#25a6f7",
    });
};
var sparkResize;

$(window).resize(function (e) {
    clearTimeout(sparkResize);
    sparkResize = setTimeout(sparklineLogin, 500);
});
sparklineLogin();
