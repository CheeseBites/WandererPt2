
function changeTitle(activity_id){
        var element = document.getElementById(activity_id).children;
    if(element[0].style.opacity != 0.4){
        element[0].style.opacity = 0.4;        
    }else{
        element[0].style.opacity = 1;
    }
}


