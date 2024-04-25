

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
    font-family: 'Quicksand', sans-serif;
    background-color: #E4F6FA;
}

.screen{
    padding: 31px 1px;
  cursor: pointer;
    position: absolute;
    left: 50%;
    top: 50%;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    overflow: hidden;
    width: 330px;
    height: 360px;
    background-color: #fff;
    border-radius: 15px;
    box-shadow: 0 2 12px 0 rgba(0,0,0,0.1);
    text-align: center;
}

.screen #topIcon{
    position: absolute;
    left: 50%;
    top: 30%;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
}

.screen .border-top{
    position: absolute;
    top: 0;
    height: 10px;
    width: 100%;
    background-color: #5AE9BA;
}

.screen h3{
    font-weight: 700;
    font-size: 24px;
    color: #606060;
    letter-spacing: 0;
    position: absolute;
    left: 50%;
    top: 46%;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
}

.screen p{
    font-weight: 400;
    font-size: 16px;
    color: #616161;
    letter-spacing: 0.18px;
    position: absolute;
    left: 50%;
    top: 56%;
    width: 90%;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
}

.screen button{
    background: #5AE9BA;
    border: 1px solid #34E2A9;
    box-shadow: 0 3px 20px 0 rgba(90,233,186,0.60);
    border-radius: 100px;
    letter-spacing: 1.5px;
    font-weight: 500;
    color: #fff;
    padding-top: 2px;
    width: 186px;
    height: 40px;
    position: absolute;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    bottom: -20%;
    opacity: 0;
    font-size: 13px;
  cursor: pointer;
}

.screen button:focus{
    outline:0;
  
  : pointer;
}
#Bubbles{
    visibility: hidden;
}

.un{
    -webkit-user-select: none; /* Safari */        
    -moz-user-select: none; /* Firefox */
    -ms-user-select: none; /* IE10+/Edge */
    user-select: none; /* Standard */
}

.tr{
    -webkit-transition: all 0.2s ease-in;
    -moz-transition: all 0.2s ease-in;
    -ms-transition: all 0.2s ease-in;
    -o-transition: all 0.2s ease-in;
    transition: all 0.2s ease-in;
}

.btn-overlay{
    
    background-color: #43d0f1;
    border: 0;
    color: #fff;
    opacity: 0.6;
    padding: 10px 15px;
    border-radius: 100px;
    font-size: 12px;
    letter-spacing: 0.8px;
    z-index: 999;
    width: 100px
}

.btn-overlay:hover{
    opacity: 1;
}

#restart{
    position: fixed;
    right: 10px;
    top: 10px;
}

#invert{
    position: fixed;
    right: 10px;
    top: 55px;
}
#times{
    margin: 59px 0px;

}
    </style>
</head>
<body>
<style>
    
</style>
<div class="screen un">
            <div class="border-top">
            </div>
            <svg xmlns="http://www.w3.org/2000/svg"width="100" height="100" id="topIcon" fill="currentColor" style=
            "color:rgb(90, 233, 186);" class="bi bi-check-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
  <path d="m10.97 4.97-.02.022-3.473 4.425-2.093-2.094a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05"/>
</svg>
           
            
            <h3>SUCCESS!</h3>
            <p><b> your transaction successfully done. </b></p>
            
           <div class="timessd">
           <p id="times"><a href="./orderlist.php" style='color: #27aee3;'>Click here</a>  <span id="demo">10</span></p>

           </div>
        </div>
</body>
</html>



<script>

timeLeft = 9;

function countdown() {
	timeLeft--;
	document.getElementById("demo").innerHTML = String( timeLeft );
	if (timeLeft > 0) {
		setTimeout(countdown, 1000);
	}else{
        window.location.href='./orderlist.php';
    }
};

setTimeout(countdown, 1000);


</script>
<script>
    (function($){
    var red = "#F86969";
    var green = "#5AE9BA";
    var color = green;
    var tlScreen1 = new TimelineMax();
    
    tlScreen1
    .add("start")
    .set("#Bubbles", {visibility: "visible"})
    .from("#bottom-bubbles", 4, {opacity: 0, y:50, x: 40, ease: Elastic.easeOut.config(1, 0.8)})
    .from("#top-bubbles", 4, {opacity: 0, y: 50, x: 40, ease: Elastic.easeOut.config(1, 0.8)}, "start")
    .to("#btnClick", 3.5, {opacity: 1, y: -96, ease: Elastic.easeOut.config(1, 1)}, "-=3.5")
    
    $("#btnClick").mousedown(function() {
        $(this).css("box-shadow","unset");
    });
    
    $("#btnClick").mouseup(function() {
        
        if(color == green){
            $(this).css("box-shadow","0 3px 20px 0 rgba(90,233,186,0.60)");
        }
        else{
            $(this).css("box-shadow","0 3px 13px 0 rgba(248,105,105,0.60)");
        }
        
        
    });
    
    $("#restart").click(function() {
        tlScreen1.restart();
    });
    
    $("#invert").click(function() {
        
        if(color == green){
            tlScreen1.stop();
            
            $(".border-top").css("background-color",red);
            $("#blue-color").css("fill",red);
            $("#bluetooth").css("fill","#D74747");
            $("#Bubbles ellipse").css("fill",red);
            $(".screen button").css({
               'box-shadow' : '0 3px 13px 0 rgba(248,105,105,0.60)',
               'background-color' : red,
                'border-color' : red
            });
            $(".screen button").html("TRY AGAIN");
            $(".screen h3").html("FAILED!");
            $(".screen p").html("Your file has not been transferred successfully via bluetooth.");
            color = red;
            tlScreen1.restart();
            
        }
        else{
            tlScreen1.stop();
            $(".border-top").css("background-color",green);
            $("#blue-color").css("fill",green);
            $("#bluetooth").css("fill","#fff");
            $("#Bubbles ellipse").css("fill",green);
            $(".screen button").css({
               'box-shadow' : '0 3px 20px 0 rgba(90,233,186,0.60)',
               'background-color' : green,
                'border-color' : green
            });
            $(".screen button").html("CONTINUE");
            $(".screen h3").html("SUCCESS!");
            $(".screen p").html("You have successfully transferred your file via bluetooth.");
            color = green;
            tlScreen1.restart();
        }
        
        
    });
    
})(jQuery);
</script>