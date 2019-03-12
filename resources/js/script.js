
window.addEventListener('load', function(){

    let ajax = new XMLHttpRequest();

    let $postsDiv = document.querySelector('#allPosts');

    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4 && ajax.status == 200) {
            
            $posts = JSON.parse(ajax.responseText);
            let contentPost = "";
            for(let count = 0; count < posts.length; j++){
                contentPost+="<h3>"+posts[count][0].title+"</h3>";
            }

            $postsDiv.innerHTML=contentPost;
        }
    }

    ajax.open('GET', '/', true);
    ajax.send();

});