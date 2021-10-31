<!DOCTYPE html>
<html>
	<head>
		<title>ChartJS - Doughnut</title>
		
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script> 
      <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.4.0/dist/chartjs-plugin-datalabels.js"></script> 
	</head>
	<body>
		<canvas id="mycanvas" width="96" height="96"></canvas>
	</body>
</html> 
<script>
         var ctx=document.getElementById("mycanvas").getContext("2d");


	
	// var data ={
    //     labels:["loan","deposit"],
    //     datasets:[{
            
    //         data:[1,2]
    //     }]

    // };
    var data = {
    labels: ["She returns it ", "She keeps it"],
      datasets: [
        {
            fill: true,
            backgroundColor: [
                'black',
                'white'],
            data: [5, 95],
// Notice the borderColor 
            borderColor:	['black', 'black'],
            borderWidth: [2,2]
        }
    ]
};
//      var options ={
           
           
// responsive:true,
//                 legend:{
//                     position:'bottom',
//                 }
//             };


    // var myPieChart = new Chart(ctx,{
    // type: 'pie',
    // data: data,
    // options: options
    var myBarChart = new Chart(ctx, {
    type: 'pie',
    data: data,
    options: {
    tooltips: {
      mode: null
    },
    plugins: {
      datalabels: {
        borderWidth: 5,
        borderColor: "white",
        borderRadius: 8,
        // color: 0,
        font: {
          weight: "bold",
          size:90
        },
        
      }
    }
  

}});

</script>
</html>