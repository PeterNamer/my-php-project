<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="bot">
        <div id="container">
          <div id="header">
              Online Chatbot App
          </div>
      
          <div id="body">
              <!-- This section will be dynamically inserted from JavaScript -->
              <div class="userSection">
                <div class="messages user-message">
      
                </div>
                <div class="seperator"></div>
              </div>
              <div class="botSection">
                <div class="messages bot-reply">
      
                </div>
                <div class="seperator"></div>
              </div>                
          </div>
      
          <div id="inputArea">
            <input type="text" name="messages" id="userInput" placeholder="Please enter your message here" required>
            <input type="submit" id="send" value="Send">
          </div>
        </div>
        </div>

        <!-- PHP -->
        <?php

/* Establishes  a connection with database. First argument is the server name, second is the username for database, third is password (blank for me) and final is the database name 
*/
$conn = mysqli_connect("localhost","root","","onlinebot");

// If connection is established succesfully
if($conn)
{
     // Get users message from request object and escape characters
    $user_messages = mysqli_real_escape_string($conn, $_POST['messageValue']);

    // create SQL query for retrieving corresponding reply
    $query = "SELECT * FROM chatbot WHERE messages LIKE '%$user_messages%'";

     // Execute query on connected database using the SQL query
     $makeQuery = mysqli_query($conn, $query);

    if(mysqli_num_rows($makeQuery) > 0) 
    {

        // Get result
        $result = mysqli_fetch_assoc($makeQuery);

        // Echo only the response column
        echo $result['response'];
    }else{

        // Otherwise, echo this message
        echo "Sorry, I can't understand you.";
    }
}else {

    // If connection fails to establish, echo an error message
    echo "Connection failed" . mysqli_connect_errno();
}
?>
    <!-- JAVASCRIPT -->
<script type="text/javascript">

// When send button gets clicked
document.querySelector("#send").addEventListener("click", async () => {

  // create new request object. get user message
  let xhr = new XMLHttpRequest();
  var userMessage = document.querySelector("#userInput").value


  // create html to hold user message. 
  let userHtml = '<div class="userSection">'+'<div class="messages user-message">'+userMessage+'</div>'+
  '<div class="seperator"></div>'+'</div>'


  // insert user message into the page
  document.querySelector('#body').innerHTML+= userHtml;

  // open a post request to server script. pass user message as parameter 
  xhr.open("POST", "query.php");
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send(`messageValue=${userMessage}`);


  // When response is returned, get reply text into HTML and insert in page
  xhr.onload = function () {
      let botHtml = '<div class="botSection">'+'<div class="messages bot-reply">'+this.responseText+'</div>'+
      '<div class="seperator"></div>'+'</div>'

      document.querySelector('#body').innerHTML+= botHtml;
  }

})

</script>
</body>
</html>