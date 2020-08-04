// Панель навигации(карусель)
let navAdminButton = document.querySelector('#nav-admin-btn');
navAdminMenu = document.querySelector('#nav-admin-menu');
navAdminButton.addEventListener('mouseenter', function () {
    navAdminMenu.classList.add('show')
});
navAdminButton.addEventListener('mouseleave', function () {
    navAdminMenu.classList.remove('show')
});

navAdminMenu.addEventListener('mouseenter', function () {
    this.classList.add('show');
});
navAdminMenu.addEventListener('mouseleave', function () {
    this.classList.remove('show');
});


// Добавление и удаление групп пользователя

let groupPanel = document.querySelector('#user-group-panel');
    addGroupMenu = document.querySelector('#user-add-group-menu');

addGroupMenu.childNodes.forEach(function (item) {
    item.addEventListener('click', function () {
        let userGroupPanelItem = document.createElement('div');
        userGroupPanelItem.classList.add('user-group-panel__item');

        let userGroupPanelItemInput = document.createElement('input');
        userGroupPanelItemInput.classList.add('form-control');
        userGroupPanelItemInput.setAttribute("type", "text");
        userGroupPanelItemInput.setAttribute('name', 'roles[]');
        userGroupPanelItemInput.setAttribute('value', item.getAttribute('value'));
        userGroupPanelItemInput.setAttribute('readonly', '');

        let userGroupPanelItemClose = document.createElement('div');
        userGroupPanelItemClose.classList.add('button-close');
        userGroupPanelItemClose.setAttribute('type', 'button');
        userGroupPanelItemClose.innerHTML = '&times;';

        userGroupPanelItem.appendChild(userGroupPanelItemInput);
        userGroupPanelItem.appendChild(userGroupPanelItemClose);
        groupPanel.appendChild(userGroupPanelItem);
    });
});

groupPanel.addEventListener('click', function (event) {
    if (event.target && event.target.classList.contains('button-close')) {
        let parent = event.target.closest('.user-group-panel__item');
        parent.parentNode.removeChild(parent);
    }
});

