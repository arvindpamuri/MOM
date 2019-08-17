<!DOCTYPE html>
<html>
<head>
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
</head>
<body>
    <form id="formoid" action="some.php" title="" method="post">
        <div>
            <label class="title">First Name</label>
            <input type="hidden" id="name" name="name" >
        </div>
        <div>
            <label class="title">Name</label>
            <input type="hidden" id="name2" name="name2" >
        </div>
        <div>
            <input type="submit" id="submitButton"  name="submitButton" value="Submit">
        </div>
 </form>
<script type='text/javascript'>
document.getElementById("name").value='ram anna';
document.getElementById("name2").value='CFO';
    /* attach a submit handler to the form */
    $("#formoid").submit(function(event) {

      /* stop form from submitting normally */
      event.preventDefault();

      /* get the action attribute from the <form action=""> element */
      var $form = $( this ),
          url = $form.attr( 'action' );

      /* Send the data using post with element id name and name2*/
      var posting = $.post( url, { name: $('#name').val(), name2: $('#name2').val() } );

      /* Alerts the results */
      posting.done(function( data ) {
        alert('success');
      });
    });
</script>

</body>
</html> 