function loadPosts() {
    let username = 'guest';
    let password = 'guest';
    let authBase64 = btoa(username + ':' + password);
    $.ajax({
        method: 'GET',
        url: 'https://baas.kinvey.com/appdata/kid_rksGCnJU/posts',
        headers: { 'Authorization': 'Basic ' + authBase64 },
        success: showPosts,
        error: showError
    });

}

function showPosts(data, status) {
    let ul = $('<ul>');
    for (let post of data) {
        ul.append($('<li>').text(post.title + ' -> ' + post.body));
    }

    $('body').append(ul);
}

function showError(data, status) {
    let errorMsg = "Error: " + JSON.stringify(data);
    $('body').append($('<div>').text(errorMsg));
}
function createPost() {
    let username = 'guest';
    let password = 'guest';
    let authBase64 = btoa(username + ':' + password);
    let postData = { title: $('#newPostTitle').val(), body: $('#newPostBody').val() };
    $.ajax({
        method: 'POST',
        url: 'https://baas.kinvey.com/appdata/kid_rksGCnJU/posts',
        headers: { 'Authorization': 'Basic ' + authBase64 },
        data: postData,
        success: showSuccess,
        error: showError
    });
}

function showSuccess(data, status) {
    let msg = 'Created: ' + JSON.stringify(data);
    $('body').append($('<div>').text(msg));
}