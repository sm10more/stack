function e(tag, attributs, childNodes) {
    const element = document.createElement(tag);
    for (const property in attributs) {
    element.setAttribute(property, attributs.property);
    }
    childNodes.forEach(c => element.appendChild(c));
    return element;
};
var formAttr ={class:"form reply", style:"display:none", action:"/comment_page.php?answerId=<?php echo $ansId ?>", method:"post"};
var form = e('form', formattr, [
    e('label', {for:"name"}, ['Name']),
    e('input', {type:"username", class:"form-control", id:"name", placeholder:"e.g. John Doe", name:"name"}, ['']),
    e('label', {for:"comment"}, ['add a comment']),
    e('input', {type:"comm", class:"form-control", id:"comment", placeholder:"your comment here", name:"comment"}, ['']),
    e('button', {type:"submit", class:"btn btn-primary"}, ['Post your comment'])
 ]);
 var h = document.getElementById("commButton");
 h.insertAdjacentElement("afterend", form);