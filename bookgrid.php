<?php
								$cat='Architecture';
	
	                            $totalq="select count(*) \"total\" from book where b_subcat='$cat'";
	
	                            $totalres=mysqli_query($conn,$totalq) or die("Can't Execute Query...");
	                            $totalrow=mysqli_fetch_assoc($totalres);
	
	
	                            $page_per_page=6;
	
	                            $page_total_rec=$totalrow['total'];
	
	                            $page_total_page=ceil($page_total_rec/$page_per_page);
	
	
	                            if(!isset($_GET['page']))
	                            {
		                            $page_current_page=1;
	                            }
	                            else
	                            {
		                            $page_current_page=$_GET['page'];
	                            }
	
								$query="select *from book";
								$res=mysqli_query($conn,$query) or die("Can't Execute Query...");
	                            $query1="select *from category";
								$res=mysqli_query($conn,$query1) or die("Can't Execute Query...");
	                            $query2="select *from subcat";
								$res=mysqli_query($conn,$query2) or die("Can't Execute Query...");
	
							?>
<!DOCTYPE html>

<html>
  <head>
    <title>Floating Div Product Grid Demo</title>
    <style>
      /* Float container */
      #p-float {
        max-width: 1200px;
        margin: 0 auto;
        /* Clearfix */
        overflow: auto;
      }
      #p-float::after {
        /* Clearfix */
        content: "";
        clear: both;
        display: table;
      }
      /* Product items */
      div.p-float {
        float: left;
        width: 25%;
      }
      div.p-float-in {
        box-sizing: border-box;
        margin: 5px; 
        padding: 10px;
        border: 1px solid #f2dcdc;
        background: #fff7f7;
      }
      img.p-img {
        width: 100%;
        height: auto;
      }
      div.p-name {
        font-weight: bold;
        font-size: 1.1em;
      }
      div.p-price {
        color: #f44242;
      }
      div.p-desc {
        color: #888;
        font-size: 0.9em;
      }
      button.p-add {
        background: #f46b41;
        color: #fff;
        border: none;
        width: 100%;
        padding: 10px;
        margin: 10px 5px 5px 5px;
        font-size: 1.1em;
        font-weight: bold;
        cursor: pointer;
      }
      /* Responsive */
      @media only screen and (max-width: 1024px) {
        div.p-float { width: 33%; }
      }
      @media only screen and (max-width: 600px) {
        div.p-float { width: 50%; }
      }
      /* [DOES NOT MATTER] */
      html, body {
        padding: 0;
        margin: 0;
        font-family: arial, sans-serif;
      }
    </style>
  </head>
  <body>
    <div id="p-float">
      <div class="p-float"><div class="p-float-in">
        <img class="p-img" src="upload_image/ARC9.jpg"/>
        <div class="p-name">A Dictionary of Architecture </div>
        <div class="p-price">$500</div>
        <div class="p-desc">Containing over 5,000 entries from Aalto to ziggur...</div>
        <button class="p-add"><a href="detail.php?id='1'&cat='.$_GET['subcatnm'].'">More Details</a></button>
      </div></div>
      <div class="p-float"><div class="p-float-in">
        <img class="p-img" src="upload_image/1861004877.jpg"/>
        <div class="p-name">C# Programming</div>
        <div class="p-price">$300</div>
        <div class="p-desc">'C# is platform independent,includes namespace,gar...</div>
        <button class="p-add"><a href="detail.php?id='10'&cat='.$_GET['subcatnm'].'">More Details</a></button>
      </div></div>
      <div class="p-float"><div class="p-float-in">
        <img class="p-img" src="upload_image/0596000278.jpg"/>
        <div class="p-name">Programming with Perl</div>
        <div class="p-price">$450</div>
        <div class="p-desc">Perl is programming langauge which is not comforta..</div>
        <button class="p-add"><a href="detail.php?id='12'&cat='.$_GET['subcatnm'].'">More Details</a></button>
      </div></div>
      <div class="p-float"><div class="p-float-in">
        <img class="p-img" src="upload_image/bookoftea.jpg"/>
        <div class="p-name">Book of Tea</div>
        <div class="p-price">$100</div>
        <div class="p-desc">The Philosophy of Tea is not mere aestheticism in ...</div>
        <button class="p-add"><a href="detail.php?id='17'&cat='.$_GET['subcatnm'].'">More Details</a></button>
      </div></div>

  </body>
</html>