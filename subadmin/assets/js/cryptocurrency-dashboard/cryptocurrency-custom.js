$(".to-do-scroll").mCustomScrollbar({axis:"yx",autoHideScrollbar:!0}),$(".all-coins .all-coins-scroll").mCustomScrollbar({axis:"x",autoHideScrollbar:!0});var chart=AmCharts.makeChart("activity-chart",{type:"serial",theme:"light",dataDateFormat:"YYYY-MM-DD",precision:2,valueAxes:[{id:"v1",title:"Sales",position:"left",autoGridCount:!1,labelFunction:function(e){return"$"+Math.round(e)+"M"}},{id:"v2",title:"Market Days",gridAlpha:0,position:"right",autoGridCount:!1}],graphs:[{id:"g3",valueAxis:"v1",lineColor:"#e6ecf5",fillColors:"#e6ecf5",fillAlphas:1,type:"column",title:"Actual Sales",valueField:"sales2",clustered:!1,columnWidth:.5,legendValueText:"$[[value]]M",balloonText:"[[title]]<br /><b style='font-size: 130%'>$[[value]]M</b>"},{id:"g4",valueAxis:"v1",lineColor:"#e95f2b",fillColors:"#e95f2b",fillAlphas:1,type:"column",title:"Target Sales",valueField:"sales1",clustered:!1,columnWidth:.3,legendValueText:"$[[value]]M",balloonText:"[[title]]<br /><b style='font-size: 130%'>$[[value]]M</b>"},{id:"g1",valueAxis:"v2",bullet:"round",bulletBorderAlpha:1,bulletColor:"#FFFFFF",bulletSize:5,hideBulletsCount:50,lineThickness:2,lineColor:"#6156ce",type:"smoothedLine",title:"Market Days",useLineColorForBulletBorder:!0,valueField:"market1",balloonText:"[[title]]<br /><b style='font-size: 130%'>[[value]]</b>"},{id:"g2",valueAxis:"v2",bullet:"round",bulletBorderAlpha:1,bulletColor:"#FFFFFF",bulletSize:5,hideBulletsCount:50,lineThickness:2,lineColor:"#04b331",type:"smoothedLine",dashLength:5,title:"Market Days ALL",useLineColorForBulletBorder:!0,valueField:"market2",balloonText:"[[title]]<br /><b style='font-size: 130%'>[[value]]</b>"}],chartCursor:{pan:!0,valueLineEnabled:!0,valueLineBalloonEnabled:!0,cursorAlpha:0,valueLineAlpha:.2},categoryField:"date",categoryAxis:{parseDates:!0,dashLength:1,minorGridEnabled:!0},legend:{useGraphSettings:!0,position:"top"},balloon:{borderThickness:1,shadowAlpha:0},dataProvider:[{date:"2018-12-16",market1:71,market2:75,sales1:5,sales2:8},{date:"2018-12-17",market1:74,market2:78,sales1:4,sales2:6},{date:"2018-12-18",market1:78,market2:88,sales1:5,sales2:2},{date:"2018-12-19",market1:85,market2:89,sales1:8,sales2:9},{date:"2018-12-20",market1:82,market2:89,sales1:9,sales2:6},{date:"2018-12-21",market1:83,market2:85,sales1:3,sales2:5},{date:"2018-12-22",market1:88,market2:92,sales1:5,sales2:7},{date:"2018-12-23",market1:85,market2:90,sales1:7,sales2:6},{date:"2018-12-24",market1:85,market2:91,sales1:9,sales2:5},{date:"2018-12-25",market1:80,market2:84,sales1:5,sales2:8},{date:"2018-12-26",market1:87,market2:92,sales1:4,sales2:8},{date:"2018-12-27",market1:84,market2:87,sales1:3,sales2:4},{date:"2018-12-28",market1:83,market2:88,sales1:5,sales2:7},{date:"2018-12-29",market1:84,market2:87,sales1:5,sales2:8},{date:"2018-12-30",market1:81,market2:85,sales1:4,sales2:7}]});$("#balance-btc").sparkline([5,6,5,7,9,7,3,3,9,4,6,4],{type:"line",width:"100",height:"30",lineColor:"#fff",lineWidth:1,spotRadius:3.5,fillColor:"transparent",spotColor:"#1ad271",spotRadius:0,minSpotColor:"#fff",maxSpotColor:"#fff"}),$("#received-btc").sparkline([2,6,3,9,5,9,3,6,4,4,6,7],{type:"line",width:"100",height:"30",lineColor:"#fff",lineWidth:1,spotRadius:3.5,fillColor:"transparent",spotColor:"#1ad271",spotRadius:0,minSpotColor:"#fff",maxSpotColor:"#fff"}),$("#sent-btc").sparkline([5,6,6,9,5,9,3,4,4,3,6,4],{type:"line",width:"100",height:"30",lineColor:"#fff",lineWidth:1,spotRadius:3.5,fillColor:"transparent",spotColor:"#1ad271",spotRadius:0,minSpotColor:"#fff",maxSpotColor:"#fff"}),$("#transaction-btc").sparkline([5,6,7,9,9,5,3,3,4,4,6,7],{type:"line",width:"100",height:"30",lineColor:"#fff",lineWidth:1,spotRadius:3.5,fillColor:"transparent",spotColor:"#1ad271",spotRadius:0,minSpotColor:"#fff",maxSpotColor:"#fff"});chart=AmCharts.makeChart("today-volume",{type:"pie",theme:"light",legend:{position:"bottom",autoMargins:!0,align:"center",labelText:"[[title]]  ",valueText:" $[[value]]"},colors:["#f8538d","#6156ce"],dataProvider:[{title:"Total Change",value:915.83},{title:"Today High ",value:9394.07}],labelText:"",labelRadius:5,balloonText:"[[title]]: $[[value]]",titleField:"title",valueField:"value",bullet:"round"}),chart=AmCharts.makeChart("traders-per-exchange-chart",{type:"pie",startDuration:0,theme:"light",colors:["#f8538d","#00b1f4","#e9b02b","#00d1c1","#6156ce","#e95f2b","#1a73e9"],addClassNames:!0,legend:{position:"left",marginLeft:50,autoMargins:!1,align:"center"},innerRadius:"65%",defs:{filter:[{id:"shadow",width:"200%",height:"200%",feOffset:{result:"offOut",in:"SourceAlpha",dx:0,dy:0},feGaussianBlur:{result:"blurOut",in:"offOut",stdDeviation:5},feBlend:{in:"SourceGraphic",in2:"blurOut",mode:"normal"}}]},dataProvider:[{bitCurrency:"Poloniex",trades:1e4},{bitCurrency:"Bitpanda",trades:23e3},{bitCurrency:"Bitstamp",trades:5e3},{bitCurrency:"Bitfinex",trades:15e3},{bitCurrency:"Manual Import",trades:17e3},{bitCurrency:"Bittrex",trades:12e3},{bitCurrency:"Kraken",trades:26e3}],valueField:"trades",titleField:"bitCurrency",responsive:{enabled:!0,rules:[{maxWidth:767,overrides:{legend:{position:"bottom",marginLeft:0}}}]}});$(".all-coins #btc").sparkline([4,6,7,5,4,5,7,3,4,9,6,3],{type:"line",width:"100",height:"30",lineColor:"#e95f2b",lineWidth:1,spotRadius:3.5,fillColor:"transparent",spotColor:"#1ad271",spotRadius:0,minSpotColor:"#e95f2b",maxSpotColor:"#e95f2b"}),$(".all-coins #eth").sparkline([5,6,7,9,8,5,2,3,9,4,6,7],{type:"line",width:"100",height:"30",lineColor:"#e95f2b",lineWidth:1,spotRadius:3.5,fillColor:"transparent",spotColor:"#1ad271",spotRadius:0,minSpotColor:"#e95f2b",maxSpotColor:"#e95f2b"}),$(".all-coins #xrp").sparkline([3,6,5,2,4,5,8,3,4,7,6,2],{type:"line",width:"100",height:"30",lineColor:"#e95f2b",lineWidth:1,spotRadius:3.5,fillColor:"transparent",spotColor:"#1ad271",spotRadius:0,minSpotColor:"#e95f2b",maxSpotColor:"#e95f2b"}),$(".all-coins #bch").sparkline([2,4,7,4,9,5,6,2,4,6,6,1],{type:"line",width:"100",height:"30",lineColor:"#e95f2b",lineWidth:1,spotRadius:3.5,fillColor:"transparent",spotColor:"#1ad271",spotRadius:0,minSpotColor:"#e95f2b",maxSpotColor:"#e95f2b"}),$(".all-coins #ada").sparkline([5,6,7,9,4,5,2,8,4,3,6,4],{type:"line",width:"100",height:"30",lineColor:"#e95f2b",lineWidth:1,spotRadius:3.5,fillColor:"transparent",spotColor:"#1ad271",spotRadius:0,minSpotColor:"#e95f2b",maxSpotColor:"#e95f2b"});var chartData=generateChartData2();function zoomChart(){chart.zoomToIndexes(chartData.length-40,chartData.length-1)}function generateChartData2(){var e=[],t=new Date;t.setDate(t.getDate()-5);for(var a=1200,l=0;l<1e3;l++){var o=new Date(t);o.setDate(o.getDate()+l),a+=Math.round((Math.random()<.5?1:-1)*Math.random()*10),e.push({date:o,visits:a})}return e}(chart=AmCharts.makeChart("bitcoin-chart",{type:"serial",theme:"light",marginRight:80,autoMarginOffset:20,marginTop:7,dataProvider:chartData,valueAxes:[{axisAlpha:.2,dashLength:1,position:"left"}],mouseWheelZoomEnabled:!0,graphs:[{id:"g1",balloonText:"[[value]]",bullet:"round",bulletBorderAlpha:1,bulletColor:"#FFFFFF",lineColor:"#ee3d50",hideBulletsCount:50,title:"red line",valueField:"visits",useLineColorForBulletBorder:!0,balloon:{drop:!0}}],chartCursor:{limitToGraph:"g1"},categoryField:"date",categoryAxis:{parseDates:!0,axisColor:"#DADADA",dashLength:1,minorGridEnabled:!0}})).addListener("rendered",zoomChart),zoomChart(),$(".bit-chart-volume").sparkline([5,6,8,9,3,4,3,4,5,6,7,2,3,4,4,4,3],{type:"bar",height:"50",barWidth:1,barSpacing:4,zeroAxis:!1}),$(".bit-chart-market-cap").sparkline([6,4,5,6,4,4,5,4,5,6,4,7,3,4,8,6,7],{type:"bar",height:"50",barWidth:1,barSpacing:4,zeroAxis:!1}),$(".bit-chart-max-supply").sparkline([3,6,4,6,3,4,6,3,6,4,4,2,3,4,6,5,3],{type:"bar",height:"50",barWidth:1,barSpacing:4,zeroAxis:!1});