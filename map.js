var data = [
    ['vn-3655', 0],
    ['vn-qn', 1],
    ['vn-kh', 2],
    ['vn-tg', 3],
    ['vn-bv', 4],
    ['vn-bu', 5],
    ['vn-hc', 6],
    ['vn-br', 7],
    ['vn-st', 8],
    ['vn-pt', 9],
    ['vn-yb', 10],
    ['vn-hd', 11],
    ['vn-bn', 12],
    ['vn-317', 13],
    ['vn-nb', 14],
    ['vn-hm', 15],
    ['vn-ho', 16],
    ['vn-vc', 17],
    ['vn-318', 18],
    ['vn-bg', 19],
    ['vn-tb', 20],
    ['vn-ld', 21],
    ['vn-bp', 22],
    ['vn-py', 23],
    ['vn-bd', 24],
    ['vn-724', 25],
    ['vn-qg', 26],
    ['vn-331', 27],
    ['vn-dt', 28],
    ['vn-la', 29],
    ['vn-3623', 30],
    ['vn-337', 31],
    ['vn-bl', 32],
    ['vn-vl', 33],
    ['vn-tn', 34],
    ['vn-ty', 35],
    ['vn-li', 36],
    ['vn-311', 37],
    ['vn-hg', 38],
    ['vn-nd', 39],
    ['vn-328', 40],
    ['vn-na', 41],
    ['vn-qb', 42],
    ['vn-723', 43],
    ['vn-nt', 44],
    ['vn-6365', 45],
    ['vn-299', 46],
    ['vn-300', 47],
    ['vn-qt', 48],
    ['vn-tt', 49],
    ['vn-da', 50],
    ['vn-ag', 51],
    ['vn-cm', 52],
    ['vn-tv', 53],
    ['vn-cb', 54],
    ['vn-kg', 55],
    ['vn-lo', 56],
    ['vn-db', 57],
    ['vn-ls', 58],
    ['vn-th', 10],
    ['vn-307', 60],
    ['vn-tq', 61],
    ['vn-bi', 62],
    ['vn-333', 63]
];
    
    Highcharts.mapChart('map',{
        chart: {
            map: 'countries/vn/vn-all'
        },
        title : {
            text: null
        },
        mapNavigation: {
            enabled: true
        },
        colorAxis: {
            min :0,
            max: 70,
            minColor: '#ffffe5',
            maxColor: '#005730',
            // stops: [
            //     []
            // ]
        },
       
        
        legend: {
            layout: 'horizontal',
            align: 'center',
            verticalAlign: 'bottom'
        },
        series: [
            {
                data: data,
                name: 'Vaccine',
                states: {
                    hover: {
                        borderColor: '#555555'
                    }
                }
            }
            
        ]
    });