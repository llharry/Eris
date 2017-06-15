/*
By Charon Web Services
@author: Harry Laird
 */

function openMenu(){
    jQuery('#nav-dropdown').removeClass('inactive');
}
function closeMenu(){
    jQuery('#nav-dropdown').addClass('inactive');
}

var menuVisible = false;
function toggleMenu(){//possibly add arg for the dropdown id here if more than one menu is needed.
    if(menuVisible){
        closeMenu();
        menuVisible = false
    }else{
        openMenu();
        menuVisible = true
    }
}
