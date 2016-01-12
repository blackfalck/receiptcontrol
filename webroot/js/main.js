$(function()
{    
    $('.receipts .deleteimage').click(function()
    {        
        $('.receipts img').remove();
        $('.receipts .deleted').val(1)
    });
    
});