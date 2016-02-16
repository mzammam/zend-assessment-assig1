/**
 * 
 */


function postImage(image) {
	
	
	$.get('http://localhost'+image, function(data, status){
		if(status == 'success')
			{
				$('#msg').html('<div class="alert alert-success">'+
				  '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'+
				  '<strong>Success!</strong> Image was posted successfuly to twitter.</div>');
				
			}
        
    });
	
}
