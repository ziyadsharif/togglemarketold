var dummyUsers = [{
        name: 'David Hume',
        imgSrc: 'https://thispersondoesnotexist.com/image',
        id: 1
    },
    {
        name: 'Hannah Montana',
        imgSrc: 'https://thispersondoesnotexist.com/image',
        id: 2
    },
    {
        name: 'Faris Dijani',
        imgSrc: 'https://thispersondoesnotexist.com/image',
        id: 3
    },
    {
        name: 'Some Dude',
        imgSrc: 'https://thispersondoesnotexist.com/image',
        id: 4
    },
    {
        name: 'Some Dude 2',
        imgSrc: 'https://thispersondoesnotexist.com/image',
        id: 5
    },
]

function searchUsers(e) {
    $('.search-cell').remove();
    var results = [];
    var userInput = e.target.value.toLowerCase();

    dummyUsers.forEach(function (item) {
        if (item.name.toLowerCase().startsWith(userInput)) {
            results.push(item);
        }
    });
    
    if(e.target.value.length === 0) {
        results = [];
    }
    results.forEach(function (item) {
        var searchResultItemEl = `
            <div class="search-cell">
            <div class="contact-cell">
                <img src="${item.imgSrc}" class="image-bubble" />
                <div class="user-info">
                    <p>${item.name}</p>
                </div>
            </div>
        </div>
            `;

        $('.search-dropdown-container').append(searchResultItemEl);
    });
}

$(document).ready(function () {
    $('.search-dropdown-input').on('input', searchUsers);
})