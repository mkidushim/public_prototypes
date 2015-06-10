<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<title></title>
<script type="text/javascript">

img_array = [];

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

}
function next () {
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
}
function intitialize (){
    $.ajax({
            url: 'dir_listing.php',
            dataType: 'json',
            method: 'GET',
            cache: false,
            success: function(response) {
                for(var i = 0; i < response.files.length; i++){
                    var img = $('<img>',{
                src: response.files[i],
                class: "img"
            })
              $('#img_box').append(img)
                }
              
            }
        })    
}
$(document).ready(function(){
    //intitialize();
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
#img_box {
    width: 800px;
    height: 600px;
    position: absolute;
}
.img {
    display: inline-block;
    position: relative;
    left: 100%;
}
</style>
</head>
<body>
<button type="button" id="btn">update</button>
<button id="btn_p" type="button">prev</button>
<button id="btn_n" type="button">next</button>
<div id="img_box"></div>
</body>
</html>