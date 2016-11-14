$(document).ready(function() {
  $("#site").click(function(event){
    $.ajax({
      type: "GET",
      url: "resources/lab4.json",
      dataType: "json",
      success: function(responseData, status){ 
        $( "#site" ).remove();
        $.each(responseData.playlist, function(i, rows) {
          for(j = 0; j < rows.length; j++){
            if(j == 0){
              $('<p></p>').html(rows[0].col1).appendTo('#title');
              $('<p></p>').html(rows[0].col2).appendTo('#artist');
              $('<p></p>').html(rows[0].col3).appendTo('#album');
              $('<p></p>').html(rows[0].col4).appendTo('#albumCover');
              $('<p></p>').html(rows[0].col5).appendTo('#date');
              $('<p></p>').html(rows[0].col6).appendTo('#genreDiv');
            }
            else{
              $('#title').append("<div class = 'cell'><h1>"+rows[j].song+"</h1></div>");
              $('#artist').append("<div class = 'cell'><h2><a href = " + rows[j].artistLink + ">" + rows[j].artist + "</a></h2></div>");
              $('#album').append("<div class = 'cell'><h2><a href = " + rows[j].albumLink + ">" + rows[j].albumName + "</a></h2></div>");
              $('#albumCover').append("<img src = " + rows[j].albumCover + ">");
              $('#date').append("<div class = 'cell'><p>" + rows[j].release + "</p></div>");
              var genres = "<div class = 'cell'><ul class = 'bulletStyle'>";
              for(k = 0; k < rows[j].genres.length; k++){
                genres+="<li>"+rows[j].genres[k].genre+"</li>";
              }
              genres += "</ul></div>";
              $("#genreDiv").append(genres);
            }
          }
      });
        //$("#title:nth-child(4)").css("color","green");
      }, error: function(msg) {
          alert("There was a problem: " + msg.status + " " + msg.statusText);
      }
    })
  });
})