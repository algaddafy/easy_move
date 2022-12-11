$(function () {
    $('.sparkbar-small').sparkline('html', { type: 'bar', height: '47px', barWidth: 5 });


    $('.knob').knob({
        draw: function() {
        }
    });

    $(".knob-rtl").knob({
        draw: function () {
            //style rtl
            this.i.css({
                'margin-right': '-' + ((this.w * 3 / 4 + 2) >> 0) + 'px',
                'margin-left': 'auto'
            });
        },
    });

    $('#linecustom1').sparkline('html',{
        height: '55px',
        width: '100%',
        lineColor: '#a095e5',
        fillColor: '#a095e5',
        minSpotColor: true,
        maxSpotColor: true,
        spotColor: '#e2a8df',
        spotRadius: 0
    });
    $('#linecustom2').sparkline('html',{
        height: '55px',
        width: '100%',
        lineColor: '#75c3f2',
        fillColor: '#75c3f2',
        minSpotColor: true,
        maxSpotColor: true,
        spotColor: '#8dbfe0',
        spotRadius: 0
    });
    $('#linecustom3').sparkline('html',{
        height: '55px',
        width: '100%',
        lineColor: '#fc7b92',
        fillColor: '#fc7b92',
        minSpotColor: true,
        maxSpotColor: true,
        spotColor: '#e0b89d',
        spotRadius: 0
    });
});