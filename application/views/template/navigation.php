<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Projekt PDA</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Projekt PDA</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Domov</a></li>
                <li><a href="#about">Popis</a></li>
                <li><a href="#contact">Zadanie</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Príklady <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url('/index.php/users/')?>">DataTables</a></li>
                        <li><a href="#">GroceryCRUD</a></li>
                        <li><a href="#">Charts</a></li>
                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header">TBD</li>
                        <li><a href="#">TBD</a></li>
                        <li><a href="#">TBD</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="../navbar/">link</a></li>
                <li><a href="../navbar-static-top/">link</a></li>
                <li class="active"><a href="./"><span class="sr-only">(current)</span>link</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>