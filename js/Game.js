$(function(){
    $('#higher').click(function(){
       var b = $(this);
        var o = b.html();
        b.attr('disabled',true).html('Calculating...');
        $.get('Game/NextCard', function(data){
            if(data['Deck'].length > 0)
            {
                $('#next-card').html('<h3>'+data['Deck'][1]+'<h3>');
            }
            else
            {
                
            }
            b.removeAttr('disabled').html(o);
        },'json');
    });
    
    $('#lower').click(function(){
        var b = $(this);
        var o = b.html();
        b.attr('disabled',true).html('Calculating...');
        $.get('Game/NextCard', function(data){
            if(data['Deck'].length > 0)
            {
                $('#next-card').html('<h3>'+data['Deck'][1]+'<h3>');
            }
            else
            {
                
            }
            b.removeAttr('disabled').html(o);
        },'json');
    });
});