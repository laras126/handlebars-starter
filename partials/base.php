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

        <header class="app-header">
            <h1>My App Title</h1>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="sample-list.php">Example List</a></li>
                </ul>
            </nav>
        </header> <!-- /.app-header -->
        
        <div id="main" class="app-body">
            <img src="assets/img/loader.gif" class="app-loader">
        </div> <!-- /.app-body -->

        <footer class="app-footer">
            <p>&copy; Your name 2015</p>
        </footer> <!-- /.app-footer -->

    </div>

</body> 
</html>