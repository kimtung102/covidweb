    document.addEventListener('DOMContentLoaded', ()=>{
        Highcharts.chart('container-chart',{
            chart: {
                type: 'line'
            },
            colors: ['#8ACA2B'],
            xAxis: {
                categories: ['1/11','2/11','3/11','4/11','5/11','6/11','7/11','8/11','9/11','10/11','11/11']
            },
            yAxis: {
                title: {
                    text: 'Số ca nhiễm'
                }
            },
            title: {
                text: 'Tổng số ca nhiễm'
            },
    
            series: [
                {
                    name: 'Số ca nhiễm',
                    data: [1,2,6,3,4,7,8,3,5,7,9]
                }
            ]
        })
    })

