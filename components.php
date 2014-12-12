<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GetInsured Style Guide v1.0</title>

    <!-- Bootstrap -->

<!--     <link href="css/bootstrap_nm.css" rel="stylesheet">--> 
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet"> 
    <link href="css/bootstrap2.min.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/docs.css" rel="stylesheet">
<!--     <link href="css/gi-base.css" rel="stylesheet"> -->
    <link href="css/style-guide.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,400,600,700,300' rel='stylesheet' type='text/css'>

    <link href="css/bootstrap3.css" rel="stylesheet">
    <link href="css/bootstrap-theme3.css" rel="stylesheet">
    <link href="css/bootstrap-theme3.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body data-spy="scroll">
    
    
    
<?php
  include "nav-bar.php";
?>



<div class="section-intro" id="component">
  <div class="container-fluid">
    <h1 class="header">Page Components</h1>
    <p>Reusable components built to provide navigation, tables and more.</p>
  </div>
</div>


<div class="container-fluid center-page">    
      
    <section class="content" id="top-page">  
        <div class="row-fluid">
            <div class="span3">
                <ol class="chapter">
                    <li><a href="#patters">Screen Patterns</a></li>
                    <li><a href="#basic-html">Basic HTML</a></li>
                    <li><a href="#grid-system">Grid System</a></li>
                    <li><a href="#navigation">Navigation</a></li>
                    <li><a href="#pagination">Pagination</a></li>
                    <li><a href="#tables">Tables</a></li>
                    <li><a href="#refine-results">Refine Results &amp; Table Information</a></li>
                    <li><a href="#checkbox-radio">Checkboxes and Radio Buttons</a></li>
                    <li><a href="#form-action">Form Actions</a></li>
                    <li><a href="#form-errors">Form Errors</a></li>
                    <li><a href="#select">Selects and Options</a></li>
                    <li><a href="#form controls">Extending Form Controls</a></li>
                    <li><a href="#additional">Additional Form Fields</a></li>
                    <li><a href="#responsive">Responsive Design</a></li>
                </ol>
            </div><!--/.span3-->

            <div class="span9">
                
        <div class="style-group" id="patterns">
            <h2>Screen Patterns</h2>
            <p>These are all the templates that display variations in content across multiple appearances in the design while ensuring a consistent visual appearance.</p>
           
           <ul class="pattern-image-list">
             <li><h4>Search Table</h4><img src="images/search-table.jpg" alt="Search Table Image"></li>
             <li><h4>Table Details</h4><img src="images/table-details.jpg" alt="Table Details Image"></li>
             <li><h4>Edit Details</h4><img src="images/edit-details.jpg" alt="Edit Details Image"></li>
             <li><h4>Form Flow</h4><img src="images/form-flow.jpg" alt="Form Flow Image"></li>
           </ul>

           <div class="prettyprint message pm"><strong>PROJECT MANAGERS:</strong> It is vital that you have all these layouts planned ahead of time. It makes implementation a lot easier.</div>
           <div class="prettyprint message go"><strong>LOOK:</strong> You aren't confined to just these layouts. Make your own patterns that follow the GI style and if it looks good, we'll add it to this guide!</div>
          </div>


         
        <div class="style-group" id="basic-html">
        <h2>Basic HTML Template</h2>
        <p>We make use of certain HTML elements and CSS properties that require the use of HTML5 doctype. Make sure to include it in the beginning of all your projects.</p>

        <pre class="prettyprint lineums"><span style="color: #999999; font-weight: bold">&lt;!DOCTYPE html&gt;</span>
<span style="color: #000080">&lt;html&gt;</span>
   <span style="color: #000080">&lt;head&gt;</span>
      <span style="color: #000080">&lt;title&gt;</span>GetInsured&#39;s Awesome Template<span style="color: #000080">&lt;/title&gt;</span>
      <span style="color: #000080">&lt;meta</span> <span style="color: #008080">name=</span><span style="color: #bb8844">&quot;viewport&quot;</span> <span style="color: #008080">content=</span><span style="color: #bb8844">&quot;width=device-width, initial-scale=1.0&quot;</span><span style="color: #000080">&gt;</span>
      <span style="color: #999988; font-style: italic">&lt;!-- Bootstrap --&gt;</span>
      <span style="color: #000080">&lt;link</span> <span style="color: #008080">href=</span><span style="color: #bb8844">&quot;css/bootstrap.min.css&quot;</span> <span style="color: #008080">rel=</span><span style="color: #bb8844">&quot;stylesheet&quot;</span> <span style="color: #008080">media=</span><span style="color: #bb8844">&quot;screen&quot;</span><span style="color: #000080">&gt;</span>
      <span style="color: #000080">&lt;link</span> <span style="color: #008080">href=</span><span style="color: #bb8844">&quot;css/gi-base.css&quot;</span> <span style="color: #008080">rel=</span><span style="color: #bb8844">&quot;stylesheet&quot;</span> <span style="color: #008080">media=</span><span style="color: #bb8844">&quot;screen&quot;</span><span style="color: #000080">&gt;</span>
   <span style="color: #000080">&lt;/head&gt;</span>
   <span style="color: #000080">&lt;body&gt;</span>
      <span style="color: #000080">&lt;h1&gt;</span>Hello, world! Meow.<span style="color: #000080">&lt;/h1&gt;</span>
      <span style="color: #000080">&lt;script </span><span style="color: #008080">src=</span><span style="color: #bb8844">&quot;http://code.jquery.com/jquery.js&quot;</span><span style="color: #000080">&gt;&lt;/script&gt;</span>
      <span style="color: #000080">&lt;script </span><span style="color: #008080">src=</span><span style="color: #bb8844">&quot;js/bootstrap.min.js&quot;</span><span style="color: #000080">&gt;&lt;/script&gt;</span>
   <span style="color: #000080">&lt;/body&gt;</span>
<span style="color: #000080">&lt;/html&gt;</span></pre>


        
<h4>Code Style</h4>
<ul>
    <li>Attribute values should be wrapped in single quotes</li>
    <li>Paragraphs of text should always be placed in a <code>&lt;p&gt;</code> tag. Never use multiple <code>&lt;br/&gt;</code> tags.</li>
    <li>List items should always be in <code>&lt;ul&gt;</code>, <code>&lt;ol&gt;</code>, or <code>&lt;dl&gt;</code>.</li>
    <li>Every visible form input should use a <code>&lt;label&gt;</code> tag.</li>
    <li>All styles should go in the CSS/LESS files and not go inline.</li>
</ul>

<pre class="prettyprint message stop"><strong>STOP:</strong> This first step is crucial so make sure it's correct. If this doesn't work, nothing will.</pre>

        </div><!--/.style-group-->

        

        <div class="style-group" id="grid-system">
            <h2>Grid System</h2>
            <p>As this is a 12-column grid, each <code>.span*</code> spans a number of those 12 columns, and should always add up to 12 for each row (or the number of columns in the parent). Each row is surrounded by a <code>.row-fluid</code>. This operates as a fluid gridding system for responsive design.</p>

            <div class="bs-docs-example">
                <div class="row-fluid show-grid">
                  <div class="span1">1</div>
                  <div class="span1">1</div>
                  <div class="span1">1</div>
                  <div class="span1">1</div>
                  <div class="span1">1</div>
                  <div class="span1">1</div>
                  <div class="span1">1</div>
                  <div class="span1">1</div>
                  <div class="span1">1</div>
                  <div class="span1">1</div>
                  <div class="span1">1</div>
                  <div class="span1">1</div>
                </div>

                <div class="row-fluid show-grid">
                  <div class="span4">4</div>
                  <div class="span4">4</div>
                  <div class="span4">4</div>
                </div>

                <div class="row-fluid show-grid">
                  <div class="span4">4</div>
                  <div class="span8">8</div>
                </div>

                <div class="row-fluid show-grid">
                  <div class="span6">6</div>
                  <div class="span6">6</div>
                </div>

                <div class="row-fluid show-grid">
                  <div class="span12">12</div>
                </div>
            </div>
                </div><!--/.style-group-->


          <div class="style-group" id="navigation">
            <h2>Navigation</h2>
            <p>There are a few different navigations as the user is logged in or on the home page.</p>

            <h3>Main Navigation</h3>
            <p>This is the brand navigation. It includes dropdown menus as well as a place to put your logo.</p>
            <p>Use <code>&lt;ul&gt;</code> and add <code>.nav</code>. Include <code>.dropdown</code> to the <code>&lt;ul&gt;</code> tag for a dropdown menu.</p>

            <div class="bs-docs-example">

                <div class="navbar" id="masthead">
                    <div class="navbar-inner">
                        <div class="container">
                            <button type="button" class="btn btn-navbar" data-toggle="collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <ul class="nav">
                                <li>
                                    <a href="#" onclick="return false;"><img class="brand masthead-img">Brand Logo</a>
                                </li>
                            </ul>
                            <div class="nav-collapse collapse pull-right">
                                <ul class="nav pull-right clearfix">
                                    <li><a href="#" onclick="return false;">Inbox</a></li>
                                    <li><a href="#" onclick="return false;">Get Assistance</a></li>
                                    <li><a href="#" onclick="return false;">My Account</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--bs-docs-->
            <pre class="prettyprint"><span style="color: #000080">&lt;div</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;navbar&quot;</span> <span style="color: #008080">id=</span><span style="color: #bb8844">&quot;menu&quot;</span><span style="color: #000080">&gt;</span>
   <span style="color: #000080">&lt;a</span> <span style="color: #008080">href=</span><span style="color: #bb8844">&quot;#sidebar&quot;</span> <span style="color: #008080">name=</span><span style="color: #bb8844">&quot;skip&quot;</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;skip-menu&quot;</span> <span style="color: #008080">accesskey=</span><span style="color: #bb8844">&quot;m&quot;</span><span style="color: #000080">&gt;</span>Skip Menu to Side Bar<span style="color: #000080">&lt;/a&gt;</span>
   <span style="color: #000080">&lt;div</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;navbar-inner&quot;</span><span style="color: #000080">&gt;</span>
      <span style="color: #000080">&lt;ul</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;nav&quot;</span><span style="color: #000080">&gt;</span>
         <span style="color: #000080">&lt;li</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;dropdown active&quot;</span><span style="color: #000080">&gt;</span>
            <span style="color: #000080">&lt;a</span> <span style="color: #008080">href=</span><span style="color: #bb8844">&quot;#&quot;</span> <span style="color: #008080">title=</span><span style="color: #bb8844">&quot;#&quot;</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;dropdown-toggle&quot;</span> <span style="color: #008080">data-toggle=</span><span style="color: #bb8844">&quot;dropdown&quot;</span><span style="color: #000080">&gt;</span>Panda <span style="color: #000080">&lt;i</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;icon-caret-down&quot;</span><span style="color: #000080">&gt;&lt;/i&gt;&lt;span</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;aria-hidden&quot;</span><span style="color: #000080">&gt;</span> Dropdown Menu. Press enter to open it and tab through its options<span style="color: #000080">&lt;/span&gt;&lt;/a&gt;</span>
            <span style="color: #000080">&lt;ul</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;dropdown-menu&quot;</span><span style="color: #000080">&gt;</span>
               <span style="color: #000080">&lt;li&gt;&lt;a</span> <span style="color: #008080">href=</span><span style="color: #bb8844">&quot;#&quot;</span> <span style="color: #008080">title=</span><span style="color: #bb8844">&quot;&quot;</span><span style="color: #000080">&gt;</span>Polar Bear<span style="color: #000080">&lt;/a&gt;&lt;/li&gt;</span>
            <span style="color: #000080">&lt;/ul&gt;</span>
         <span style="color: #000080">&lt;/li&gt;</span>
         <span style="color: #000080">&lt;li</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;dropdown &quot;</span><span style="color: #000080">&gt;</span> ... <span style="color: #000080">&lt;/li&gt;</span>
      <span style="color: #000080">&lt;/ul&gt;</span>
   <span style="color: #000080">&lt;/div&gt;</span>
<span style="color: #000080">&lt;/div&gt;</span>
</pre>
  
            <div class="prettyprint message note"><strong>NOTE:</strong> Make sure your navigation bar is consistent through the whole website.</div>

            <h3>Sub Navigation</h3>
              <p>When a user is logged in, this menu navigation will show up as the secondary navigation within the product. Including the <code>&lt;a&gt;</code> tag with <code>.skip-menu</code> is good practice for accessibility.</p>
             <div class="bs-docs-example">           
              <div class="navbar" id="menu">
                    <a href="#sidebar" name="skip" class="skip-menu" accesskey="m">Skip Menu to Side Bar</a><div class="navbar-inner">
                        <ul class="nav">
                          <li class="dropdown">
                            <a href="#" title="#" class="dropdown-toggle" data-toggle="dropdown">Panda <i class="icon-caret-down"></i><span class="aria-hidden"> Dropdown Menu. Press enter to open it and tab through its options</span></a>
                            <ul class="dropdown-menu">
                               <li><a href="#" title="" onclick="return false;">Polar Bear</a></li>
                               <li><a href="#" title="" onclick="return false;">Brown Bear<span class="aria-hidden"> End of dropdown</span></a></li>
                            </ul>
                         </li>
                        <li class="dropdown ">
                           <a href="#" title="#" class="dropdown-toggle" data-toggle="dropdown">Dolphin <i class="icon-caret-down"></i><span class="aria-hidden"> Dropdown Menu. Press enter to open it and tab through its options</span></a>
                             <ul class="dropdown-menu">
                                <li><a href="#" title="#" onclick="return false;">Blue Whale</a></li>
                                <li><a href="#" title="#" onclick="return false;">Orca Whale</a></li>
                                <li><a href="#" title="#" onclick="return false;">Humpback Whale</a></li>
                                <li><a href="#" title="#" onclick="return false;">Beluga Whale<span class="aria-hidden"> End of dropdown</span></a></li>
                              </ul>
                        </li>
                        <li class="dropdown ">
                          <a href="#" title="#" class="dropdown-toggle" data-toggle="dropdown">Tiger <i class="icon-caret-down"></i><span class="aria-hidden"> Dropdown Menu. Press enter to open it and tab through its options</span></a>
                            <ul class="dropdown-menu">
                              <li><a href="#" title="#" onclick="return false;">Lions<span class="aria-hidden"> End of dropdown</span></a></li>
                            </ul>
                         </li>
                         
                         <li class="dropdown ">
                          <a href="#" title="#" class="dropdown-toggle" data-toggle="dropdown">Hummingbird <i class="icon-caret-down"></i><span class="aria-hidden"> Dropdown Menu. Press enter to open it and tab through its options</span></a>
                            <ul class="dropdown-menu">
                              <li><a href="#" title="#" onclick="return false;">Bees<span class="aria-hidden"> End of dropdown</span></a></li>
                            </ul>
                         </li>
                         
                         <li class="dropdown ">
                          <a href="#" title="#" class="dropdown-toggle" data-toggle="dropdown">Salmon <i class="icon-caret-down"></i><span class="aria-hidden"> Dropdown Menu. Press enter to open it and tab through its options</span></a>
                            <ul class="dropdown-menu">
                              <li><a href="#" title="#"  onclick="return false;">Tuna<span class="aria-hidden"> End of dropdown</span></a></li>
                            </ul>
                         </li>
                         
                         <li class="dropdown ">
                          <a href="#" title="#" class="dropdown-toggle" data-toggle="dropdown">Wolf <i class="icon-caret-down"></i><span class="aria-hidden"> Dropdown Menu. Press enter to open it and tab through its options</span></a>
                            <ul class="dropdown-menu">
                              <li><a href="#" title="#" onclick="return false;">Wirewolf<span class="aria-hidden"> End of dropdown</span></a></li>
                            </ul>
                         </li>
                         
                         <li class="dropdown ">
                          <a href="#" title="#" class="dropdown-toggle" data-toggle="dropdown">Rabbit <i class="icon-caret-down"></i><span class="aria-hidden"> Dropdown Menu. Press enter to open it and tab through its options</span></a>
                            <ul class="dropdown-menu">
                              <li><a href="#" title="#" onclick="return false;">Mouse<span class="aria-hidden"> End of dropdown</span></a></li>
                            </ul>
                         </li>
                      </ul>
                    </div>
                  </div>
              </div><!--/.bc-docs-example-->
              <pre class="prettyprint"><span style="color: #000080">&lt;div</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;navbar&quot;</span> <span style="color: #008080">id=</span><span style="color: #bb8844">&quot;menu&quot;</span><span style="color: #000080">&gt;</span>
   <span style="color: #000080">&lt;a</span> <span style="color: #008080">href=</span><span style="color: #bb8844">&quot;#sidebar&quot;</span> <span style="color: #008080">name=</span><span style="color: #bb8844">&quot;skip&quot;</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;skip-menu&quot;</span> <span style="color: #008080">accesskey=</span><span style="color: #bb8844">&quot;m&quot;</span><span style="color: #000080">&gt;</span>Skip Menu to Side Bar<span style="color: #000080">&lt;/a&gt;</span>
   <span style="color: #000080">&lt;div</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;navbar-inner&quot;</span><span style="color: #000080">&gt;</span>
      <span style="color: #000080">&lt;ul</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;nav&quot;</span><span style="color: #000080">&gt;</span>
         <span style="color: #000080">&lt;li</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;dropdown active&quot;</span><span style="color: #000080">&gt;</span>
            <span style="color: #000080">&lt;a</span> <span style="color: #008080">href=</span><span style="color: #bb8844">&quot;#&quot;</span> <span style="color: #008080">title=</span><span style="color: #bb8844">&quot;#&quot;</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;dropdown-toggle&quot;</span> <span style="color: #008080">data-toggle=</span><span style="color: #bb8844">&quot;dropdown&quot;</span><span style="color: #000080">&gt;</span>Panda <span style="color: #000080">&lt;i</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;icon-caret-down&quot;</span><span style="color: #000080">&gt;&lt;/i&gt;&lt;span</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;aria-hidden&quot;</span><span style="color: #000080">&gt;</span> Dropdown Menu. Press enter to open it and tab through its options<span style="color: #000080">&lt;/span&gt;&lt;/a&gt;</span>
            <span style="color: #000080">&lt;ul</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;dropdown-menu&quot;</span><span style="color: #000080">&gt;</span>
               <span style="color: #000080">&lt;li&gt;&lt;a</span> <span style="color: #008080">href=</span><span style="color: #bb8844">&quot;#&quot;</span> <span style="color: #008080">title=</span><span style="color: #bb8844">&quot;&quot;</span><span style="color: #000080">&gt;</span>Polar Bear<span style="color: #000080">&lt;/a&gt;&lt;/li&gt;</span>
               <span style="color: #000080">&lt;li&gt;&lt;a</span> <span style="color: #008080">href=</span><span style="color: #bb8844">&quot;#&quot;</span> <span style="color: #008080">title=</span><span style="color: #bb8844">&quot;&quot;</span><span style="color: #000080">&gt;</span>Brown Bear<span style="color: #000080">&lt;span</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;aria-hidden&quot;</span><span style="color: #000080">&gt;</span> End of dropdown<span style="color: #000080">&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;</span>
            <span style="color: #000080">&lt;/ul&gt;</span>
         <span style="color: #000080">&lt;/li&gt;</span>
         <span style="color: #000080">&lt;li</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;dropdown &quot;</span><span style="color: #000080">&gt;</span>
            <span style="color: #000080">&lt;a</span> <span style="color: #008080">href=</span><span style="color: #bb8844">&quot;#&quot;</span> <span style="color: #008080">title=</span><span style="color: #bb8844">&quot;#&quot;</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;dropdown-toggle&quot;</span> <span style="color: #008080">data-toggle=</span><span style="color: #bb8844">&quot;dropdown&quot;</span><span style="color: #000080">&gt;</span>Dolphin <span style="color: #000080">&lt;i</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;icon-caret-down&quot;</span><span style="color: #000080">&gt;&lt;/i&gt;&lt;span</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;aria-hidden&quot;</span><span style="color: #000080">&gt;</span> Dropdown Menu. Press enter to open it and tab through its options<span style="color: #000080">&lt;/span&gt;&lt;/a&gt;</span>
            <span style="color: #000080">&lt;ul</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;dropdown-menu&quot;</span><span style="color: #000080">&gt;</span>
               <span style="color: #000080">&lt;li&gt;</span>...<span style="color: #000080">&lt;/li&gt;</span>
            <span style="color: #000080">&lt;/ul&gt;</span>
         <span style="color: #000080">&lt;/li&gt;</span>
      <span style="color: #000080">&lt;/ul&gt;</span>
      <span style="color: #000080">&lt;/li&gt;</span>
      <span style="color: #000080">&lt;/ul&gt;</span>
   <span style="color: #000080">&lt;/div&gt;</span>
<span style="color: #000080">&lt;/div&gt;</span>
</pre>


        </div><!--/.style-group-->

        <div class="style-group" id="pagination">
            <h2>Pagination</h2>
            <p>The large block is hard to miss, easily scalable, and provides large click areas. It is wrapped around <code>.txt-center</code>. To make a page active, add <code>.active</code> to the <code>li</code>.</p>
            <h3>Active Page</h3>
            <p>If you are on page 1, <code>.disable</code> the first arrow. After the first page, enable it because you will be able to click through.</p>
            <div class="bs-docs-example">
<div class="txt-center">
   <div class="pagination">
              <ul>
                <li class="disabled" onclick="return false;"><a href="#">&lt;&lt;</a></li>
                <li class="active" onclick="return false;"><a href="#">1</a></li>
                <li><a href="#" onclick="return false;">2</a></li>
                <li><a href="#" onclick="return false;">3</a></li>
                <li><a href="#" onclick="return false;">4</a></li>
                <li><a href="#" onclick="return false;">5</a></li>
                <li><a href="#" onclick="return false;">&gt;&gt;</a></li>
              </ul>
            </div>
</div>
    </div><!--/.bs-docs-->
<pre class="prettyprint"><span style="color: #000080">&lt;div</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;txt-center&quot;</span><span style="color: #000080">&gt;</span>
   <span style="color: #000080">&lt;div</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;pagination&quot;</span><span style="color: #000080">&gt;</span>
      <span style="color: #000080">&lt;ul&gt;</span>
         <span style="color: #000080">&lt;li</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;disabled&quot;</span><span style="color: #000080">&gt;&lt;a</span> <span style="color: #008080">href=</span><span style="color: #bb8844">&quot;#&quot;</span><span style="color: #000080">&gt;</span>«<span style="color: #000080">&lt;/a&gt;&lt;/li&gt;</span>
         <span style="color: #000080">&lt;li</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;active&quot;</span><span style="color: #000080">&gt;&lt;a</span> <span style="color: #008080">href=</span><span style="color: #bb8844">&quot;#&quot;</span><span style="color: #000080">&gt;</span>1<span style="color: #000080">&lt;/a&gt;&lt;/li&gt;</span>
         <span style="color: #000080">&lt;li&gt;&lt;a</span> <span style="color: #008080">href=</span><span style="color: #bb8844">&quot;#&quot;</span><span style="color: #000080">&gt;</span>2<span style="color: #000080">&lt;/a&gt;&lt;/li&gt;</span>
         <span style="color: #000080">&lt;li&gt;&lt;a</span> <span style="color: #008080">href=</span><span style="color: #bb8844">&quot;#&quot;</span><span style="color: #000080">&gt;</span>3<span style="color: #000080">&lt;/a&gt;&lt;/li&gt;</span>
         <span style="color: #000080">&lt;li&gt;&lt;a</span> <span style="color: #008080">href=</span><span style="color: #bb8844">&quot;#&quot;</span><span style="color: #000080">&gt;</span>4<span style="color: #000080">&lt;/a&gt;&lt;/li&gt;</span>
         <span style="color: #000080">&lt;li&gt;&lt;a</span> <span style="color: #008080">href=</span><span style="color: #bb8844">&quot;#&quot;</span><span style="color: #000080">&gt;</span>5<span style="color: #000080">&lt;/a&gt;&lt;/li&gt;</span>
         <span style="color: #000080">&lt;li&gt;&lt;a</span> <span style="color: #008080">href=</span><span style="color: #bb8844">&quot;#&quot;</span><span style="color: #000080">&gt;</span>»<span style="color: #000080">&lt;/a&gt;&lt;/li&gt;</span>
      <span style="color: #000080">&lt;/ul&gt;</span>
   <span style="color: #000080">&lt;/div&gt;</span>
<span style="color: #000080">&lt;/div&gt;</span>
</pre>

    <h3>First &amp; Last Pages</h3>
<div class="bs-docs-example">
<div class="txt-center">
            <div class="pagination">
              <ul>
                
                <li><a href="#" onclick="return false;">&lt;&lt; First</a></li>
                <li><a href="#" onclick="return false;">1</a></li>
                <li class="disabled" onclick="return false;"><a href="#">...</a></li>
                <li><a href="#" onclick="return false;">10</a></li>
                <li><a href="#" onclick="return false;">11</a></li>
                <li><a href="#" onclick="return false;">12</a></li>
                <li><a href="#" onclick="return false;">13</a></li>
                <li><a href="#" onclick="return false;">14</a></li>
                <li><a href="#" onclick="return false;">&gt;&gt;</a></li>
              </ul>
            </div>
</div>
    </div><!--/.bs-docs-->
            <div class="bs-docs-example">
                <div class="txt-center">
                 <div class="pagination">
                  <ul>
                    <li><a href="#" onclick="return false;">&lt;&lt;</a></li>
                    <li><a href="#" onclick="return false;">1</a></li>
                    <li><a href="#" onclick="return false;">2</a></li>
                    <li><a href="#" onclick="return false;">3</a></li>
                    <li><a href="#" onclick="return false;">4</a></li>
                    <li><a href="#" onclick="return false;">5</a></li>
                    <li class="disabled"><a href="#" onclick="return false;">...</a></li>
                     <li><a href="#" onclick="return false;">45</a></li>
                    <li><a href="#" onclick="return false;"> Last &gt;&gt;</a></li>

                  </ul>
                </div>
            </div>
            </div><!--/.bs-docs-->

        </div><!--/.style-group-->

        <div class="style-group" id="tables">
            <h2>Tables</h2>
            <p>Throughout the product, tables are used to show user information, lists of search results and more.</p>

            <h3>Global Table Structure</h3>
            <p>Our default grid system includes a <code>#sidebar</code> and <code>#rightpanel</code>. Both are wrapped around a <code>.row-fluid</code>.</p>
            <h4>Sidebar</h4>
            <ul>
                <li>There is always a <code>.span3</code> with an id <code>#sidebar</code> attached to it.</li>
                <li>The header is wrapped around an <code>h4</code> with <code>.header</code>.</li>
            </ul>

            <h4>Right Panel</h4>
            <ul>
                <li>There is always a <code>.span9</code> with <code>#rightpanel</code> attached to it.</li>
                <li>The header is wrapped around a <code>div.header</code> and a <code>h4</code> with <code>.header</code>.</li>
            </ul>


            <div class="bs-docs-example">
            <div class="row-fluid">
                <div class="span3" id="sidebar">
                    <h4>#sidebar</h4>
                </div>

                <div class="span9" id="rightpanel">
                    <h4>#rightpanel</h4>
                </div>
            </div> 
          </div>
          <pre class="prettyprint lineums"><span style="color: #000080">&lt;div</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;row-fluid&quot;</span><span style="color: #000080">&gt;</span>
   <span style="color: #000080">&lt;div</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;span3&quot;</span> <span style="color: #008080">id=</span><span style="color: #bb8844">&quot;sidebar&quot;</span><span style="color: #000080">&gt;</span>
      <span style="color: #000080">&lt;h4</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;header&quot;</span><span style="color: #000080">&gt;</span>sidebar<span style="color: #000080">&lt;/h4&gt;</span>
   <span style="color: #000080">&lt;/div&gt;</span>
   <span style="color: #000080">&lt;div</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;span9&quot;</span> <span style="color: #008080">id=</span><span style="color: #bb8844">&quot;rightpanel&quot;</span><span style="color: #000080">&gt;</span>
      <span style="color: #000080">&lt;div</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;header&quot;</span><span style="color: #000080">&gt;</span>
         <span style="color: #000080">&lt;h4</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;pull-left&quot;</span><span style="color: #000080">&gt;</span>rightpanel<span style="color: #000080">&lt;/h4&gt;</span>
      <span style="color: #000080">&lt;/div&gt;</span>
   <span style="color: #000080">&lt;/div&gt;</span>
<span style="color: #000080">&lt;/div&gt;</span>
</pre>

        <div class="prettyprint message pm"><strong>PM: </strong>Have the structure of the product planned before hand! If you come up with a different structure that works with the GetInsured site, tell us and we'll add it here.</div>

        </div><!--/.style-group-->

        <div class="style-group" id="refine-results">
            <h2>Refine Results &amp; Table Information</h2>
            <p>When you need a sidebar with input fields and select dropdowns, it requires the same skeleton, just different insides.</p>
            <ul>
                <li>The <code>.control-group</code>'s are surrounded by a <code>.form-vertical</code>.</li>
                <li>The <code>#rightpanel</code> has a <code>.form-horizontal</code> before the<code>table</code>.</li>
                <li>Make sure to put the <code>thead</code> inside <code>tr.header</code>.</li>
                <li>To create dropdown, wrap around <code>.dropdown</code>, add <code>.dropdown-toggle</code> with <code>ul.dropdown-menu</code>.</li>
            </ul>
            <div class="bs-docs-example">
            <div class="row-fluid">
                <div class="span3" id="sidebar">
                    <div class="header">
                        <h4 class="margin0">Refine Results</h4>
                    </div>
                    <form class="form-vertical">
                        <div class="gutter10">
                            <div id="table-hide2" class="control-group">
                                <label class="control-label">Plan Number</label>
                                <div class="controls">
                                    <input type="text" class="span12">
                                </div>
                            </div><!--/.control-group-->
                            <div class="control-group">
                                <label class="control-label">Issuer Name</label>
                                <div class="controls">
                                    <select class="span12">
                                        <option value="#">Select</option>
                                        <option value="#">Hogwarts</option>
                                        <option value="#">Gryffindor</option>
                                        <option value="#">Hufflepuff</option>
                                        <option value="#">Ravenclaw</option>
                                        <option value="#">Slytherin</option>
                                    </select>
                                </div>
                            </div><!--/.control-group-->
                            <div class="txt-center">
                                <input type="submit" class="btn input-small" value="Go">
                            </div>
                        </div>
                    </form>
                </div><!--/.span3-->
                <div class="span9" id="rightpanel">
                        <form class="form-horizontal">
                        <table class="table verticalThead">
                            <thead>
                                <tr class="header">
                                    <th scope="col"><input type="checkbox"></th>
                                    <th id="table-hide2" class="sortable" scope="col"><a href="#">Plan Number</a></th>
                                    <th class="sortable" scope="col"><a href="#">Issuer Name</a></th>
                                    <th id="table-hide1" class="sortable" scope="col"><a href="#">Date</a></th>
                                    <th id="table-hide1" class="sortable" scope="col"><a href="#">Status</a></th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td id="table-hide2"><a href="#">33423</a></td>
                                    <td><a href="#">Hogwarts</a></td>
                                    <td id="table-hide1"><a href="#">May 6, 2013</a></td>
                                    <td id="table-hide1"><a href="#">Certified</a></td>
                                    <td>
                                        <div class="dropdown">
                                           <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i><i class="caret"></i></a>
                                           <ul class="dropdown-menu">
                                              <li><a href="#"><i class="icon-pencil"></i>
                                                 Edit</a>
                                              </li>
                                              <li><a href="#"><i class="icon-refresh"></i>
                                                 Update Status</a>
                                              </li>
                                           </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td id="table-hide2"><a href="#">22412</a></td>
                                    <td><a href="#">Gryffindor</a></td>
                                    <td id="table-hide1"><a href="#">May 6, 2013</a></td>
                                    <td id="table-hide1"><a href="#">Certified</a></td>
                                    <td>
                                        <div class="dropdown">
                                           <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i><i class="caret"></i></a>
                                           <ul class="dropdown-menu">
                                              <li><a href="#"><i class="icon-pencil"></i>
                                                 Edit</a>
                                              </li>
                                              <li><a href="#"><i class="icon-refresh"></i>
                                                 Update Status</a>
                                              </li>
                                           </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td id="table-hide2"><a href="#">34333</a></td>
                                    <td><a href="#">Hufflepuff</a></td>
                                    <td id="table-hide1"><a href="#">May 6, 2013</a></td>
                                    <td id="table-hide1"><a href="#">Certified</a></td>
                                    <td>
                                        <div class="dropdown">
                                           <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i><i class="caret"></i></a>
                                           <ul class="dropdown-menu">
                                              <li><a href="#"><i class="icon-pencil"></i>
                                                 Edit</a>
                                              </li>
                                              <li><a href="#"><i class="icon-refresh"></i>
                                                 Update Status</a>
                                              </li>
                                           </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td id="table-hide2"><a href="#">22412</a></td>
                                    <td><a href="#">Ravenclaw</a></td>
                                    <td id="table-hide1"><a href="#">May 6, 2013</a></td>
                                    <td id="table-hide1"><a href="#">Certified</a></td>
                                    <td>
                                        <div class="dropdown">
                                           <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i><i class="caret"></i></a>
                                           <ul class="dropdown-menu">
                                              <li><a href="#"><i class="icon-pencil"></i>
                                                 Edit</a>
                                              </li>
                                              <li><a href="#"><i class="icon-refresh"></i>
                                                 Update Status</a>
                                              </li>
                                           </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td id="table-hide2"><a href="#">22412</a></td>
                                    <td><a href="#">Slytherin</a></td>
                                    <td id="table-hide1"><a href="#">May 6, 2013</a></td>
                                    <td id="table-hide1"><a href="#">Certified</a></td>
                                    <td>
                                        <div class="dropdown">
                                           <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i><i class="caret"></i></a>
                                           <ul class="dropdown-menu">
                                              <li><a href="#"><i class="icon-pencil"></i>
                                                 Edit</a>
                                              </li>
                                              <li><a href="#"><i class="icon-refresh"></i>
                                                 Update Status</a>
                                              </li>
                                           </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>                   
                </div><!--/.span9-->
            </div><!--/.row-fluid-->
        </div><!--/.bs-docs-->

            <pre class="prettyprint lineums"><span style="color: #000080">&lt;div</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;row-fluid&quot;</span><span style="color: #000080">&gt;</span>
   <span style="color: #000080">&lt;div</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;span3&quot;</span> <span style="color: #008080">id=</span><span style="color: #bb8844">&quot;sidebar&quot;</span><span style="color: #000080">&gt;</span>
      <span style="color: #000080">&lt;div</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;header&quot;</span><span style="color: #000080">&gt;</span>
         <span style="color: #000080">&lt;h4</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;margin0&quot;</span><span style="color: #000080">&gt;</span>Refine Results<span style="color: #000080">&lt;/h4&gt;</span>
      <span style="color: #000080">&lt;/div&gt;</span>
      <span style="color: #000080">&lt;form</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;form-vertical&quot;</span><span style="color: #000080">&gt;</span>
         <span style="color: #000080">&lt;div</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;gutter10&quot;</span><span style="color: #000080">&gt;</span>
            <span style="color: #000080">&lt;div</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;control-group&quot;</span><span style="color: #000080">&gt;</span>
               <span style="color: #000080">&lt;label</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;control-label&quot;</span><span style="color: #000080">&gt;</span>Plan Number<span style="color: #000080">&lt;/label&gt;</span>
               <span style="color: #000080">&lt;div</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;controls&quot;</span><span style="color: #000080">&gt;</span>
                  <span style="color: #000080">&lt;input</span> <span style="color: #008080">type=</span><span style="color: #bb8844">&quot;text&quot;</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;span12&quot;</span><span style="color: #000080">&gt;</span>
               <span style="color: #000080">&lt;/div&gt;</span>
            <span style="color: #000080">&lt;/div&gt;</span>
            <span style="color: #999988; font-style: italic">&lt;!--/.control-group--&gt;</span>
            <span style="color: #000080">&lt;div</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;control-group&quot;</span><span style="color: #000080">&gt;</span>
               <span style="color: #000080">&lt;label</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;control-label&quot;</span><span style="color: #000080">&gt;</span>Issuer Name<span style="color: #000080">&lt;/label&gt;</span>
               <span style="color: #000080">&lt;div</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;controls&quot;</span><span style="color: #000080">&gt;</span>
                  <span style="color: #000080">&lt;select</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;span12&quot;</span><span style="color: #000080">&gt;</span>
                     <span style="color: #000080">&lt;option</span> <span style="color: #008080">value=</span><span style="color: #bb8844">&quot;#&quot;</span><span style="color: #000080">&gt;</span>Select<span style="color: #000080">&lt;/option&gt;</span>
                     <span style="color: #000080">&lt;option</span> <span style="color: #008080">value=</span><span style="color: #bb8844">&quot;#&quot;</span><span style="color: #000080">&gt;</span>Hogwarts<span style="color: #000080">&lt;/option&gt;</span>
                     <span style="color: #000080">&lt;option</span> <span style="color: #008080">value=</span><span style="color: #bb8844">&quot;#&quot;</span><span style="color: #000080">&gt;</span>Gryffindor<span style="color: #000080">&lt;/option&gt;</span>
                     <span style="color: #000080">&lt;option</span> <span style="color: #008080">value=</span><span style="color: #bb8844">&quot;#&quot;</span><span style="color: #000080">&gt;</span>Hufflepuff<span style="color: #000080">&lt;/option&gt;</span>
                     <span style="color: #000080">&lt;option</span> <span style="color: #008080">value=</span><span style="color: #bb8844">&quot;#&quot;</span><span style="color: #000080">&gt;</span>Ravenclaw<span style="color: #000080">&lt;/option&gt;</span>
                     <span style="color: #000080">&lt;option</span> <span style="color: #008080">value=</span><span style="color: #bb8844">&quot;#&quot;</span><span style="color: #000080">&gt;</span>Slytherin<span style="color: #000080">&lt;/option&gt;</span>
               <span style="color: #000080">&lt;/div&gt;</span>
            <span style="color: #000080">&lt;/div&gt;</span>
            <span style="color: #999988; font-style: italic">&lt;!--/.control-group--&gt;</span>
         <span style="color: #000080">&lt;/div&gt;</span>
      <span style="color: #000080">&lt;/form&gt;</span>
   <span style="color: #000080">&lt;/div&gt;</span>
   <span style="color: #999988; font-style: italic">&lt;!--/.span3--&gt;</span>
   <span style="color: #000080">&lt;div</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;span9&quot;</span> <span style="color: #008080">id=</span><span style="color: #bb8844">&quot;rightpanel&quot;</span><span style="color: #000080">&gt;</span>
      <span style="color: #000080">&lt;div</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;header&quot;</span><span style="color: #000080">&gt;</span>
         <span style="color: #000080">&lt;form</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;form-horizontal&quot;</span><span style="color: #000080">&gt;</span>
            <span style="color: #000080">&lt;table</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;table table-border-none verticalThead&quot;</span><span style="color: #000080">&gt;</span>
               <span style="color: #000080">&lt;thead&gt;</span>
                  <span style="color: #000080">&lt;tr</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;header&quot;</span><span style="color: #000080">&gt;</span>
                     <span style="color: #000080">&lt;th</span> <span style="color: #008080">scope=</span><span style="color: #bb8844">&quot;col&quot;</span><span style="color: #000080">&gt;&lt;input</span> <span style="color: #008080">type=</span><span style="color: #bb8844">&quot;checkbox&quot;</span><span style="color: #000080">&gt;&lt;/th&gt;</span>
                     <span style="color: #000080">&lt;th</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;sortable&quot;</span> <span style="color: #008080">scope=</span><span style="color: #bb8844">&quot;col&quot;</span><span style="color: #000080">&gt;&lt;a</span> <span style="color: #008080">href=</span><span style="color: #bb8844">&quot;#&quot;</span><span style="color: #000080">&gt;</span>Plan Number<span style="color: #000080">&lt;/a&gt;&lt;/th&gt;</span>
                     <span style="color: #000080">&lt;th</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;sortable&quot;</span> <span style="color: #008080">scope=</span><span style="color: #bb8844">&quot;col&quot;</span><span style="color: #000080">&gt;&lt;a</span> <span style="color: #008080">href=</span><span style="color: #bb8844">&quot;#&quot;</span><span style="color: #000080">&gt;</span>Issuer Name<span style="color: #000080">&lt;/a&gt;&lt;/th&gt;</span>
                     <span style="color: #000080">&lt;th</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;sortable&quot;</span> <span style="color: #008080">scope=</span><span style="color: #bb8844">&quot;col&quot;</span><span style="color: #000080">&gt;&lt;a</span> <span style="color: #008080">href=</span><span style="color: #bb8844">&quot;#&quot;</span><span style="color: #000080">&gt;</span>Date<span style="color: #000080">&lt;/a&gt;&lt;/th&gt;</span>
                     <span style="color: #000080">&lt;th</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;sortable&quot;</span> <span style="color: #008080">scope=</span><span style="color: #bb8844">&quot;col&quot;</span><span style="color: #000080">&gt;&lt;a</span> <span style="color: #008080">href=</span><span style="color: #bb8844">&quot;#&quot;</span><span style="color: #000080">&gt;</span>Status<span style="color: #000080">&lt;/a&gt;&lt;/th&gt;</span>
                     <span style="color: #000080">&lt;th</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;dropdown pull-right&quot;</span> <span style="color: #008080">scope=</span><span style="color: #bb8844">&quot;col&quot;</span><span style="color: #000080">&gt;&lt;a</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;dropdown-toggle&quot;</span> <span style="color: #008080">data-toggle=</span><span style="color: #bb8844">&quot;dropdown&quot;</span> <span style="color: #008080">href=</span><span style="color: #bb8844">&quot;#&quot;</span><span style="color: #000080">&gt;&lt;i</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;icon-cog&quot;</span><span style="color: #000080">&gt;&lt;/i&gt;&lt;/a&gt;&lt;/th&gt;</span>
                  <span style="color: #000080">&lt;/tr&gt;</span>
               <span style="color: #000080">&lt;/thead&gt;</span>
               <span style="color: #000080">&lt;tbody&gt;</span>
                  <span style="color: #000080">&lt;tr&gt;</span>
                     <span style="color: #000080">&lt;td&gt;&lt;input</span> <span style="color: #008080">type=</span><span style="color: #bb8844">&quot;checkbox&quot;</span><span style="color: #000080">&gt;&lt;/td&gt;</span>
                     <span style="color: #000080">&lt;td&gt;&lt;a</span> <span style="color: #008080">href=</span><span style="color: #bb8844">&quot;#&quot;</span><span style="color: #000080">&gt;</span>33423<span style="color: #000080">&lt;/a&gt;&lt;/td&gt;</span>
                     <span style="color: #000080">&lt;td&gt;&lt;a</span> <span style="color: #008080">href=</span><span style="color: #bb8844">&quot;#&quot;</span><span style="color: #000080">&gt;</span>Hogwards<span style="color: #000080">&lt;/a&gt;&lt;/td&gt;</span>
                     <span style="color: #000080">&lt;td&gt;&lt;a</span> <span style="color: #008080">href=</span><span style="color: #bb8844">&quot;#&quot;</span><span style="color: #000080">&gt;</span>May 6, 2013<span style="color: #000080">&lt;/a&gt;&lt;/td&gt;</span>
                     <span style="color: #000080">&lt;td&gt;&lt;a</span> <span style="color: #008080">href=</span><span style="color: #bb8844">&quot;#&quot;</span><span style="color: #000080">&gt;</span>Certified<span style="color: #000080">&lt;/a&gt;&lt;/td&gt;</span>
                     <span style="color: #000080">&lt;td&gt;</span>
                        <span style="color: #000080">&lt;div</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;dropdown&quot;</span><span style="color: #000080">&gt;</span>
                           <span style="color: #000080">&lt;a</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;dropdown-toggle&quot;</span> <span style="color: #008080">data-toggle=</span><span style="color: #bb8844">&quot;dropdown&quot;</span> <span style="color: #008080">href=</span><span style="color: #bb8844">&quot;#&quot;</span><span style="color: #000080">&gt;&lt;i</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;icon-cog&quot;</span><span style="color: #000080">&gt;&lt;/i&gt;&lt;i</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;caret&quot;</span><span style="color: #000080">&gt;&lt;/i&gt;&lt;/a&gt;</span>
                           <span style="color: #000080">&lt;ul</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;dropdown-menu&quot;</span><span style="color: #000080">&gt;</span>
                              <span style="color: #000080">&lt;li&gt;&lt;a</span> <span style="color: #008080">href=</span><span style="color: #bb8844">&quot;#&quot;</span><span style="color: #000080">&gt;&lt;i</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;icon-pencil&quot;</span><span style="color: #000080">&gt;&lt;/i&gt;</span>
                                 Edit<span style="color: #000080">&lt;/a&gt;</span>
                              <span style="color: #000080">&lt;/li&gt;</span>
                              <span style="color: #000080">&lt;li&gt;&lt;a</span> <span style="color: #008080">href=</span><span style="color: #bb8844">&quot;#&quot;</span><span style="color: #000080">&gt;&lt;i</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;icon-refresh&quot;</span><span style="color: #000080">&gt;&lt;/i&gt;</span>
                                 Update Status<span style="color: #000080">&lt;/a&gt;</span>
                              <span style="color: #000080">&lt;/li&gt;</span>
                           <span style="color: #000080">&lt;/ul&gt;</span>
                        <span style="color: #000080">&lt;/div&gt;</span>
                     <span style="color: #000080">&lt;/td&gt;</span>
                  <span style="color: #000080">&lt;/tr&gt;</span>
                  <span style="color: #000080">&lt;tr&gt;</span>...<span style="color: #000080">&lt;/tr&gt;</span>
               <span style="color: #000080">&lt;/tbody&gt;</span>
            <span style="color: #000080">&lt;/table&gt;</span>
         <span style="color: #000080">&lt;/form&gt;</span>
      <span style="color: #000080">&lt;/div&gt;</span>
   <span style="color: #000080">&lt;/div&gt;</span>
   <span style="color: #999988; font-style: italic">&lt;!--/.span9--&gt;</span>
<span style="color: #000080">&lt;/div&gt;</span>
<span style="color: #999988; font-style: italic">&lt;!--/.row-fluid--&gt;</span></pre>
        </div><!--/.style-group-->
       
        <div class="style-group" id="checkbox-radio">
            <h2>Checkboxes and Radio Buttons</h2>
            <p>Checkboxes are for selecting one or several options in a list while radios are for selecting one option from many.  Go ahead and try them below.</p>

            

            <div class="bs-docs-example">
              <form class="form-horizontal">
                <div class="control-group">
                  <strong>Radio Buttons: </strong>
                  <div><input class="box-example" type="radio" name="gender" value="Male">Male  </div>
                  <div><input class="box-example" type="radio" name="gender" value="Male">Female</div>
                </div>
                <div class="control-group">
                  <strong>Checkboxes: </strong>
                  <div><td><input class="box-example" type="checkbox"></td> 1 </div> 
                  <div><td><input class="box-example" type="checkbox"></td> 2 </div>
                  <div><td><input class="box-example" type="checkbox"></td> 3 </div> 
                </div>
              </form>
            </div> <!--/bs-docs-example-->
        </div><!--/.style-group-->

        <div class="style-group" id="form-action">
            <h2>Form Actions</h2>
            <p>When the user needs to continue, save, go back, or cancel in the flow, the action buttons are positioned as shown within the <code>#rightpanel</code>. There shouldn't be any other buttons on the page when there are form-actions.</p>

            <p>Here are the actions you can take at the bottom of the page and how to float the buttons to align.</p>

            <div class="bs-docs-example">
                <div class="row-fluid">
                <div class="span3" id="sidebar">
                    <div class="header">
                        <h4 class="margin0">Refine Results</h4>
                    </div>
                    <form class="form-vertical">
                        <div class="gutter10">
                            <div id="table-hide2" class="control-group">
                                <label class="control-label">Plan Number</label>
                                <div class="controls">
                                    <input type="text" class="span12">
                                </div>
                            </div><!--/.control-group-->
                            <div class="control-group">
                                <label class="control-label">Issuer Name</label>
                                <div class="controls">
                                    <select class="span12">
                                        <option value="#">Select</option>
                                        <option value="#">Hogwarts</option>
                                        <option value="#">Gryffindor</option>
                                        <option value="#">Hufflepuff</option>
                                        <option value="#">Ravenclaw</option>
                                        <option value="#">Slytherin</option>
                                    </select>
                                </div>
                            </div><!--/.control-group-->
                            <div class="txt-center">
                                <input type="submit" class="btn input-small" value="Go">
                            </div>
                        </div>
                    </form>
                </div><!--/.span3-->
                <div class="span9" id="rightpanel">
                        <form class="form-horizontal">
                        <table class="table verticalThead">
                            <thead>
                              <tr class="header">
                                  <th scope="col"><input type="checkbox"></th>
                                  <th id="table-hide2" class="sortable" scope="col"><a href="#">Plan Number</a></th>
                                  <th class="sortable" scope="col"><a href="#">Issuer Name</a></th>
                                  <th id="table-hide1" class="sortable" scope="col"><a href="#">Date</a></th>
                                  <th id="table-hide1" class="sortable" scope="col"><a href="#">Status</a></th>
                                  <th>&nbsp;</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td><input type="checkbox"></td>
                                  <td id="table-hide2"><a href="#">33423</a></td>
                                  <td><a href="#">Hogwarts</a></td>
                                  <td id="table-hide1"><a href="#">May 6, 2013</a></td>
                                  <td id="table-hide1"><a href="#">Certified</a></td>
                                  <td>
                                      <div class="dropdown">
                                         <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i><i class="caret"></i></a>
                                         <ul class="dropdown-menu">
                                            <li><a href="#"><i class="icon-pencil"></i>
                                               Edit</a>
                                            </li>
                                            <li><a href="#"><i class="icon-refresh"></i>
                                               Update Status</a>
                                            </li>
                                         </ul>
                                      </div>
                                  </td>
                              </tr>
                              <tr>
                                  <td><input type="checkbox"></td>
                                  <td id="table-hide2"><a href="#">22412</a></td>
                                  <td><a href="#">Gryffindor</a></td>
                                  <td id="table-hide1"><a href="#">May 6, 2013</a></td>
                                  <td id="table-hide1"><a href="#">Certified</a></td>
                                  <td>
                                      <div class="dropdown">
                                         <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i><i class="caret"></i></a>
                                         <ul class="dropdown-menu">
                                            <li><a href="#"><i class="icon-pencil"></i>
                                               Edit</a>
                                            </li>
                                            <li><a href="#"><i class="icon-refresh"></i>
                                               Update Status</a>
                                            </li>
                                         </ul>
                                      </div>
                                  </td>
                              </tr>
                              <tr>
                                  <td><input type="checkbox"></td>
                                  <td id="table-hide2"><a href="#">34333</a></td>
                                  <td><a href="#">Hufflepuff</a></td>
                                  <td id="table-hide1"><a href="#">May 6, 2013</a></td>
                                  <td id="table-hide1"><a href="#">Certified</a></td>
                                  <td>
                                      <div class="dropdown">
                                         <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i><i class="caret"></i></a>
                                         <ul class="dropdown-menu">
                                            <li><a href="#"><i class="icon-pencil"></i>
                                               Edit</a>
                                            </li>
                                            <li><a href="#"><i class="icon-refresh"></i>
                                               Update Status</a>
                                            </li>
                                         </ul>
                                      </div>
                                  </td>
                              </tr>
                              <tr>
                                  <td><input type="checkbox"></td>
                                  <td id="table-hide2"><a href="#">22412</a></td>
                                  <td><a href="#">Ravenclaw</a></td>
                                  <td id="table-hide1"><a href="#">May 6, 2013</a></td>
                                  <td id="table-hide1"><a href="#">Certified</a></td>
                                  <td>
                                      <div class="dropdown">
                                         <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i><i class="caret"></i></a>
                                         <ul class="dropdown-menu">
                                            <li><a href="#"><i class="icon-pencil"></i>
                                               Edit</a>
                                            </li>
                                            <li><a href="#"><i class="icon-refresh"></i>
                                               Update Status</a>
                                            </li>
                                         </ul>
                                      </div>
                                  </td>
                              </tr>
                              <tr>
                                  <td><input type="checkbox"></td>
                                  <td id="table-hide2"><a href="#">22412</a></td>
                                  <td><a href="#">Slytherin</a></td>
                                  <td id="table-hide1"><a href="#">May 6, 2013</a></td>
                                  <td id="table-hide1"><a href="#">Certified</a></td>
                                  <td>
                                      <div class="dropdown">
                                         <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i><i class="caret"></i></a>
                                         <ul class="dropdown-menu">
                                            <li><a href="#"><i class="icon-pencil"></i>
                                               Edit</a>
                                            </li>
                                            <li><a href="#"><i class="icon-refresh"></i>
                                               Update Status</a>
                                            </li>
                                         </ul>
                                      </div>
                                  </td>
                              </tr>
                          </tbody>
                      </table>
                  </form>
                    
                </div><!--/.span9-->

            </div>
            <div class="row-fluid">
                <div class="form-actions span9 offset3">
                    <input type="button" class="btn pull-left" value="Cancel">
                    <input type="button" class="btn btn-primary pull-right" value="Continue">
                    <input type="button" class="btn pull-right margin10-r" value="Save">
                </div>
            </div>
        </div>
            <pre class="prettyprint"><span style="color: #000080">&lt;div</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;row-fluid&quot;</span><span style="color: #000080">&gt;</span>
   <span style="color: #000080">&lt;div</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;form-actions span9 offset3&quot;</span><span style="color: #000080">&gt;</span>
      <span style="color: #000080">&lt;input</span> <span style="color: #008080">type=</span><span style="color: #bb8844">&quot;button&quot;</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;btn pull-left&quot;</span> <span style="color: #008080">value=</span><span style="color: #bb8844">&quot;Cancel&quot;</span><span style="color: #000080">&gt;</span>
      <span style="color: #000080">&lt;input</span> <span style="color: #008080">type=</span><span style="color: #bb8844">&quot;button&quot;</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;btn btn-primary pull-right&quot;</span> <span style="color: #008080">value=</span><span style="color: #bb8844">&quot;Continue&quot;</span><span style="color: #000080">&gt;</span>
      <span style="color: #000080">&lt;input</span> <span style="color: #008080">type=</span><span style="color: #bb8844">&quot;button&quot;</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;btn pull-right margin10-r&quot;</span> <span style="color: #008080">value=</span><span style="color: #bb8844">&quot;Save&quot;</span><span style="color: #000080">&gt;</span>
   <span style="color: #000080">&lt;/div&gt;</span>
<span style="color: #000080">&lt;/div&gt;</span></pre>
        </div><!--.style-group-->

        <div class="style-group" id="form-errors">
         <h2>Form Errors</h2>
              <p>When there is a required form field, there must be a red asterisk next to the label along with an alert attached.</p>
              <div class="bs-docs-example">
                <form method="POST" action="#" class="form-horizontal gutter10" id="#">
                <div class="control-group">
                <label id="form-hide" class="required control-label">
                    First Name
                    <img width="10" height="10" alt="Required!" src="images/requiredAsterix.png" aria-hidden="true"><a><span aria-label="Required!"></span></a>
                    <span aria-label="Required!"></span>
                 <span class="aria-hidden">required</span></label><!-- end of label -->
                <div>
                      <input type="text" id="firstName" name="firstName" class="input-large parsley-validated parsley-error validateColor small-form" placeholder="First Name" required="" parsley-error-message="Please Enter First Name" aria-label=" Sample text. First  Name"><ul id="parsley-2080102921463549" class="parsley-error-list"><li class="custom-error-message" style="display: list-item;"><span class="validation-error-text-container"><em class="validation-error-icon">!</em>Please Enter First Name</span></li></ul>
                  </div><!-- end of controls-->
                
                    </div>
                  </form>
                </div><!--/.bs-docs-->



            <p>An <code>img</code> is used for the red asterisk </p> 
            <pre class="prettyprint linenums"><span style="color: #000080">&lt;img</span> <span style="color: #008080">width=</span><span style="color: #bb8844">&quot;10&quot;</span> <span style="color: #008080">height=</span><span style="color: #bb8844">&quot;10&quot;</span> <span style="color: #008080">alt=</span><span style="color: #bb8844">&quot;Required!&quot;</span> <span style="color: #008080">src=</span><span style="color: #bb8844">&quot;images/requiredAsterix.png&quot;</span> <span style="color: #008080">aria-hidden=</span><span style="color: #bb8844">&quot;true&quot;</span><span style="color: #000080">&gt;</span></pre>
            
            <p>For the alert, we use a <code>span</code> tag with an exclamation mark and emphasized text.</p>
            <pre class="prettyprint linenums"><span style="color: #000080">&lt;span</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;validation-error-text-container&quot;</span><span style="color: #000080">&gt;</span>
  <span style="color: #000080">&lt;em</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;validation-error-icon&quot;</span><span style="color: #000080">&gt;</span>!<span style="color: #000080">&lt;/em&gt;</span>
  Please Enter First Name
<span style="color: #000080">&lt;/span&gt;</span></pre>
            </pre>

          <div class="prettyprint message qa"><strong>QA:</strong> Make sure these errors are appearing where they should be. Also check if the error message looks like the error pictured above.</div>
        </div><!--/.style-group-->

        <div class="style-group" id="select">
            <h2>Selects and Options</h2>
            <p>Select groups are usually in a dropdown. The default should show either "Default" or the action the user should take.</p>

            <p>For the dropdown, we use the <code>select</code> and <code>option</code> tags</p>

            <div class="bs-docs-example"> 
              <select class="small-form">
                <option value selected>Select a state</option>
                <option>California</option>
              </select>
            </div>
            <pre class="prettyprint"><span style="color: #000080">&lt;select</span><span style="color: #000080">&gt;</span>
   <span style="color: #000080">&lt;div</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;form-actions span9 offset3&quot;</span><span style="color: #000080">&gt;</span>
      <span style="color: #000080">&lt;option </span><span style="color: #008080">value selected</span><span style="color: #000080">&gt;</span>Select a state<span style="color: #000080">&lt;/option&gt;</span>
      <span style="color: #000080">&lt;option</span><span style="color: #000080">&gt;</span>California<span style="color: #000080">&lt;/option&gt;</span>
      ...
<span style="color: #000080">&lt;/select&gt;</span></pre>
        </div><!--/.style-group-->

        <div class="style-group" id="form-controls">
            <h2>Extending Form Controls</h2>
            <p>Add text or buttons before or after any text-based input.</p>

            <h3>Default Options</h3>
            <p>Wrap an <code>.add-on</code> and an <code>input</code> with one of two classes to prepend or append text to an input.</p>
            <div class="bs-docs-example">
              <div class="input-prepend">
                <span class="add-on ">Prepend</span>
                <input class="span8 small-form" id="prependedInput" type="text">
              </div>
              <div class="input-append">
                <input class="span8 small-form" id="appendedInput" type="text">
                <span class="add-on">Append</span>
              </div>
            </div>

                        <pre class="prettyprint"><span style="color: #000080">&lt;div</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;input-prepend&quot;</span><span style="color: #000080">&gt;</span>
 <span style="color: #000080">&lt;span</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;add-on&quot;</span><span style="color: #000080">&gt;</span>Prepend<span style="color: #000080">&lt;/span&gt;</span>
 <span style="color: #000080">&lt;input</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;span8&quot;</span> <span style="color: #008080">id=</span><span style="color: #bb8844">&quot;prependedInput&quot;</span> <span style="color: #008080">type=</span><span style="color: #bb8844">&quot;text&quot;</span><span style="color: #000080">&gt;</span>
<span style="color: #000080">&lt;/div&gt;</span>
<span style="color: #000080">&lt;div</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;input-append&quot;</span><span style="color: #000080">&gt;</span>
  <span style="color: #000080">&lt;input</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;span8&quot;</span> <span style="color: #008080">id=</span><span style="color: #bb8844">&quot;appendedInput&quot;</span> <span style="color: #008080">type=</span><span style="color: #bb8844">&quot;text&quot;</span><span style="color: #000080">&gt;</span>
  <span style="color: #000080">&lt;span</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;add-on&quot;</span><span style="color: #000080">&gt;</span>Append<span style="color: #000080">&lt;/span&gt;</span>
<span style="color: #000080">&lt;/div&gt;</span></pre>

        </div><!--/.style-group-->

        <div class="style-group" id="additional">
            <h2>Additional Form Fields</h2>
            <p>Here are more form fields that could be useful.</p>

            <h3>Phone Number</h3>
            <p>When including phone numbers, use one input field for the first 9 numbers. Use a separate input field when including an extension.</p>

            <div class="bs-docs-example">
                    <form method="POST" action="#" class="form-horizontal" id="#">
                      <div class="control-group">
                      <label style="width: 40px; margin: 0 10px 0 -10px;" class="control-label">Cell</label><!-- end of label -->
                      <div class="controls">
                          <input  type="text" id="first_phoneNo" name="first_phoneNo" class="phoneNumber input-medium" placeholder="(xxx) xxx-xxxx" aria-label=" Sample text. (xxx) xxx dash xxxx">
                          <input type="text" id="first_ext" name="first_ext" class="input-mini" placeholder="Ext." aria-label=" Sample text.  Ext dot ">
                        </div><!-- end of controls-->
                      </div>
                    </form>
                </div><!--/bs-docs-->

            <h3>Social Security Number</h3>
            <p>Social Security Numbers require 3 separate input fields.</p>
  <div class="bs-docs-example">
                    <form class="form-horizontal">
<div class="control-group">
                    <label style="width: 170px; margin: 0 10px 0 -15px;"class="required control-label">
                        Social Security Number
                        <span aria-label="Required!"></span>
                     <span class="aria-hidden">required</span> <span class="aria-hidden">required</span> <span class="aria-hidden">required</span> <span class="aria-hidden">required</span> <span class="aria-hidden">required</span> <span class="aria-hidden">required</span> <span class="aria-hidden">required</span> <span class="aria-hidden">required</span></label><!-- end of label -->
                    <div class="controls">
                        <div class="pull-left margin5-r">
                            <label for="ssn1" class="aria-hidden">Tax ID Number first three digits required </label><input required="" parsley-trigger="keyup" parsley-rangelength="[3,3]" placeholder="xxx" class="input-mini" type="text" id="ssn1" name="ssn1" aria-label="Tax ID Number first three digits required  Sample text. xxx">
                        </div>
                        <div class="pull-left margin5-r">
                            <label for="ssn2" class="aria-hidden">Tax ID Number second two digits required </label><input required="" parsley-trigger="keyup" parsley-rangelength="[2,2]" placeholder="xx" class="input-mini" type="text" id="ssn2" name="ssn2" aria-label="Tax ID Number second two digits required  Sample text. xx">
                        </div>
                        <div class="pull-left margin5-r">
                            <label for="ssn3" class="aria-hidden">Tax ID Number last four digits required </label><input required="" parsley-trigger="keyup" parsley-rangelength="[4,4]" placeholder="xxxx" class="input-small" type="text" id="ssn3" name="ssn3" aria-label="Tax ID Number last four digits required  Sample text. xxxx">
                        </div>
                        <input class="input61" type="hidden" id="socialSecurityNumber" name="socialSecurityNumber">
                        <div class="help-inline" id="ssn3_error"></div>
                    </div><!-- end of controls-->
                </div>
            </form>
                </div><!--bs-docs-->
        </div><!--/.style-group-->

        <div class="style-group" id="responsive">
              <h2>Responsive Design</h2>
              <p>Media queries allow for custom CSS based on a number of conditions such as ratios, widths, and display type, but usually focuses around <code>min-width</code> and <code>max-width</code>.</p>

              <p>The best way to implement a responsive design is using <code>%</code> for the <code>width</code> and <code>height</code> of attributes on the webpage. Using <code>auto</code> is another good way to get a responsive page.</p>

              <div class="prettyprint message stop"><strong>STOP:</strong> Sometimes you don't want the website to be responsive because the text might get all scrunched up. For example, we've set a fixed width for this webpage because the links at the top don't look so good when you make the window smaller. For an example of a fluid, responsive design, go check out <a href="http://www.wikipedia.org">Wikipedia</a>. Resize the window and see how the text move around the page.</div>
              <div style="margin-top: 10px" class="prettyprint message ui"><strong>UI/UX:</strong> Make sure your images and webpages look good in a wide range of sizes. When users resize their window, we don't want our product looking like a hot mess.</div>
          </div><!--/.style-group-->

            </div><!--/.span9-->
        </div><!--/.row-fluid-->

        </section>  

</div><!--/.container-fluid-->

    <footer class="main-footer">
        <p>Made with <i class="icon-heart"></i> from the GI UI Team.</p>
    </footer>    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

        <script type="text/javascript">
        $(function() {
          $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
              var target = $(this.hash);
              target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
              if (target.length) {
                $('html,body').animate({
                  scrollTop: target.offset().top
                }, 1000);
                return false;
              }
            }
          });
        });
        </script>
  </body>
</html>