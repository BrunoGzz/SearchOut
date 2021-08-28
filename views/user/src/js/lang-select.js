var langItem = document.querySelector('#lang-item-selector');
langItem.addEventListener('click', function(){
    var langData = langItem.dataset.lang;
    if(langData == 'en'){
        localStorage.setItem('lang','en');
    }else if(langData == 'es'){
        localStorage.setItem('lang','es');
    }
});