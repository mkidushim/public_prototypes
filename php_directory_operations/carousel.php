<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<title></title>
<script type="text/javascript">
var current_img_index = 0;
var img_array = [];
var dot_array = [];
function load_files (){
$.ajax({
            url: 'dir_listing.php',
            dataType: 'json',
            method: 'GET',
            cache: false,
            success: function(response) {
            	console.log(response.files);
                var files = response.files;
                img_array = img_array.concat(response.files);

                var img = $('<img>',{
                        src: response.files[0],
                    })
                var div_inner = $('<div>',{
                            class: "item active",
                        })
                var div_out = $('<div>',{
                            class: "carousel-inner",
                            role: "listbox",
                        })


                 $('#img_box').append(div_out);
                $(div_out).append(div_inner);
                $(div_inner).append(img);

                
            }
        });
}

function prev (){
    if (current_img_index == 0){
        return
    }
    var prev_image_index = current_img_index-1;
    img_array[prev_image_index].css({left: '-100%'})
    img_array[current_img_index].animate({left: '100%'})
    img_array[prev_image_index].animate({left: "0%"})
    dot_array[current_img_index].removeClass('active');
    dot_array[prev_image_index].addClass('active');
    current_img_index= prev_image_index;
  /*
   var p = img_array.indexOf($('img').attr('src'));
   console.log('prev img:',p);
 var current_img = p-1;
 console.log('current_img:', current_img)
   $('img').attr('src','');
   if (p == 0){
    $('img').attr('src',img_array[img_array.length-1])
   }
   else {
    $('img').attr('src',img_array[p-1])
   }
*/
}
function next () {
    if(current_img_index == 6){
        return
    }
    var next_image_index = current_img_index+1;
    img_array[next_image_index].css({left: '100%'})
    img_array[current_img_index].animate({left: '-100%'})
    img_array[next_image_index].animate({left: "0%"})
    dot_array[current_img_index].removeClass('active');
    dot_array[next_image_index].addClass('active');
    /*
$('img').eq(current_img_index).removeClass('img_show')
$('img').eq(current_img_index).addClass('img_hidden')
$('img').eq(current_img_index+1).removeClass('img_hidden')
$('img').eq(current_img_index+1).addClass('img_shown')

img_array[current_img_index].animate({
    left: 100%;
})*/
    current_img_index = next_image_index;
    /*
    var n = img_array.indexOf($('img').attr('src'));
    console.log('prev img:',n);
    var current_img = n+1;
    console.log('current_img:', current_img)
    $('img').attr('src','');
    if (n == 6){
        $('img').attr('src',img_array[0])
    }
    else{
        $('img').attr('src',img_array[n+1])
    }
    */
}
function intitialize (){
    $.ajax({
            url: 'dir_listing.php',
            dataType: 'json',
            method: 'GET',
            cache: false,
            success: function(response) {
                //img_array = img_array.concat(response.files);
                for(var i = 0; i < response.files.length; i++){
                    //img_array.push(response.files[i]);
                var dot = $('<p>',{
                    class: 'dot',
                }); 
                var img = $('<img>',{
                    src: response.files[i],
                }); 
                if (i == 0) {
                    dot.addClass('active')
                    img.addClass('img_shown')
                }
                $('#img_box').append(img)
                $('#dot_box').append(dot)
                img_array.push(img);
                dot_array.push(dot);
            }
            }
        })    
}
$(document).ready(function(){
    intitialize();
    $("body").on("click", "#btn", function(){
        load_files();
    })
    $('body').on('click','#btn_p', function(){
        prev();
    })
    $('body').on('click','#btn_n', function(){
        next();
    })
})
</script>
<style type="text/css">
.dot {
    border: 2px solid black;
    display: inline-block;
    border-radius: 100px;
    height: 35px;
    width: 35px;
    margin:15px;
    position: relative;
    left: 500px;
}
#img_box {
    left: 18%;
    width: 800px;
    height: 600px;
    position: relative;
    overflow: hidden;
}
img {
position: absolute;
left: 100%;
top: 0;
}
.img_shown {
    position: absolute;
    left:0;
    top: 0;

}
.active{
background-color: black;
}
</style>
</head>
<body>

<button id="btn_p" class="col-md-2 col-md-offset-2" type="button">prev</button>
<button id="btn_n" class="col-md-2 col-md-offset-2" type="button">next</button>
<div id="img_box" class=""></div>
<div id="dot_box" class=""></div>
</body>
</html>