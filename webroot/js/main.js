$(function()
{    
    $('.deleteimage').click(function()
    {        
        $('.receiptimage').remove();
        $('.deleteimageval').val(1)
    });
    
    $('.viewfile').click(function()
    {        
        url = $('.receiptimage').attr('src');
        var win = window.open(url, '_blank');
        win.focus();
    });
    
    
    $('tr.clickabletr').click(function()
    {
        var url ='/'+$(this).attr('type')+'/'+$(this).attr('action')+'/'+$(this).attr('id');
        document.location.href = url;
      
    });

    $("a.forgotpw").click(function() 
    {
        $('.home-wrapper.signin').hide('slow',function(){
            
        });
        $('.home-wrapper.forgot').show('slow',function(){
            
        });
        
        return false;
    });
    
  
    $(".btn.btn-custom.signin").click(function()
    {
        $('.home-wrapper.signin').show('slow',function(){
            
        });
        
        $('.home-wrapper.forgot').hide('slow',function(){
            
        });
        
        return false;
    })

    
});