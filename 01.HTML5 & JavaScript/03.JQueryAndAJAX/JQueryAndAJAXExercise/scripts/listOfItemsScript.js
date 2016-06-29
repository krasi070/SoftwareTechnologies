function addItem() {
    let newItem = $('#newItem').val();
    $('#newItem').val('');
    let li = $('<li>').text(newItem + ' ');
    let deleteLink = $('<a href="#" onclick="deleteItem(this)">').text('[Delete]');
    li.append(deleteLink);
    $('#list').append(li);
}

function deleteItem(item) {
    $(item).parent().remove();
}