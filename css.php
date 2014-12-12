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

    <link rel="import" href="stuff.html">
  </head>

<body data-spy="scroll">
   
<?php
  include "nav-bar.php";
?>
<div class="section-intro" id="css">
    <div class="container-fluid">
        <h1 class="header">Base CSS</h1>
        <p>Fundamental HTML elements styled and enhanced with extensible classes.</p>
    </div>
</div>


<div class="container-fluid center-page">    
      
    <section class="content" id="top-page">  
        <div class="row-fluid">
            <div class="span3">
                <ol class="chapter">
                    <li><a href="#typography">Typography</a></li>
                    <li><a href="#buttons">Buttons</a></li>
                    <li><a href="#colors">Colors</a></li>
                    <li><a href="#fonts">Fonts</a></li>
                    <li><a href="#small-text">Small Text</a></li>
                    <li><a href="#icons">Text Icons</a></li>
                    <li><a href="#alerts">Alerts</a></li>
                    <li><a href="#lists">Lists</a></li>
                </ol>
            </div><!--/.span3-->

            <div class="span9">
                
              
            <div class="style-group" id="typography">
                <h2>Typography</h2>
                
                <h3>Headings</h3>
                <p>All HTML headings, <code>&lt;h1&gt;</code> through <code>&lt;h6&gt;</code> are available.</p>
        <div class="bs-docs-example">
            <h1 class="sg">h1. Heading 1</h1>
            <h2 class="sg">h2. Heading 2</h2>
            <h3 class="sg">h3. Heading 3</h3>
            <h4 class="sg">h4. Heading 4</h4>
            <h5 class="sg">h5. Heading 5</h5>
            <h6 class="sg">h6. Heading 6</h6>
        </div>

   
            <h3>Body Copy</h3>
            <p>Global default <code>font-size</code> is <strong>14px</strong>, with a <code>line-height</code> of <strong>20px</strong>. In addition, <code>&lt;p&gt;</code> (paragraphs) receive a bottom margin of half their line-height (10px by default).</p>
            
            <div class="bs-docs-example">
                <p>I used to write. I used to write letters. I used to sign my name. I used to sleep at night. Before the flashing light settled deep in my brain. But by the time we met. By the time we met the times had already changed. So I never wrote a letter. I never took my true heart, I never wrote it down. So when the lights cut out. I was lost standing in the wilderness downtown.</p>
            </div>
            <pre class="prettyprint linenums"><span style="color: #000080">&lt;p&gt;</span>...<span style="color: #000080">&lt;/p&gt;</span></pre>
                </div><!--/.style-group-->



        <div class="style-group" id="buttons">
            <h2>Buttons</h2>
            <p>Button styles can be applied to anything with the .btn class applied. However, typically you'll want to apply these to only <code>&lt;a&gt;</code> and <code>&lt;button&gt;</code> elements for the best rendering.</p>

            <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Button</th>
                <th>Class</th>
                <th>Description</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><button type="button" class="btn btn-standard">S</button></td>
                <td><code>btn btn-standard</code></td>
                <td>Standard gray button with gradient</td>
              </tr>
              <tr>
                <td><button type="button" class="btn btn-primary">P</button></td>
                <td><code>btn btn-primary</code></td>
                <td>Provides extra visual weight and identifies the primary action in a set of buttons</td>
              </tr>
            </tbody>
          </table>
        </div><!--/.style-group-->

        <div class="style-group" id="colors">
          <h2>Colors</h2>
          <p>To standardize the GI brand, we will use a set palette of colors so getinsured.com and all other products look nice and uniform.</p>
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th> Name </th>
                <th> Color </th>
                <th> Hex Value </th>
              </tr>
            </thead> 
            <tbody>
              <tr>
                <td> Red Scores</td>
                <td> 
                  <div class="color triple left score-red"></div>
                  <div class="color triple score-red"></div>
                  <div class="color triple right score-red"></div>
                </td> 
                <td>
                  <code>#DC4643</code>
                  <code>#19BFD8</code>
                  <code>#BE0300</code>
                </td>
              </tr>
              <tr>
                <td> Yellow Scores</td>
                <td> 
                  <div class="color triple left score-yellow"></div>
                  <div class="color triple score-yellow"></div>
                  <div class="color triple right score-yellow"></div>
                </td> 
                <td>
                  <code>#EAAB00</code>
                  <code>#F3BD58</code>
                  <code>#FBDE59</code>
                </td>
              </tr>
              <tr>
                <td> Green Scores</td>
                <td> 
                  <div class="color triple left score-green"></div>
                  <div class="color triple score-green"></div>
                  <div class="color triple right score-green"></div>
                </td> 
                <td>
                  <code>#339928</code>
                  <code>#4EAA45</code>
                  <code>#89DA81</code>
                </td>
              </tr>
              <tr>
                <td> Green Layout </td>
                <td>
                  <div class = "color triple left layout-green"></div>
                  <div class = "color triple layout-green"></div>
                  <div class = "color triple right layout-green"></div>
                </td>
                <td>
                  <code>#17772D</code>
                  <code>#48A95E</code>
                  <code>#D8EBD6</code>
                </td>
            </tr>
              <tr>
                <td> Green text</td>
                <td> <div class = "color single green-text"></div></td>
                <td> <code>#33B457</code> </td>
              </tr>
            
            <tr>
              <td> Blue Layout </td>
              <td> 
                <div class = "color triple left layout-blue"></div>
                <div class = "color triple layout-blue"></div>
                <div class = "color triple right layout-blue"></div>
              </td>
              <td>
                <code>#123B94</code>
                <code>#2B7AB8</code>
                <code>#D9EDF7</code>
              </td>
            </tr>
            <tr>
              <td> Blue Button</td>
              <td> <div class = "color single blue-button"></div></td>
              <td><code>#3D99DF</code></td>
             </tr>
              <td> Blue Text</td>
              <td> <div class = "color single blue-text"></div></td>
              <td><code>#19BFD8</code></td>
            </tr>
            <tr>
              <td> Black Text</td>
              <td><div class = "color single black-text"></div></td>
              <td><code>#444444</code></td>
            </tr>
            </tbody>  
          </table>

          <div class="prettyprint message stop"><strong>STOP:</strong> Please make sure the colors match up with the ones given above. It is important that the whole site look uniform.</div>
        </div>

        <div class="style-group" id="fonts">
          <h2>Fonts</h2>
          <h3>Arial Sans-Serif</h3>
          <p>The main font for the GetInsured website. This is used for all main text on the website. </p>
          <li>Include the class <code>font arial-sans-serif</code> to a tag to add the font</li>
          <div class="bs-docs-example">
            <p class="font arial-sans-serif">
              The quick brown fox jumped over the lazy dog.
            </p>
          </div>
            <pre class="prettyprint"><span style="color: #000080">&lt;p <span style="color: #008080">class</span>=<span style="color: #bb8844">&quot;font arial-sans-serif&quot;</span><span style="color: #000080"></span>&gt;</span>...<span style="color: #000080">&lt;/p&gt;</span></pre>

          <h3>Georgia Sans-Serif</h3>
          <p>The secondary font for the GetInsured website. This is only used for the green section headings.</p>
          <li>Include the class <code>font georgia-sans-serif</code> to a tag to add the font</li>


          <div class="bs-docs-example">
            <div class="font georgia-sans-serif">
              Pack my box with five dozen liquor jugs.
            </div>
          </div>
            <pre class="prettyprint"><span style="color: #000080">&lt;p <span style="color: #008080">class</span>=<span style="color: #bb8844">&quot;font georgia-sans-serif&quot;</span><span style="color: #000080"></span>&gt;</span>...<span style="color: #000080">&lt;/p&gt;</span></pre>
          </div>

            <div class="style-group" id="small-text">
            <h2>Small Text</h2>
            <h3>Additional Notices</h3>
            <p>Used on the User Dashboard, additional notices gives the user a heads-up on things to look out for.</p>
            <div class="bs-docs-example">
              <div class="prettyprint small-text notices back"><pre class="prettyprint small-text notices header">Additional Notices</pre><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ullamcorper justo ac commodo viverra. Nunc dapibus nisi ac odio dignissim lobortis ut id augue. Vivamus commodo venenatis felis id sollicitudin. </p></div>
            </div>
            <p>Implementing the notice is easy, just follow the simple HTML below. If you need the CSS to adjust values, it is located right under the HTML.</p>
            <pre class="prettyprint linenums"><span style="color: #000080">&lt;div</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;prettyprint small-text notices back&quot;</span><span style="color: #000080">&gt;</span>
  <span style="color: #000080">&lt;div</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;prettyprint small-text notices header&quot;</span><span style="color: #000080">&gt;</span>...<span style="color: #000080">&lt;/div&gt;</span>
  ...
<span style="color: #000080">&lt;/div&gt;</span>
</pre>

<div class="prettyprint message note"><strong>NOTE: </strong>The <code>&lt;div&gt;</code> for the header <strong>is</strong> nested inside of the <code>&lt;div&gt;</code> for the backgroud.</div>

            <pre class="prettyprint css linenums"><span style="color:#82FF82">.prettyprint.small-text.notices.header</span> {
    <span style="color:#3BFFFF">font-size</span>: <span style="color:#C499F2">16</span><span style="color: #D65CAB">px</span>;
    <span style="color:#3BFFFF">font-weight</span>: <span style="color:#C499F2">bold</span>;
    <span style="color:#3BFFFF">background-color</span>: <span style="color:#C499F2">#FFFFFF</span>;
    <span style="color:#3BFFFF">color</span>: <span style="color:#C499F2">#6993C6</span>;
    <span style="color:#3BFFFF">margin:</span>: <span style="color:#C499F2">0</span><span style="color: #D65CAB">px</span> <span style="color:#C499F2">0</span><span style="color: #D65CAB">px</span> <span style="color:#C499F2">5</span><span style="color: #D65CAB">px</span><span style="color:#C499F2"> 0</span><span style="color: #D65CAB">px</span>;
    <span style="color:#3BFFFF">border</span>: <span style="color:#3BFFFF">none</span>;
}
<span style="color:#82FF82">.prettyprint.small-text.notices.back</span> {
    <span style="color:#3BFFFF">font-size</span>: <span style="color:#C499F2">11</span><span style="color: #D65CAB">px</span>;
    <span style="color:#3BFFFF">font-weight</span>: <span style="color:#C499F2">bold</span>;
    <span style="color:#3BFFFF">background-color</span>: <span style="color:#C499F2">#D9EDF7</span>;
    <span style="color:#3BFFFF">color</span>: <span style="color:#C499F2">#6993C6</span>;
    <span style="color:#3BFFFF">padding:</span>: <span style="color:#C499F2">10</span><span style="color: #D65CAB">px</span> <span style="color:#C499F2">40</span><span style="color: #D65CAB">px</span> <span style="color:#C499F2">10</span><span style="color: #D65CAB">px</span><span style="color:#C499F2"> 20</span><span style="color: #D65CAB">px</span>;
    <span style="color:#3BFFFF">width</span>: <span style="color:#C499F2">auto</span>;
}</pre>

            <h3>Disclaimers and More Information</h3>
            <p>The Disclaimers and More Information sections provide some extra information to the user. They can read them if they choose, but their contents are not vital to the user experience.</p>
            <div class="bs-docs-example">
              <div class="prettyprint small-text disclaimers header">Disclaimer</div>
              <div class="prettyprint small-text disclaimers back">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ullamcorper justo ac commodo viverra. Nunc dapibus nisi ac odio dignissim lobortis ut id augue. Vivamus commodo venenatis felis id sollicitudin. Morbi tempus orci nec justo gravida, vehicula commodo lectus venenatis.</div>
            </div>

            <p>Again, implementing is easy. Just follow the outline below. Feel free to make small adjustments as you please.</p>
            <pre class="prettyprint linenums"><span style="color: #000080">&lt;div</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;prettyprint small-text disclaimers header&quot;</span><span style="color: #000080">&gt;</span>...<span style="color: #000080">&lt;/div&gt;</span>
<span style="color: #000080">&lt;div</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;prettyprint small-text disclaimers header&quot;</span><span style="color: #000080">&gt;</span>...<span style="color: #000080">&lt;/div&gt;</span>
</pre>

      <div class="prettyprint message note"><strong>NOTE: </strong>The <code>&lt;div&gt;</code> for the header <strong>is not</strong> nested inside of the <code>&lt;div&gt;</code> for the backgroud.</div>

            <pre class="prettyprint css linenums"><span style="color:#82FF82">.prettyprint.small-text.notices.header</span> {
    <span style="color:#3BFFFF">font-size</span>: <span style="color:#C499F2">14</span><span style="color: #D65CAB">px</span>;
    <span style="color:#3BFFFF">color</span>: <span style="color:#C499F2">#696969</span>;
    <span style="color:#3BFFFF">margin:</span>: <span style="color:#C499F2">0</span><span style="color: #D65CAB">px</span> <span style="color:#C499F2">0</span><span style="color: #D65CAB">px</span> <span style="color:#C499F2">5</span><span style="color: #D65CAB">px</span><span style="color:#C499F2"> 0</span><span style="color: #D65CAB">px</span>;
}
<span style="color:#82FF82">.prettyprint.small-text.notices.back</span> {
    <span style="color:#3BFFFF">font-size</span>: <span style="color:#C499F2">12</span><span style="color: #D65CAB">px</span>;
    <span style="color:#3BFFFF">color</span>: <span style="color:#C499F2">#999999</span>;
    <span style="color:#3BFFFF">padding:</span>: <span style="color:#C499F2">10</span><span style="color: #D65CAB">px</span> <span style="color:#C499F2">0</span><span style="color: #D65CAB">px</span> <span style="color:#C499F2">0</span><span style="color: #D65CAB">px</span><span style="color:#C499F2"> 0</span><span style="color: #D65CAB">px</span>;
    <span style="color:#3BFFFF">width</span>: <span style="color:#C499F2">auto</span>;
}</pre>
          </div>

        <div class="style-group" id="icons">
            <h2>Text Icons</h2>
            <p>FontAwesome are used as the icon set. (<a href="http://fortawesome.github.io/Font-Awesome/3.2.1/cheatsheet/" target="_blank">FontAwesome 3.2.1</a>)</p>

            <p>To add the fonts to CSS, do one of the following:
     

            <p>To add it into your HTML, just add <code>&lt;i class="icon-name"&gt;&lt;i&gt;</code>. Here are the most common icons used in the platform.</p>

            <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>FontAwesome</th>
                <th>CSS Code</th>
                <th>Class Name</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><i class="icon-cog"></i></td>
                <td><code>\f013</code></td>
                <td>icon-cog</td>
              </tr>
              <tr>
                <td><i class="icon-ok"></i></td>
                <td><code>\f00c</code></td>
                <td>icon-ok</td>
              </tr>
              <tr>
                <td><i class="icon-dashboard"></i></td>
                <td><code>\f0e4</code></td>
                <td>icon-dashboard</td>
              </tr>
              <tr>
                <td><i class="icon-info-sign"></i></td>
                <td><code>\f05a</code></td>
                <td>icon-info-sign</td>
              </tr>
              <tr>
                <td><i class="icon-envelope"></i></td>
                <td><code>\f0e0</code></td>
                <td>icon-envelope</td>
              </tr>
              <tr>
                <td><i class="icon-pencil"></i></td>
                <td><code>\f040</code></td>
                <td>icon-pencil</td>
              </tr>
              <tr>
                <td><i class="icon-phone"></i></td>
                <td><code>\f095</code></td>
                <td>icon-phone</td>
              </tr>
              <tr>
                <td><i class="icon-home"></i></td>
                <td><code>\f015</code></td>
                <td>icon-home</td>
              </tr>
              <tr>
                <td><i class="icon-lock"></i></td>
                <td><code>\f023</code></td>
                <td>icon-lock</td>
              </tr>
              <tr>
                <td><i class="icon-ok-circle"></i></td>
                <td><code>\f05d</code></td>
                <td>icon-ok-circle</td>
              </tr>
              <tr>
                <td><i class="icon-calendar"></i></td>
                <td><code>\f073</code></td>
                <td>icon-calendar</td>
              </tr>
            </tbody>
          </table>
          <div class="prettyprint message note"><strong>NOTE: </strong>Icons can be fun to use. But not everywhere. Limit the uses and it could create real meaning to your pages.</div>
        </div><!--/.style-group--
        
        <div class="style-group" id="helper">
            <h2>Helper Classes</h2>
            <p>Button styles can be applied to anything with the .btn class applied. However, typically you'll want to apply these to only <code>&lt;a&gt;</code> and <code>&lt;button&gt;</code> elements for the best rendering.</p>
            <h3>Quick Floats</h3>
            <p>Float an element to the left with <code>.pull-left</code> or to the right with <code>.pull-right</code>. Both classes will add a CSS float in the specified direction.</p>
            <div class="bs-docs-example">
                <div class="pull-right">I'm in the fast lane. From LA to Tokyo.</div>
                <div class="pull-left">I'm so fancy, You already know.
I'm so fancy, You already know.</div>
            </div>
            <pre class="prettyprint lineums"><span style="color: #000080">&lt;div</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;pull-left&quot;</span><span style="color: #000080">&gt;</span>I'm so fancy, You already know.<span style="color: #000080">&lt;/div&gt;</span>

<span style="color: #000080">&lt;div</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;pull-right&quot;</span><span style="color: #000080">&gt;</span>I'm in the fast lane. From LA to Tokyo.<span style="color: #000080">&lt;/div&gt;</span></pre>

            <h3>Text Align</h3>
            <p>Add the class <code>.txt-center</code> to utlize a <code>text-align:center;</code>. Same goes for <code>.txt-right</code> to utlize a <code>text-align:right;</code>.</p>

            <pre class="prettyprint linenums">class="txt-center"
class="txt-right"</pre>

            <h3>Clearfix</h3>
            <p>Clear the float on any element with the <code>.clearfix</code> class.</p>
            <pre class="prettyprint linenums">class="clearfix"</pre>

            <h3>Gutter 10</h3>
            <p>Use <code>.gutter10</code> to put a padding of 10px around the object.</p>
            <pre class="prettyprint linenums">class="gutter10"</pre>
        </div><!--/.style-group-->
        <div class="style-group" id="alerts">
            <h2>Alerts</h2>

            <h3>Alert Default</h3>
            <p>Add the class <code>.alert</code> for an alert.</p>
            <div class="bs-docs-example">
                <div class="alert">
                  <strong>Oh hai!</strong> Watch out for the kitty cat!
                </div>
              </div>
              
              <pre class="prettyprint linenums"><span style="color: #000080">&lt;div</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;alert&quot;</span><span style="color: #000080">&gt;</span>
   <span style="color: #000080">&lt;strong&gt;</span>Warning!<span style="color: #000080">&lt;/strong&gt;</span> Watch out for the kitty cat!
<span style="color: #000080">&lt;/div&gt;</span>
</pre>

        <h3>Alert Success</h3>
              <p>Add the class <code>.alert-success</code> for a successful alert.</p>
            
              <div class="bs-docs-example">
                <div class="alert alert-success">
                  <strong>Well done!</strong> You found the kitty cat.
                </div>
              </div>
              <pre class="prettyprint linenums"><span style="color: #000080">&lt;div</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;alert alert-success&quot;</span><span style="color: #000080">&gt;</span>
   <span style="color: #000080">&lt;strong&gt;</span>Well done!<span style="color: #000080">&lt;/strong&gt;</span> You found the kitty cat.
<span style="color: #000080">&lt;/div&gt;</span>
</pre>

        <h3>Alert Error</h3>
        <p>Add the class <code>.alert-error</code> for an error alert.</p>
            
              <div class="bs-docs-example">
                <div class="alert alert-error">
                  <strong>Oh snap!</strong> The kitty cat ran away!
                </div>
              </div>
              <pre class="prettyprint linenums"><span style="color: #000080">&lt;div</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;alert alert-error&quot;</span><span style="color: #000080">&gt;</span>
   <span style="color: #000080">&lt;strong&gt;</span>Oh snap!<span style="color: #000080">&lt;/strong&gt;</span> The kitty cat ran away!
<span style="color: #000080">&lt;/div&gt;</span>
</pre>


        <h3>Alert Info</h3>
              <p>Add the class <code>.alert-info</code> for an info alert.</p>
              <div class="bs-docs-example">
                <div class="alert alert-info">
                  <strong>Heads up!</strong> The kitty cat needs food, but not too much because he's already fat.
                </div>
              </div>
              <pre class="prettyprint"><span style="color: #000080">&lt;div</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;alert alert-info&quot;</span><span style="color: #000080">&gt;</span>
   <span style="color: #000080">&lt;strong&gt;</span>Heads up!<span style="color: #000080">&lt;/strong&gt;</span> The kitty cat needs food, but not too much because he&#39;s already fat.
<span style="color: #000080">&lt;/div&gt;</span>
</pre>

        </div><!--/.style-group-->


        <div class="style-group" id="lists">
            <h2>Lists</h2>
            <p>You can add different classes to the <code>ul</code> for what you need.</p>

            <h3>Inline Lists</h3>
            <p>Place all list items on a single line with <code>inline-block</code> and some light padding.</p>
            <div class="bs-docs-example">
                <ul class="inline">
                    <li>I got soul.</li>
                    <li>But I'm not.</li>
                    <li>A soldier.</li>
                </ul>
            </div>
            <pre class="prettyprint"><span style="color: #000080">&lt;ul</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;inline&quot;</span><span style="color: #000080">&gt;</span>
   <span style="color: #000080">&lt;li&gt;</span>...<span style="color: #000080">&lt;/li&gt;</span>
<span style="color: #000080">&lt;/ul&gt;</span></pre>

        <div class="prettyprint message note"><strong>NOTE:</strong> Inline lists are particularly useful for putting images on the same row.</div>

        <h3>Unstyled Lists</h3>
        <p>Include <code>.unstyled</code> to your <code>ul</code> and you've got an unstyled list!</p>
        <div class="bs-docs-example">
            <ul class="unstyled">
                <li>Look at the stars,</li>
                <li>Look how they shine for you,</li>
                <li>And everything you do,</li>
                <li>Yeah, they were all yellow.</li>
            </ul>
        </div>
        <pre class="prettyprint"><span style="color: #000080">&lt;ul</span> <span style="color: #008080">class=</span><span style="color: #bb8844">&quot;unstyled&quot;</span><span style="color: #000080">&gt;</span>
   <span style="color: #000080">&lt;li&gt;</span>...<span style="color: #000080">&lt;/li&gt;</span>
<span style="color: #000080">&lt;/ul&gt;</span></pre>

        </div><!--/.style-group-->

        </section> 
            </div><!--/.span9-->
        </div><!--/.row-fluid-->



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

        function supportsImports() {
  return 'import' in document.createElement('link');
}

if (supportsImports()) {
  // Good to go!
} else {
  // Use other libraries/require systems to load files.
}
        </script>
  </body>
</html>