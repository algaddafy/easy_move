$(function() {
    "use strict";
    
    setTimeout(function(){
        $(document).ready(function(){
            var chart = c3.generate({
                bindto: '#chart-bar-rotated', // id of chart wrapper
                data: {
                    columns: [
                        // each columns data
                        ['data1', 11, 8, 15, 18, 19, 17],
                        ['data2', 7, 7, 5, 7, 9, 12]
                    ],
                    type: 'bar', // default type of chart
                    colors: {
                        'data1': bigbucket.colors["azure"],
                        'data2': bigbucket.colors["pink"]
                    },
                    names: {
                        // name of each serie
                        'data1': 'Earnings',
                        'data2': 'Expense'
                    }
                },
                axis: {
                    x: {
                        type: 'category',
                        // name of each category
                        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun']
                    },
                    rotated: true,
                },
                bar: {
                    width: 16
                },
                legend: {
                    show: true, //hide legend
                },
                padding: {
                    bottom: 0,
                    top: 0
                },
            });
        });
        $(document).ready(function(){
            var chart = c3.generate({
                bindto: '#chart-area-step', // id of chart wrapper
                data: {
                    columns: [
                        // each columns data
                        ['data1', 11, 8, 15, 18, 19, 17],
                        ['data2', 7, 7, 5, 7, 9, 12]
                    ],
                    type: 'area-step', // default type of chart
                    colors: {
                        'data1': bigbucket.colors["pink"],
                        'data2': bigbucket.colors["azure"]
                    },
                    names: {
                        // name of each serie
                        'data1': 'Online',
                        'data2': 'Offline'
                    }
                },
                axis: {
                    x: {
                        type: 'category',
                        // name of each category
                        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun']
                    },
                },
                legend: {
                    show: true, //hide legend
                },
                padding: {
                    bottom: 0,
                    top: 0,
                    left: -10,
                },
            });
        });
        $(document).ready(function(){
            var chart = c3.generate({
                bindto: '#chart-pie', // id of chart wrapper
                data: {
                    columns: [
                        // each columns data
                        ['data1', 55],
                        ['data2', 25],
                        ['data3', 20],
                    ],
                    type: 'pie', // default type of chart
                    colors: {
                        'data1': bigbucket.colors["pink"],
                        'data2': bigbucket.colors["azure"],
                        'data3': bigbucket.colors["gray"],
                    },
                    names: {
                        // name of each serie
                        'data1': 'Arizona',
                        'data2': 'Florida',
                        'data3': 'Texas',
                    }
                },
                axis: {
                },
                legend: {
                    show: true, //hide legend
                },
                padding: {
                    bottom: 0,
                    top: 0
                },
            });
        });
    }, 50);

    setTimeout(function(){
        "use strict";
        var mapData = {
            "US": 298,
            "SA": 200,
            "AU": 760,
            "IN": 2000000,
            "GB": 120,        
        };	
        if( $('#world-map-markers').length > 0 ){
            $('#world-map-markers').vectorMap({
                map: 'world_mill_en',
                backgroundColor: 'transparent',
                borderColor: '#fff',
                borderOpacity: 0.25,
                borderWidth: 0,
                color: '#e6e6e6',
                regionStyle : {
                    initial : {
                        fill: '#4f5b65'
                    }
                },
    
                markerStyle: {
                initial: {
                            r: 5,
                            'fill': '#fff',
                            'fill-opacity':1,
                            'stroke': '#000',
                            'stroke-width' : 1,
                            'stroke-opacity': 0.4
                        },
                    },
            
                markers : [{
                    latLng : [21.00, 78.00],
                    name : 'INDIA : 350'
                
                },
                {
                    latLng : [-33.00, 151.00],
                    name : 'Australia : 250'
                    
                },
                {
                    latLng : [36.77, -119.41],
                    name : 'USA : 250'
                
                },
                {
                    latLng : [55.37, -3.41],
                    name : 'UK   : 250'
                
                },
                {
                    latLng : [25.20, 55.27],
                    name : 'UAE : 250'
                
                }],
    
                series: {
                    regions: [{
                        values: {
                            "US": '#49c5b6',
                            "SA": '#667add',
                            "AU": '#50d38a',
                            "IN": '#60bafd',
                            "GB": '#ff758e',
                        },
                        attribute: 'fill'
                    }]
                },
                hoverOpacity: null,
                normalizeFunction: 'linear',
                zoomOnScroll: false,
                scaleColors: ['#000000', '#000000'],
                selectedColor: '#000000',
                selectedRegions: [],
                enableZoom: false,
                hoverColor: '#fff',
            });
        }
    }, 100);
});
