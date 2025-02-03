google.charts.load("current", { packages: ["corechart"] });
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
  // -------------------------------------------------------------------------------------------------
  // revenue line graph
  var data = google.visualization.arrayToDataTable([
    ["Year", "Sales", "Expenses"],
    ["2004", 1000, 400],
    ["2005", 1170, 460],
    ["2006", 660, 1120],
    ["2007", 1030, 540],
  ]);

  var options = {
    // title: "Company Revenue",
    curveType: "function",
    legend: { position: "bottom" },
    width: 550,
    height: 240,
    colors: ["#7f94ff", "#3f5eff", "#2649ff", "#0029ff"],
    responsive: true,
  };

  var revenue_chart = new google.visualization.LineChart(
    document.getElementById("revenue_chart")
  );

  revenue_chart.draw(data, options);
  // ---------------------------------------------------------------------------------------------------
  // pie chart  Service Popularity
  var data1 = google.visualization.arrayToDataTable([
    ["Task", "Hours per Day"],
    ["Web Designing", 11],
    ["Android Development", 2],
    ["Digital Marketing", 2],
    ["UI/UX Design", 2],
  ]);

  var options1 = {
    // title: "My Daily Activities",
    width: 550,
    height: 240,
    colors: ["#0029ff", "#7f94ff", "#3f5eff", "#2649ff"],
    responsive: true,
  };

  var service_popularity = new google.visualization.PieChart(
    document.getElementById("service_popularity")
  );

  service_popularity.draw(data1, options1);

  // ------------------------------------------------------------------------------------------
  // Project Status
  var data3 = google.visualization.arrayToDataTable([
    ["Element", "Density", { role: "style" }],
    ["Active", 8.94, "#7f94ff"],
    ["Delayed", 10.49, "#3f5eff"],
    ["Completed", 19.3, "#2649ff"],
  ]);

  var view = new google.visualization.DataView(data3);
  view.setColumns([
    0,
    1,
    { calc: "stringify", sourceColumn: 1, type: "string", role: "annotation" },
    2,
  ]);

  var options3 = {
    title: "Density of Precious Metals, in g/cm^3",
    width: 350,
    height: 240,
    bar: { groupWidth: "95%" },
    legend: { position: "none" },
    responsive: true,
  };
  var service_popularity = new google.visualization.ColumnChart(
    document.getElementById("service_chart")
  );
  service_popularity.draw(view, options3);

  // -------------------------------------------------------------------------------------------------------

  // customer demographics
  var data4 = google.visualization.arrayToDataTable([
    ["Task", "Hours per Day"],
    ["Web", 30],
    ["Android", 30],
    ["Digital", 30],
    ["UI/UX", 10],
  ]);

  var options4 = {
    width: 350,
    height: 240,
    colors: ["#7f94ff", "#3f5eff", "#2649ff", "#0029ff"],
    // title: 'My Daily Activities',
    pieHole: 0.4,
    responsive: true,
  };

  var customer_demo = new google.visualization.PieChart(
    document.getElementById("customer_demo")
  );
  customer_demo.draw(data4, options4);

  // --------------------------------------------------------------------------------------------------
  // website traffic
  var data5 = google.visualization.arrayToDataTable([
    ["Task", "Hours per Day"],
    ["Organic", 30],
    ["Social", 30],
    ["Paid", 40],
  ]);

  var options5 = {
    width: 350,
    height: 240,
    colors: ["#7f94ff", "#3f5eff", "#2649ff"],
    // title: 'My Daily Activities',
    pieHole: 0.4,
    responsive: true,
  };

  var website_traffic = new google.visualization.PieChart(
    document.getElementById("website_traffic")
  );
  website_traffic.draw(data5, options5);
}

// var options = {
//   width: 80,
//   width_units: '%'
// }

// $(window).resize(function () {
//   drawChart();
// });
