document.addEventListener('DOMContentLoaded', function() {
    const container = document.querySelector('.container_d');
    const prev = document.querySelector('.prev');
    const next = document.querySelector('.next');

    let pos = 0;
    const cardWidth = document.querySelector('.card').offsetWidth;
    const cardsToShow = 4;
    const slideWidth = cardWidth * cardsToShow;

    prev.addEventListener('click', function() {
        pos += slideWidth;
        pos = Math.min(pos, 0);
        container.style.transform = `translateX(${pos}px)`;
    });

    next.addEventListener('click', function() {
        pos -= slideWidth;
        const maxPos = -1 * (container.scrollWidth - container.offsetWidth);
        pos = Math.max(pos, maxPos);
        container.style.transform = `translateX(${pos}px)`;
    });
});


function filterByCategory(cat) {
    let x = document.querySelector('.container_d');
    x.innerHTML = '';
    fetch('/api/filter_by_category', {
        headers: {
            "Content-Type": "application/json",
            "Accept": "application/json, text-plain, */*",
        },
        method: 'POST',
        body: JSON.stringify({
            category_id: cat.value,
        })
    })
        .then((response) => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then((data) => {
            if (data.length > 0) {
                data.forEach((elem) => {
                    x.innerHTML += `

                    <div style="flex: 0 0 100%; max-width: 25%; padding: 20px;" class="card">
                        <div class="flex flex-row sm:block hover-img">
                            <a href="${elem.link}" target="_blank">
                                <img class="max-w-full w-full mx-auto" src="src/img/dummy/img20.jpg" alt="alt title">
                            </a>
                            <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                                <h3 class="text-lg font-bold leading-tight mb-2">
                                    <a target="_blank" href="${elem.link}">${elem.title}</a>
                                </h3>
                                <p class="hidden md:block text-gray-600 leading-tight mb-1">${elem.description}</p>
                                <span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>${elem.category.category}</a>
                            </div>
                        </div>
                    </div>

                    `;
                });

            } else {
                x.innerHTML = `
                  <div class="flex items-center justify-center h-48 bg-black w-full my-2">
                    <p class="text-gray-00 text-lg font-semibold">No records found</p>
                  </div>
                `;
            }
        })
        .catch( error => console.log(error));
}
