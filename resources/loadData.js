$(document).ready(function(){
  $.ajax({
    type: "GET",
    url: "resources/projects.xml",
    dataType: "xml",
    success: function(xml){
    //Placing down titles before looping through the XML entires
    $("<p></p>").html("Welcome to Jeremy Simon's Web Systems Development Archive!").appendTo("#welcome");
    $("<h2></h2>").html("Project Name").appendTo("#title");
    $("<h2></h2>").html("Description").appendTo("#desc");
    //Looping through all the labs first, setting variables for all the XML tags and then forming an entry, updating with .html as necessary.
    $(xml).find('lab').each(function(){
      var name = $(this).find('folderName').text();
      var desc = $(this).find('description').text();
      var link = $(this).find('location').text();
      $("<p></p>").html(name).appendTo("#title");
      $("<p></p>").html(desc).appendTo("#desc");
      $("<p></p>").html("<a href = " + link + "> Go to Page </a>").appendTo("#link");
    });
    //Looping through all homeworks, doing the same thing as labs, but keeping it in a seperate loop in case I ever need to customize between how labs and
    //homeworks are displayed.
      $(xml).find('homework').each(function(){
      var name = $(this).find('folderName').text();
      var desc = $(this).find('description').text();
      var link = $(this).find('location').text();
      $("<p></p>").html(name).appendTo("#title");
      $("<p></p>").html(desc).appendTo("#desc");
      $("<p></p>").html("<a href = " + link + "> Go to Page </a>").appendTo("#link");
    });
  },
  error: function() {
    alert("An error occurred while processing XML file.");
  }
  });
});
