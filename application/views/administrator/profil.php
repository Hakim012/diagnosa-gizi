<html lang="en">
<head>
	<meta charset="UTF-8">

	<style>
		body{
			background:white;
		}
 
		.our-team{
			padding: 30px 0 40px;
			background: #fff;
			text-align: center;
			overflow: hidden;
			position: relative;
		}
 
		.our-team .pic{
			display: inline-block;
			width: 130px;
			height: 130px;
			margin-bottom: 50px;
			/*background:#ff00ac;*/
			position: relative;
			z-index: 1;
		}
 
		.our-team .pic:before
		{
			content: "";
            width: 500%;
            padding:0;
			margin:0;
            background: blue;
			position: absolute;
			bottom: 195%;
			right: 0;
			left: 0; 
			transform: scale(3);
			transition: all 0.3s linear 0s;
		}
 
		.our-team:hover .pic:before
		{
			height: 100%;
		}
 
		.our-team .pic:after
		{
			content: "";
			width: 100%;
			height: 100%;
			border-radius: 100%;
			background: #ff00ac;
			position: absolute;
			top: 0;
			left: 0; 
			z-index: -1;
		}
 
		.our-team .pic img{
			width: 100%;
			height: auto;
			border-radius: 50%;
			transform: scale(1);
			transition: all 0.9s ease 0s;
		}
 
		.our-team:hover .pic img
		{
			box-shadow: 0 0 0 14px #ff00ac;
			transform: scale(0.7);
		}
 
		.our-team .team-content
		{
			margin-bottom: 70px;
		}
		
		.our-team .title{
			font-size: 22px;
			font-weight: 700;
			color:#4e5052;
			letter-spacing: 1px;
			text-transform: capitalize;
			margin-bottom: 5px;
		}
 
		.our-team .post{
			display: block;
			font-size: 15px;
			color:#4e5052;
			text-transform: capitalize;
		}
 
		.our-team .social{
			width: 100%;
			padding:0;
			margin:0;
			background: blue;
			position: absolute;
			bottom: -100px;
			left:0;
			transition: all 0.5 ease 0s;
		}
 
		.our-team:hover .social{
			bottom:0;
		}
 
		.our-team .social li{
			display: inline-block;
		}
 
		.our-team .social li a{
			display: block;
			padding:10px;
			font-size: 17px;
			color:#fff;
			transition: all 0.3s ease 0s;
		}
 
		.our-team .social li a:hover{
			color:#eb1768;
			background: #f7f5ec;
			text-decoration: none;
			
		}
 
	</style>
<body>
            <?php $no=1; foreach($user as$jrs):?>
	        <div class="container ">
				<div class="our-team">
					<div class="pic">
						<img src="<?php echo base_url() ?>assets/home/images/stunting.jpg" alt="">
					</div>
					<div class="team-content">
						<h3 class="title"><?php echo $jrs->username?></h3>
						<span class="post"><?php echo '<b>Email : </b>'.$jrs->email?></span>
						<span class="post"><?php echo '<b>Posisi : </b>'.$jrs->level?></span>
						<a href=""><i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                        Profile</a>
					</div>
					<ul class="social">
 
						<li><a href="" class="fab fa-facebook-f"></a></li>
						<li><a href="" class="fab fa-instagram"></a></li>
						<li><a href="" class="fab fa-linkedin-in"></a></li>
						<li><a href="" class="fab fa-twitter"></a></li>
 
					</ul>
				</div>
	        </div>
	        <?php endforeach;?>
</body>
</html>