function toggleContent(elementName, sourceName) {
    if (!document.getElementById(elementName).classList.contains('hidden-set-list'))
        return;

    //Set all the buttons
    var toggleLists = document.getElementsByClassName("interactable");
    for (var i = 0; i < toggleLists.length; i++) {
        toggleLists[i].classList.remove('underlined-interactable');
    }

    var toggle = document.getElementById(sourceName);
    toggle.classList.add('underlined-interactable');


    //Set all the lists
    var setLists = document.getElementsByClassName("set-list");
    var element = document.getElementById(elementName);

    for (var i = 0; i < setLists.length; i++) {
        setLists[i].classList.add('hidden-set-list');
    }
    element.classList.remove('hidden-set-list');
}