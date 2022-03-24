<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Quotes</title>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script>
      $(document).ready(function(){
         // we are getting all of the quotes whenever the user first requests the page
        $.get('samples/index_html', function(res) {
          $('#quotes').html(res);
        });

        $('form').submit(function(){
          $.post('samples/create', $(this).serialize(), function(res) {
            $('#quotes').html(res);
          });
          return false;
        });

        $(document).on("submit", "form.delete", function() { 
            $.post('Samples/delete',$(this).serialize(), function(res){
                $('#quotes').html(res);  
            });
            return false;
        });

        $(document).on('submit', 'form.update', function(){
            $.post('Samples/update',$(this).serialize(), function(res){
                $('#quotes').html(res);  
            });
            return false;
          }); 

          $(document).on('change', 'form.update', function(){
            // alert('bakit');
            $.post('Samples/update',$(this).serialize(), function(res){
                $('#quotes').html(res);  
            });
            return false;
          }); 

      });
    </script>

    <style>
      .update{
        margin: 0px 0px 3px 0px;
      }
      form {
        margin-bottom: 30px;
      }
      div.quote{
        border: 1px solid black;
        margin: 2px;
        width: 350px;
        display: inline-block;
        vertical-align: top;
        padding: 5px;
        margin: 0px 0px 10px 0px;
      }
      
    </style>

  </head>
  <body>
    <h1>Ajax Notes  </h1>
    <div id="quotes">
    </div>

    <div class = "content_box" >
      <h1>Add new note</h1>
      <form action="samples/create" method="post"> 
        <label > Title </label>
        <p>
          <input type="text" name="author" placeholder = "Title">
        </p>
        <label > Description </label>
        <p>
          <textarea name="quote" value = "Description">
          </textarea>
        </p>
        <input type="submit" value="Add Notes">
      </form>
    </div>


  </body>
</html>