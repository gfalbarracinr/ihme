function showStuff(aParentNode)
{
    var el = document.getElementsByClassName('productDetails__list')[0];
    if (hasClass(el, 'productDetails__list--invisible')) 
    {
        $('.productDetails__list').removeClass('productDetails__list--invisible');
        $('.productDetails__title').removeClass('productDetails__title--closed');
        $('.productDetails__title').addClass('productDetails__title--open');
    }
    else
    {
        el.className += " productDetails__list--invisible";
        $('.productDetails__title').removeClass('productDetails__title--open');
        $('.productDetails__title').addClass('productDetails__title--closed');
    }
}

function hasClass(element, cls) {
    return (' ' + element.className + ' ').indexOf(' ' + cls + ' ') > -1;
}

