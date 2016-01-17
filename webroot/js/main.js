$(function()
{    
    $('.receipts .deleteimage').click(function()
    {        
        $('.receipts img').remove();
        $('.receipts .deleted').val(1)
    });
    
    
    $('tr.clickabletr').click(function()
    {
        var url ='/'+$(this).attr('type')+'/'+$(this).attr('action')+'/'+$(this).attr('id');
        document.location.href = url;
      
    });


    
});