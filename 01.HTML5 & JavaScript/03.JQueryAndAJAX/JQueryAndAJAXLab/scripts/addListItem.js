function addListItem() {
    let text = document.getElementById('listItem').value;
    document.getElementById('listItem').value = '';
    let li = document.createElement('li');
    li.appendChild(document.createTextNode(text));
    document.getElementById('list').appendChild(li);
}