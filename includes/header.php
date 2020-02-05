<div class="row flex-nowrap justify-content-between align-items-center">
<div class="col-1 text-left" style="cursor: pointer;">
    <a class="blog-header-logo p-1 " style="font-family: 'Poppins', sans-serif;
    font-size: 3em; background: linear-gradient(to bottom, #191C24 , #252935)!important; -webkit-background-clip: text!important; background-clip: text!important;
    -webkit-text-fill-color: transparent; cursor: pointer;" href="/ ">blog<strong>IT</strong></a>
</div>

    <div class="row col-10 flex-nowrap justify-content-between align-items-center">
    
    <div class="hamburger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>


    

    <div class=" nav-scroller justify-content-start mt-3 box ">

    <?php 
    
    $categories_q = mysqli_query($connection, "SELECT * FROM `articles_categories` ");
    $categories = array();
    while ( $cat = mysqli_fetch_assoc($categories_q)) {
        $categories[] = $cat;
    }

    ?>

        <nav class="nav d-flex align-items-left nav-links navbar-light text-secondary">
        <a class="p-2 text-muted res hLine" href="/">Home</a><hr class="hRl hide">
        <li class="nav-item dropdown text-secondary " >
            <a class="nav-link dropdown-toggle text-muted" href="pages/categories.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Categories
            </a>
            
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/pages/categories.php">All articles
                        </a></li>
                <div class="dropdown-divider"></div>

                <?php foreach ( $categories as $cat  ) { ?> 
                <li><a class="dropdown-item" href="/pages/categories.php?id=<?php echo $cat['id']; ?> "><?php echo $cat['title']; ?>
                

                <?php } ?>
            </ul>
        </li>
        
        <a class="text-muted searchAnim hide" href="#" aria-label="Search">
            <input type="text" name="Search" id="searchForm" value="Search..." class="hide">
            </a>
        <a class="btn btn-sm buttonUI signUp hide" href="#">Sign up</a>
        <a class="btn btn-sm buttonUI logIn hide" href="#">Log in</a>
        
        </nav>
    </div>
    <div class=" d-flex col-6 justify-content-end align-items-center responsive-authSearch hideDiv">
        
        <a class="text-muted searchAnim hideDiv" href="#" aria-label="Search">
        <input type="text" name="Search" id="searchForm" value="Search..." class="hide">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24" focusable="false"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
        </a>
        <a class="btn btn-sm buttonUI signUp hideDiv" href="#">Sign up</a>
        <a class="btn btn-sm buttonUI logIn hideDiv" href="#">Log in</a>
    </div>

    
    
    </div>
</div>
