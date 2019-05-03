// Your code here...

var mainBody = document.querySelector('.content');
var friendsJsonFolder;
var friendSideLink = document.querySelector('.friends');
var friendsMenuLink = document.querySelector('.pure-menu-link');
var homeSideLink = document.querySelector('.home');
var message = console.log;


// friendsMenuLink.addEventListener('click', function (evt) {
// 	message('is it working');
// 	var target = evt.currentTarget
// 	// target.children[0].classList.remove('pure-menu-link:hover');
// 	target.children[0].classList.add('pure-menu-selected');
// });


friendSideLink.addEventListener('click', function (evt) {
	var target = evt.currentTarget;
	target.classList.add('pure-menu-selected');
	target.children[0].classList.remove('pure-menu-link:hover');
});


friendSideLink.addEventListener('click', function (evt) {

	var friendList;
	var xhr = new XMLHttpRequest();


	xhr.addEventListener('load', function (evt) {

		if (xhr.status === 200) {
			friendsJsonFolder = JSON.parse(xhr.responseText);

			mainBody.innerHTML = '<div class="pure-menu custom-restricted-width">' + '<span class="pure-menu-heading">' + 'FRIENDS' + '</span>' + '<ul class="pure-menu-list">' + '</ul>' + '</div>';

			friendList = document.querySelector('.content > .pure-menu > .pure-menu-list');

			for (var count = 0; friendsJsonFolder.length > count; count++) {
				friendList.innerHTML += '<li class=pure-menu-item>' + '<a href="#" class="pure-menu-link" data-id=' + friendsJsonFolder[count].id + '>' + friendsJsonFolder[count].firstName + ' ' + friendsJsonFolder[count].lastName + '</a>' + '</li>';
			}
		}
	});

	xhr.open('GET', 'friends/friends.json', true);
	xhr.send(null);

	evt.preventDefault();

});

mainBody.addEventListener('click', function (evt) {
	var friendSelectionTarget = evt.target;

	if (evt.target = document.querySelector('.content > div > .pure-menu-list > .pure-menu-item > .pure-menu-link')) {

		var xhr = new XMLHttpRequest();
		var friendIdentity = friendSelectionTarget.dataset.id;

		xhr.addEventListener ('load', function (evt) {
			if (xhr.status === 200) {
				friendsJsonFolder = JSON.parse(xhr.responseText);

				mainBody.children[0].classList.remove('pure-menu', 'custom-restricted-width');
				mainBody.children[0].classList.add('friend');
				mainBody.children[0].innerHTML = '<div class="identity"></div>';

				document.querySelector('.identity').innerHTML = 
				'<img src="' +'img/' + friendsJsonFolder.avatar + '" class="photo"/>' + 
				'<h2 class="name">' + friendsJsonFolder.firstName + ' ' + friendsJsonFolder.lastName + '</h2>' + 
				'<ul>' + 
				'<li><span class="label">Email: </span> ' + friendsJsonFolder.email + '</li>' + 
				'<li><span class="label">Hometown: </span> ' + friendsJsonFolder.hometown + '</li>' + '</ul>';
				
				mainBody.children[0].innerHTML += '<p class="bio">' + friendsJsonFolder.bio + '</p>';
			}
		});

		xhr.open('GET', 'friends/' + friendIdentity + '.json');
		xhr.send(null);

		evt.preventDefault();
	}

});

homeSideLink.addEventListener('click', function () {
	mainBody.innerHTML = "";
	friendSideLink.classList.remove('pure-menu-selected');
});

