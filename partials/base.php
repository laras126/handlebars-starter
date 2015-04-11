</script>

<script type="text/javascript">
    
    // Wait for page to load
    $(document).ready(function(){
      
        // Extract the text from the template .html() is the jquery helper method for that
        var raw_template = $('#main-template').html();
      
        // Compile that into an handlebars template
        var template = Handlebars.compile(raw_template);
      
        // Retrieve the placeHolder where the Posts will be displayed 
        var placeHolder = $("#main");
      
        // Fetch data from server in JSON
        $.get("data/<?php echo $data_file_name ?>", function(data, status, xhr) {
            
            // Generate the HTML for the template
            var html = template(data);
          
            // Render the posts into the page
            placeHolder.html(html);

        });

    });

  </script>
</head>
  
<body>

    <div class="wrapper">

        <?php include('partials/header.php'); ?>
        
        <div id="main" class="app-body">
            <img src="assets/img/loader.gif" class="app-loader">
        </div> <!-- /.app-body -->
        
        <?php include('partials/header.php'); ?>
        
    </div>

</body> 
</html>