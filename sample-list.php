<?php 
    $data_file_name = "sample-list.json";
    include('partials/head.php'); 
?>

    <h1>{{page_title}}</h1>
    <ul>
        {{#each people}}
            <li>
                <h4>{{first_name}} {{last_name}}</h4>
                <p>p: {{phone}} | e: <a href="mailto:{{email}}">{{email}}</a></p>
                <img src="{{img_src}}" alt="{{first_name}} {{last_name}}">
            </li>
        {{/each}}
    </ul>
  
<?php include('partials/base.php'); ?>