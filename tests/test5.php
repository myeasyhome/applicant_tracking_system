
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>W4 Form</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">

  </head>

  <body class="text-center">


 


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


<style>

input {
    background-color: transparent;
    border: 0px solid;
    font-weight: bold;
    background-color: yellow;
    
}





  input[type=checkbox] {
    display:none;
    background-color: yellow;
  }
  input[type=checkbox] + label
   {
       background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAQAAAC1+jfqAAAAEUlEQVR42mNkIAAYRxWMJAUAE5gAEdz4t9QAAAAASUVORK5CYII=);
       height: 16px;
       width: 16px;
       display:inline-block;
       padding: 0 0 0 0px;
   }
   
   input[type=checkbox]:checked + label
    {
        background-image: url("img/checkbox-on.png");
        height: 16px;
        width: 16px;
        display:inline-block;
        padding: 0 0 0 0px;
    }

</style>


<div >
    <canvas id="formCanvas" width="1024" height="1325"></canvas>

    <input type="text" value="ssssss" style="position:absolute;left:60px;top:115px;width:300px; " />

    <input type="text" style="position:absolute;left:360px;top:115px;width:372px; " />

    <input type="text" style="position:absolute;left:732px;top:115px;width:230px; " />

    <input type="text" style="position:absolute;left:60px;top:156px;width:456px; " />

   
    <input type='checkbox' name='thing' value='valuable' id="thing"/><label for="thing" style="position:absolute;left:540px;top:141px;"></label>

    <input type='checkbox' name='thing' value='valuable' id="thing2"/><label for="thing2" style="position:absolute;left:612px;top:141px;"></label>

    <input type='checkbox' name='thing' value='valuable' id="thing3"/><label for="thing3" style="position:absolute;left:696px;top:141px;"></label>


</div>



<script>


//drawing.src = "uploads/forms/fw4-1.png"; // can also be a remote URL e.g. http://
var canvas=document.getElementById("formCanvas");
var context=canvas.getContext('2d');

var image=new Image();
image.onload=function(){
context.drawImage(image,0,0,canvas.width,canvas.height);
};
image.src="uploads/forms/fw4-1024px/fw4-1.png";






//form_context.fillText("How Well Do You Know Your Swedish?", 320, 0);    
</script>

<script>

  $("input:checkbox").on('click', function() {
  // in the handler, 'this' refers to the box clicked on
  var $box = $(this);
  if ($box.is(":checked")) {
    // the name of the box is retrieved using the .attr() method
    // as it is assumed and expected to be immutable
    var group = "input:checkbox[name='" + $box.attr("name") + "']";
    // the checked state of the group/box on the other hand will change
    // and the current value is retrieved using .prop() method
    $(group).prop("checked", false);
    $box.prop("checked", true);
  } else {
    $box.prop("checked", false);
  }
});



</script>




    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/login.js"></script>

</body>
</html>    