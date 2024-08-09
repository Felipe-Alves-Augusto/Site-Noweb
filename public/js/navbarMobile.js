let iconMobile = document.getElementById('toggle-menu')


iconMobile.addEventListener('click', function() {
    document.getElementById('navbar-sticky').classList.toggle('hidden');
    document.querySelector('.link-mobile').classList.toggle('hidden');
});