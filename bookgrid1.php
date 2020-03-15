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
        background:   #999999;
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
    
      <div class="p-float"><div class="p-float-in">
        <img class="p-img" src="upload_image/stonesoup.jpg"/>
        <div class="p-name">Stone Soup</div>
        <div class="p-price">$350</div>
        <div class="p-desc">A hungry traveler tricks a little old lady into co...</div>
        <button class="p-add"><a href="detail.php?id='19'&cat='.$_GET['subcatnm'].'">More Details</a></button>
      </div></div>
       <div class="p-float"><div class="p-float-in">
        <img class="p-img" src="upload_image/ARC8.jpg"/>
        <div class="p-name">Elephant Kingdom</div>
        <div class="p-price">$1000</div>
        <div class="p-desc">Elephants occupy a special place in the life and a...</div>
        <button class="p-add"><a href="detail.php?id='2'&cat='.$_GET['subcatnm'].'">More Details</a></button>
      </div></div>
	   <div class="p-float"><div class="p-float-in">
        <img class="p-img" src="upload_image/pasta1.jpg"/>
        <div class="p-name">Pasta Perfection</div>
        <div class="p-price">$100</div>
        <div class="p-desc">A hungry traveler tricks a little old lady into co...</div>
        <button class="p-add"><a href="detail.php?id='20'&cat='.$_GET['subcatnm'].'" color="wighte">More Details</a></button>
      </div></div>
	   <div class="p-float"><div class="p-float-in">
        <img class="p-img" src="upload_image/comp9.jpg"/>
        <div class="p-name">Java & Xml</div>
        <div class="p-price">$500</div>
        <div class="p-desc">'Complete Reference'</div>
        <button class="p-add"><a href="detail.php?id='8'&cat='.$_GET['subcatnm'].'">More Details</a></button>
      </div></div>
    </div>
  </body>
</html>