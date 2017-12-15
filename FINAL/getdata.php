<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
*{
    margin:0;
    overflow-x: hidden;
    overflow-y: hidden;
}

</style>
        <canvas id="myCanvas" width="1920" height="1480">

</canvas>
</head>
<body>
    <script type="text/javascript">



var c = document.getElementById("myCanvas");
var ctx = c.getContext("2d");
ctx.fillStyle = "#ADD8E6";
ctx.fillRect(0,0,1920,1480);
// ctx.moveTo(0,0);
// ctx.lineTo(0,x);
// ctx.lineWidth = 15;

// ctx.strokeStyle = stroke;
// ctx.stroke();

// ctx.arc(95,50,40,0,2*Math.PI);
// ctx.stroke();

function addLine(myData){
    ctx.beginPath();
    var x = myData.number1;
    var y = myData.number2;
    var stroke = myData.color;
    ctx.moveTo(Math.floor(Math.random() * 1000),Math.floor(Math.random() * 700));
    ctx.lineTo(x,y);
    ctx.strokeStyle = stroke;
    ctx.lineWidth = 15;
    ctx.stroke();
    ctx.closePath();
}

function addCircle(myData){
    // circle stuff
    ctx.beginPath();
    var x = myData.number1;
    var y = myData.number2;
    var stroke = myData.color;
    ctx.arc(x, y, Math.floor(Math.random() * 101), 0, 2 * Math.PI, false);
    ctx.fillStyle = stroke;
    ctx.fill();
    ctx.closePath();
}

function addRect(myData){
    ctx.beginPath();
    var x = myData.number1;
    var y = myData.number2;
    var stroke = myData.color;
    // ctx.moveTo(y,x);
    // console.log(myData);
    // console.log(stroke);
    ctx.fillStyle = stroke;
    ctx.fillRect(Math.floor(Math.random() * 1000),Math.floor(Math.random() * 900),x,y);
    // ctx.fillStyle = stroke;
    ctx.fill();
    // ctx.lineWidth = 15;
    // ctx.stroke();
    ctx.closePath();
}


var lastId = 0;
var checkData = null;

function getData(){
    console.log("getData");
    $.ajax({ url: './getDataJson.php?lastId='+lastId,
        type: 'get',
        dataType: "JSON",
        success: function(data) {
            console.log(data);
            // console.log(data[2].uid);
            for(var i = 0; i < data.length; i++){
                 
                if( data[i].shape == "circle") addCircle(data[i]);
                else if( data[i].shape == "stline") addLine(data[i]);
                else if( data[i].shape == "fillRect") addRect(data[i]);
                //else if( data[i].shape == "")();


                if(data[i].id>lastId) lastId = data[i].id;

            }

            if(checkData==null){
                checkData = setInterval( function(){
                    getData();
                }
                    , 5000);
            }
            // for(var i = 0; i < data.length; i++){
            //      var y = data[i].number2;
            //      console.log(y);
            //      addLine(data[i]);
            // }
            // for(var i = 0; i < data.length; i++){
            //      var stroke = data[i].color;
            //      console.log(stroke);
            //      addLine(data[i]);
            // }
            // for(var i = 0; i < data.length; i++){
            //      var shape = data[i].shape;
            //      console.log(shape);
            //      addLine(data[i]);
            // }
        }
});
}

getData();


    </script>
</body>
</html>