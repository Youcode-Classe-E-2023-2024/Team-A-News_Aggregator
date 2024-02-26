    const likeBtn = document.querySelector('.like-btn');
    let likes_count = document.querySelector('#likes-count');
    let isFavLiked = true;
    const user_id = document.currentScript.dataset.userId;
    const news_id = document.currentScript.dataset.newsId;

    is_Liked();

    ////
    likeBtn.addEventListener('click', () => {
        if (user_id !== '') {
            if (isFavLiked) {
                liking('unlike', 'DELETE', news_id, user_id);
            }
            if (!isFavLiked) {
                liking('like', 'POST', news_id, user_id);
            }
        } else {
            window.document.location.href = '/login';
        }
    });
    //



    // like and unlike function
    function liking(route, method, newsId, userId){
    fetch('/api/'+ route, {
        headers: {
            "Content-Type": "application/json",
            "Accept": "application/json, text-plain, */*",
        },
        method: method,
        body: JSON.stringify({
            news_id: newsId,
            user_id: userId,
        })
    })
        .then((response) => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then((data) => {
            console.log(data.message);
            is_Liked();
        })
        .catch(function (error) {
            console.log(error);
        });
}

    // is liked ? function
    function is_Liked(){
    fetch('/api/is_liked/', {
        headers: {
            "Content-Type": "application/json",
            "Accept": "application/json, text-plain, */*",
        },
        method: 'POST',
        body: JSON.stringify({
            news_id: news_id,
            user_id: user_id,
        })
    })
        .then((response) => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then((data) => {
            if (data.isliked) {
                likeBtn.querySelector('path').style.fill = 'red';
                isFavLiked = true;
                likes_count.innerHTML = data.likes;
            } else {
                likeBtn.querySelector('path').style.fill = 'currentColor';
                isFavLiked = false;
                likes_count.innerHTML = data.likes;
                console.log(data.likes);
            }
        })
        .catch(function (error) {
            console.log(error);
        });
}
