
function createNode(element) {
    return document.createElement(element); 
}

function append(parent, el) {
    return parent.appendChild(el); 
}

function capitalize(str1){
    return str1.charAt(0).toUpperCase() + str1.slice(1);
}

function createProfile(user) {
    let divMain = document.createElement("div");
    divMain.className = "col-xs-12 col-sm-6 col-md-3";
    divMain.innerHTML = '<div class="thumbnail">' +
        '<a href="#"><img src="' + user.picture.large + '" alt="' + user.picture.thumbnail + '"></a>' +
        '<div class="caption">' + 
            '<h3>' + capitalize(user.name.first) + ' ' + capitalize(user.name.last) + '</h3>' +
            '<p>' + capitalize(user.location.street)  + '</p>' +
            '<p>' + capitalize(user.location.city) + '</p>' +
            '<p>' + capitalize(user.location.state) + '</p>' +
            '<a href="detalle.html?id=15" class="btn btn-primary">Ver perfil completo</a>' +
        '</div>' +
    '</div>';
    return divMain;
}

const container = document.getElementById('profileContainer');
const url = 'https://randomuser.me/api/?results=10';
fetch(url)
  .then((resp) => resp.json())
  .then(function(data) {
    let users = data.results;
    sessionStorage.setItem('users', JSON.stringify(users));
    return users.map(function(user) {
        let profile = createProfile(user);
        container.appendChild(profile);  
    })
  })
  .catch(function(error) {
    console.log(error);
  }); 

/*const ul = document.getElementById('authors');
  const url = 'https://randomuser.me/api/?results=10';
  fetch(url)
  .then((resp) => resp.json())
  .then(function(data) {
    let authors = data.results;
    return authors.map(function(author) {
      let img = author.picture.medium;
        $name = author.name.first;
        $last = author.name.last;
    })
  })
  .catch(function(error) {
    console.log(error);
  });  */ 

    

