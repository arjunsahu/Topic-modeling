<!DOCTYPE html>
<meta charset="utf-8">

<head>

<script
			  src="https://code.jquery.com/jquery-3.1.1.js"
			  integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
			  crossorigin="anonymous"></script>


<script src="https://d3js.org/d3.v3.min.js"></script>
<h1>line chart between Bangalore and Delhi based on Date </h1>
</head>

<style>

body {


    font: 10px sans-serif;
	padding-left:18vw;


}


.axis path, .axis line {


    fill: none;


    stroke: #000;


    shape-rendering: crispEdges;


}


.x.axis path {


    display: none;


}


.line {


    fill: none;


    stroke: steelblue;


    stroke-width: 1.5px;


}
</style>
<script>
window.onload = function(){

var data = [
    {
        <?php 
include 'dbConfig.php';
function clean($string) {
   $string = str_replace('-', '', $string); // Replaces all spaces with hyphens.
 $string = str_replace('/', '', $string);
 
   return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
}

	$data= array();
				   
			  $query = $db->query("SELECT * FROM data where City='Bangalore' ");
                    if($query->num_rows > 0){ 
                        while($row = $query->fetch_array()){
							 $item = array(
			 
            
		
				
            'Date' => clean($row["date"]),
			'Value' => $row["value"],
			
			
        );

        $data[] = $item;
						
						}
					}
					
			echo '"City": "Bangalore",
        "Data":';
					echo json_encode($data, JSON_UNESCAPED_SLASHES);
		echo' },
    {
        "City": "Delhi",
        "Data":';			
					
		$data1= array();
				   
			  $query = $db->query("SELECT * FROM data where City='Delhi' ");
                    if($query->num_rows > 0){ 
                        while($row = $query->fetch_array()){
							//echo $E=clean($row["date"]);
							 $item = array(
			 
            
		
				
            'Date' => clean($row["date"]),
			'Value' => $row["value"],
			 
			
        );

        $data1[] = $item;
						
						}
					}			
		echo json_encode($data1, JSON_UNESCAPED_SLASHES);
		
        //echo'} } ]';
    
		
					
   ?>	
    }
];

var margin = {
    top: 20,
    right: 80,
    bottom: 30,
    left: 50
},
width = 960 - margin.left - margin.right,
    height = 600 - margin.top - margin.bottom;

var parseDate = d3.time.format("%d%m%Y").parse;

                               

var x = d3.time.scale()
    .range([0, width]);

var y = d3.scale.linear()
    .range([height, 0]);

var color = d3.scale.category10();

var xAxis = d3.svg.axis()
    .scale(x)
    .orient("bottom");

var yAxis = d3.svg.axis()
    .scale(y)
    .orient("left");

var line = d3.svg.line()
    .interpolate("basis")
    .x(function (d) {
    return x(d.Date);
})
    .y(function (d) {
    return y(d.Value);
});

var svg = d3.select("body").append("svg")
    .attr("width", width + margin.left + margin.right)
    .attr("height", height + margin.top + margin.bottom)
    .append("g")
    .attr("transform", "translate(" + margin.left + "," + margin.top + ")");

color.domain(data.map(function (d) { return d.City; }));

data.forEach(function (kv) {
    kv.Data.forEach(function (d) {
        d.Date = parseDate(d.Date);
    });
});

var cities = data;

var minX = d3.min(data, function (kv) { return d3.min(kv.Data, function (d) { return d.Date; }) });
var maxX = d3.max(data, function (kv) { return d3.max(kv.Data, function (d) { return d.Date; }) });
var minY = d3.min(data, function (kv) { return d3.min(kv.Data, function (d) { return d.Value; }) });
var maxY = d3.max(data, function (kv) { return d3.max(kv.Data, function (d) { return d.Value; }) });

x.domain([minX, maxX]);
y.domain([minY, maxY]);

svg.append("g")
    .attr("class", "x axis")
    .attr("transform", "translate(0," + height + ")")
    .call(xAxis);

svg.append("g")
    .attr("class", "y axis")
    .call(yAxis)
    .append("text")
    .attr("transform", "rotate(-90)")
    .attr("y", 6)
    .attr("dy", ".71em")
    .style("text-anchor", "end")
    .text("Value");

var city = svg.selectAll(".city")
    .data(cities)
    .enter().append("g")
    .attr("class", "city");

city.append("path")
    .attr("class", "line")
    .attr("d", function (d) {
    return line(d.Data);
})
    .style("stroke", function (d) {
    return color(d.City);
});

city.append("text")
    .datum(function (d) {
    return {
        name: d.City,
        date: d.Data[d.Data.length - 1].Date,
        value: d.Data[d.Data.length - 1].Value
    };
})
    .attr("transform", function (d) {
    return "translate(" + x(d.date) + "," + y(d.value) + ")";
})
    .attr("x", 3)
    .attr("dy", ".35em")
    .text(function (d) {
        return d.name;
});
	
	};
	
	</script>