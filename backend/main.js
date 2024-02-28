function searchBar(){
    switch(toggleSearch){
        case 1:
            $(".searchBar").css({transform: 'translate(-50%, 100%) scale(1.1)'});
            $(".searchBar").css("filter", "opacity(1)");
            toggleSearch = 2;
        break;
        case 2: 
            $(".searchBar").css({transform: 'translate(-50%, 0%) scale(1)'});
            $(".searchBar").css("filter", "opacity(0)");
            toggleSearch = 1;
        break;
    }
}

toggleSearch = 1;
function searchBar(){
    switch(toggleSearch){
        case 1:
            $(".searchBar").css({transform: 'translate(-50%, 100%) scale(1.1)'});
            $(".searchBar").css("filter", "opacity(1)");
            toggleSearch = 2;
        break;
        case 2: 
            $(".searchBar").css({transform: 'translate(-50%, 0%) scale(1)'});
            $(".searchBar").css("filter", "opacity(0)");
            toggleSearch = 1;
        break;
    }
}