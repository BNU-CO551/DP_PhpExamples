<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        code
        {
            wordwrap:none; color:#0000ff;
            font-family: monospace,monospace;
        }
    </style>
</head>
<body class="container">
    <header class="jumbotron">
        <h1>CO551 PHP Week 1 by Derek Peacock</h1>
    </header>
    <section class="row mb-3">
        <div class="col-4">
            <div class="card">
                <div class="card-header bg-success text-white mb-3">
                    Exercise 1
                </div>
                <code class="card-body border">
                    &lt;?php<br/>
                        $myVar = "Hello Derek";
                        $number = 5;<br/>

                        echo $myVar . " " . $number;<br/>
                    ?&gt;
                </code>               
                <div class="card-body mb-3">
                    <?php
                        $myVar = "Hello Derek";
                        $number = 5;

                        echo $myVar . " " . $number;
                    ?>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-header bg-warning text-white mb-3">
                    Exercise 2
                </div>
                <code class="card-body mb-3 border">
                    &lt;?php echo $_SERVER["HTTP_USER_AGENT"]; ?&gt; 
                </code>                
                <div class="card-body mb-3">
                    <?php echo $_SERVER["HTTP_USER_AGENT"]; ?> 
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-header bg-danger text-white mb-3">
                    Exercise 3
                </div>
                <code class="card-body mb-3 border">
                    &lt?php echo "Blimmy it worked !"; ?&gt; 
                </code>                
                <div class="card-body mb-3">
                    <?php echo "Blimmy it worked !"; ?> 
                </div>
            </div>
        </div>
    </section>
    <section class="row mb-3">
        <div class="col-4">
            <div class="card">
                <div class="card-header bg-success text-white mb-3">
                    Exercise 4
                </div>
                <code class="card-body border">
                    &lt;?php echo gmdate("M d Y");?&gt;
                </code>                
                <div class="card-body">
                    <?php echo gmdate("M d Y");?>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-header bg-warning text-white mb-3">
                    Exercise 5
                </div>
                <code class="card-body">
                    &lt;?php<br/>
                        $myfavouritemodule = "Internet Systems Development";<br/>
                        echo $myfavouritemodule;<br/>
                    ?&gt;
                </code>                
                <div class="card-body">
                    <?php
                        $myfavouritemodule = "Internet Systems Development";
                        echo $myfavouritemodule;
                    ?>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-header bg-danger text-white mb-3">
                    Exercise 6
                </div>
                <code class="card-body border">
                    &lt;?php<br/>
                        $firstname = "Derek";<br/>
                        $lastname = " Peacock";<br/>
                        $name = $firstname . $lastname;<br/>
                        echo $name;<br/>
                    ?&gt;
                </code>                
                <div class="card-body">
                    <?php
                        $firstname = "Derek";
                        $lastname = " Peacock";
                        $name = $firstname . $lastname;
                        echo $name;
                    ?>
                </div>
            </div>
        </div>
    </section> 

    <?php echo phpinfo();?> 

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>    
</body>
</html>




