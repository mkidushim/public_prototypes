$(document).ready(function(){
	$('button').click(function(){
		console.log('click initiated');
		$.ajax({
			dataType: 'json',
			url: 'http://ax.itunes.apple.com/WebObjects/MZStoreServices.woa/ws/RSS/topMovies/json',
			success: function(result){
				console.log('loaded',result);
				window.result = result;
				console.log('result2: ', window.result)
				for (var i = 0; i < window.result.feed.entry.length-1; i++){
					var third_img_movie = window.result.feed.entry[i]['im:image'][2].label;
					var m_name = window.result.feed.entry[i]['im:name'].label;
					var m_artist = window.result.feed.entry[i]['im:artist'].label;
					console.log('third_img_movie:', third_img_movie)
					var container = $('<figure>',{
						class: 'col-md-1'
					})
					var image = $('<img>',{
					src: third_img_movie

					})
					var m_info = $('<div class= "info">')
					var title = $('<div class= "title">' + m_name +'</div>')
					var artist = $('<div class= "artist">'+ m_artist +'</div>')
					$('#main').append(container)
					$(container).append(image,m_info)
					$(m_info).append(title,artist)
					

				}
			}
		});
	});
});