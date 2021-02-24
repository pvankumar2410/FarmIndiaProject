
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
<div class="wrapper d-flex">
    <div class="sidebar"> <small class="text-muted pl-3" style="font-size:22px;font-weight: bold; ">Auction Report</small>
        <ul>
            <li><a href="bid.php">Bid Details</a></li>
            <li><a href="biddet.php">Bidder Details</a></li>
            <li><a href="pro.php">Products Details</a></li>
            <li><a href="procat.php">Different Products</a></li>
        </ul> <small class="text-muted px-3" style="font-size:22px;font-weight: bold; ">Equipment Report</small>
        <ul>
            <li><a href="farm.php">Farmers Details</a></li>
            <li><a href="eqp.php">Equipments</a></li>
            <li><a href="order.php">Orders details</a></li>
            <li><a href="cat.php">Categories</a></li>
        </ul> <small class="text-muted px-3" style="font-size:22px;font-weight: bold; ">Jobs</small>
        <ul>
            <li><a href="#">Jobs</a></li>
            <li><a href="#">Vacancy</a></li>
        </ul>
    </div>
</div>
<style type="text/css">
	* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    list-style: none;
    text-decoration: none;
    font-family: arial
}

.wrapper {
    position: relative
}

.sidebar {
    position: fixed;
    width: 270px;
    height: 80%;
    background: #dcdcdc;
    padding: 20px 0
}

.text-muted {
    color: black !important

}

ul {
    padding-bottom: 20px
}

ul li a img {
    background: grey;
    top: 0;
    border: none;
    width: 20px
}

.sidebar ul li {
    padding: 15px
}

.sidebar ul li a {
    color: black;
    display: block
}

.sidebar ul li a .fas {
    width: 30px;
    color: white !important
}

i.fas.fa-home:hover,
i.fas.fa-file-invoice:hover,
i.fas.fa-video:hover,
i.fas.fa-id-badge:hover,
i.fas.fa-external-link-alt:hover,
i.fas.fa-code:hover,
i.far.fa-calendar-alt:hover,
i.far.fa-credit-card:hover {
    color: white !important
}

.sidebar ul li a .far {
    width: 30px;
    color: white !important
}

.sidebar ul li:hover {
    background: grey
}

.sidebar ul li a:hover {
    text-decoration: none
    background:white;
}
</style>