// GLOBALS

// DOCUMENT READY

// FUNCTIONS

function appear()
{
    $('html').animate({opacity: 1},1000);
}

function goToPage(url)
{   
    $('html').fadeOut(300,function(){
        location.href = url;
    });
}
