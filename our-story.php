

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="new-imag/Untitled-1.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Global Lashing</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
   
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">
    
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link rel="stylesheet" href="media.css">
	
	
	<style>
	.timeline {
  display: flex;
  flex-direction: column;
  margin: 20px auto;
  position: relative;
}
.timeline__event {
  margin-bottom: 20px;
  position: relative;
  display: flex;
  margin: 20px 0;
  border-radius: 6px;
  align-self: center;
  width: 100%;
}
.timeline__event:nth-child(2n+1) {
  flex-direction: row-reverse;
}
.timeline__event:nth-child(2n+1) .timeline__event__date {
  border-radius: 0 6px 6px 0;
}
.timeline__event:nth-child(2n+1) .timeline__event__content {
  border-radius: 6px 0 0 6px;     text-align: end;
}
.timeline__event:nth-child(2n+1) .timeline__event__icon:before {
  content: "";
  width: 2px;
  height: 160%;
  background: #1271b5;
  position: absolute;
  top: 0%;
  left: 50%;
  right: auto;
  z-index: -1;
  transform: translateX(-50%);
  -webkit-animation: fillTop 2s forwards 2s ease-in-out;
          animation: fillTop 2s forwards 2s ease-in-out;
}
.timeline__event:nth-child(2n+1) .timeline__event__icon:after {
  content: "";
  width: 150%;
  height: 2px;
  background: #1271b5;
  position: absolute;
  right: 0;
  z-index: -1;
  top: 50%;
  left: auto;
  transform: translateY(-50%);
  -webkit-animation: fillLeft 2s forwards 2s ease-in-out;
          animation: fillLeft 2s forwards 2s ease-in-out;
}
.timeline__event__title {
  font-size: 1.2rem;
  line-height: 1.4;
  text-transform: uppercase;
  font-weight: 600;
  color: #9251ac;
  letter-spacing: 1.5px;
}
.timeline__event__content {
  padding: 20px 20px;
  -webkit-box-shadow: 0px 0px 15px -6px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 0px 15px -6px rgba(0,0,0,0.75);
box-shadow: 0px 0px 15px -6px rgba(0,0,0,0.75);
  background: #fff;
  width: 100%;
  border-radius: 0 6px 6px 0;
}
.timeline__event__date {
  color: #c9d4e2;
  font-size: 2.5rem;
  font-weight: 600;
  background: #1271b5;
  display: flex;
  align-items: center;
  justify-content: center;
  white-space: nowrap;
  padding: 0 20px;
  border-radius: 6px 0 0 6px; width: 25%;
  -webkit-box-shadow: 0px 0px 15px -5px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 0px 15px -5px rgba(0,0,0,0.75);
box-shadow: 0px 0px 15px -5px rgba(0,0,0,0.75);
}
.timeline__event__icon {
  display: flex;
  align-items: center;
  justify-content: center;
  color: #9251ac;
  padding: 20px;
  align-self: center;
  margin: 0 60px 0 60px;
  background: #1271b5;
  border-radius: 100%;
  width: 20px;
  box-shadow: 0 30px 60px -12px rgba(50, 50, 93, 0.25), 0 18px 36px -18px rgba(0, 0, 0, 0.3), 0 -12px 36px -8px rgba(0, 0, 0, 0.025);
  padding: 20px;
  height: 20px;
  position: relative;
}
.timeline__event__icon i {
  font-size: 32px;
}
.timeline__event__icon:before {
  content: "";
  width: 2px;
  height: 160%;
  background: #1271b5;
  position: absolute;
  top: 0%;
  z-index: -1;
  left: 50%;
  transform: translateX(-50%);
  -webkit-animation: fillTop 2s forwards 2s ease-in-out;
          animation: fillTop 2s forwards 2s ease-in-out;
}
.timeline__event__icon:after {
  content: "";
  width: 150%;
  height: 2px;
  background: #1271b5;
  position: absolute;
  left: 0%;
  z-index: -1;
  top: 50%;
  transform: translateY(-50%);
  -webkit-animation: fillLeftOdd 2s forwards 2s ease-in-out;
          animation: fillLeftOdd 2s forwards 2s ease-in-out;
}
.timeline__event__description {
  flex-basis: 100%;
}

.timeline__event__description p {
      margin-bottom: 0rem; min-height:48px; align-items: center;
    display: flex;
}

.timeline__event--type2:after {
  background: #555ac0;
}
.timeline__event--type2 .timeline__event__date {
  color: #c9d4e2;
  background-color: #1271b5;
}
.timeline__event--type2:nth-child(2n+1) .timeline__event__icon:before, .timeline__event--type2:nth-child(2n+1) .timeline__event__icon:after {
  background: #87bbfe;
}
.timeline__event--type2 .timeline__event__icon {
  background: #1271b5;
    color: #1271b5;
}
.timeline__event--type2 .timeline__event__icon:before, .timeline__event--type2 .timeline__event__icon:after {
  background: #1271b5;
}
.timeline__event--type2 .timeline__event__title {
  color: #555ac0;
}
.timeline__event--type3:after {
  background: #24b47e;
}
.timeline__event--type3 .timeline__event__date {
  color: #c9d4e2;
  background-color: #1271b5;
}
.timeline__event--type3:nth-child(2n+1) .timeline__event__icon:before, .timeline__event--type3:nth-child(2n+1) .timeline__event__icon:after {
  background: #1271b5;
}
.timeline__event--type3 .timeline__event__icon {
 background: #1271b5;
    color: #1271b5;
}
.timeline__event--type3 .timeline__event__icon:before, .timeline__event--type3 .timeline__event__icon:after {
  background: #1271b5;
}
.timeline__event--type3 .timeline__event__title {
  color: #24b47e;
}
.timeline__event:last-child .timeline__event__icon:before {
  content: none;
}

@media (max-width: 786px) {
	
	.timeline__event:nth-child(2n+1) .timeline__event__content{text-align:center}
	
  .timeline__event {
    flex-direction: column;
    align-self: center;
  }
  .timeline__event__content {
    width: 100%; text-align:center
  }
  .timeline__event__icon {
    border-radius: 6px 6px 0 0;
    width: 100%;
    margin: 0;     display: none;
    box-shadow: none;
  }
  .timeline__event__icon:before, .timeline__event__icon:after {
    display: none;
  }
  .timeline__event__date {
    border-radius: 0;
    padding: 20px;     width: 100%;
  }
  .timeline__event:nth-child(2n+1) {
    flex-direction: column;
    align-self: center;
  }
  .timeline__event:nth-child(2n+1) .timeline__event__date {
    border-radius: 0;     width: 100%;
    padding: 20px;
  }
  .timeline__event:nth-child(2n+1) .timeline__event__icon {
    border-radius: 6px 6px 0 0;
    margin: 0;
  }
}
@-webkit-keyframes fillLeft {
  100% {
    right: 100%;
  }
}
@keyframes fillLeft {
  100% {
    right: 100%;
  }
}
@-webkit-keyframes fillTop {
  100% {
    top: 100%;
  }
}
@keyframes fillTop {
  100% {
    top: 100%;
  }
}
@-webkit-keyframes fillLeftOdd {
  100% {
    left: 100%;
  }
}
@keyframes fillLeftOdd {
  100% {
    left: 100%;
  }
}
	</style>
	
	
	
	
	
	
	
	
	
	
	
  </head>
  <body>
    <!-- header -->
   <?php include('header.php'); ?>
   
    <section class="breadcumb">
      <div class="container">
	  <div class="row ">
          <div class="col-md-12 text-center">
            <h1 class="mb-0">OUR STORY</h1>


          </div>
         
        </div>
	  
	  
        
      </div>
    </section>
	
	 <section class="success-story">
      <div class="container">
	  <div class="row justify-content-center">
          <div class="col-md-8">
           <div class="timeline">

	<!--first-->
	<div class="timeline__event  animated fadeInUp delay-3s timeline__event--type1">
		<div class="timeline__event__icon ">
			<!-- <i class="lni-sport"></i>-->

		</div>
		<div class="timeline__event__date">
			2023
		</div>
		<div class="timeline__event__content ">
			
			<div class="timeline__event__description">
				<p>Formed Global Stamping Solution &amp; ventured into manufacturing hardware products into
ratchet, comma, hooks.</p>
			</div>
		</div>
	</div>

	<!--second-->

	<div class="timeline__event animated fadeInUp delay-2s timeline__event--type2">
		<div class="timeline__event__icon">
			<!-- <i class="lni-sport"></i>-->

		</div>
		<div class="timeline__event__date">
			2019
		</div>
		<div class="timeline__event__content">
			
			<div class="timeline__event__description">
				<p>Started trading other cargo handling consumables like Dhsackle, buckles and dunnage bags</p>
			</div>
		</div>
	</div>

	<!--third-->

	<div class="timeline__event animated fadeInUp delay-1s timeline__event--type3">
		<div class="timeline__event__icon">
			<!-- <i class="lni-sport"></i>-->

		</div>
		<div class="timeline__event__date">
			2018
		</div>
		<div class="timeline__event__content">
			
			<div class="timeline__event__description">
				<p>Started manufacturing of Lifting Slings along with Lashing Products</p>
			</div>

		</div>
	</div>

	<!--forth-->

	<div class="timeline__event animated fadeInUp timeline__event--type1">
		<div class="timeline__event__icon">
			<!-- <i class="lni-sport"></i>-->

		</div>
		<div class="timeline__event__date">
			2017
		</div>
		<div class="timeline__event__content">
			
			<div class="timeline__event__description">
				<p>Started Global Lashing and Lifting Solutions LLP as a completely end to end in-house
manufacturing facility</p>
			</div>
		</div>
	</div>

	<!--first-->
	<div class="timeline__event  animated fadeInUp delay-3s timeline__event--type1">
		<div class="timeline__event__icon ">
			<!-- <i class="lni-sport"></i>-->

		</div>
		<div class="timeline__event__date">
			2016
		</div>
		<div class="timeline__event__content ">
			
			<div class="timeline__event__description">
				<p>Set up stitching machines as a backward integration for selling Lashing Products</p>
			</div>
		</div>
	</div>

	<!--second-->

	<div class="timeline__event animated fadeInUp delay-2s timeline__event--type2">
		<div class="timeline__event__icon">
			<!-- <i class="lni-sport"></i>-->

		</div>
		<div class="timeline__event__date">
			2012
		</div>
		<div class="timeline__event__content">
			
			<div class="timeline__event__description">
				<p>Started trading of Lashing Products</p>
			</div>
		</div>
	</div>

	<!--third-->

	<div class="timeline__event animated fadeInUp delay-1s timeline__event--type3">
		<div class="timeline__event__icon">
			<!-- <i class="lni-sport"></i>-->

		</div>
		<div class="timeline__event__date">
			2007
		</div>
		<div class="timeline__event__content">
			
			<div class="timeline__event__description">
				<p>Started Importing Machines, established warehouse, service team and dealer distribution network Pan-
India</p>
			</div>

		</div>
	</div>

	<!--forth-->

	<div class="timeline__event animated fadeInUp timeline__event--type1">
		<div class="timeline__event__icon">
			<!-- <i class="lni-sport"></i>-->

		</div>
		<div class="timeline__event__date">
			1996
		</div>
		<div class="timeline__event__content">
			
			<div class="timeline__event__description">
				<p>Formed Global packaging then (-) Started supplying Packaging consumables to industries like
pp, pet...</p>
			</div>
		</div>
	</div>

	<!--first-->
	

</div>
		   
		   
		   

          </div>
		  
		 
         
        </div>
		
		  
	
		
	
		
		
		
		
	  
	  
        
      </div>
    </section>
	
	
	
	
	
	
	
	

	
	
	
  
	 
	
	<?php include('footer.php'); ?>
	
	
  
  </body>
</html>