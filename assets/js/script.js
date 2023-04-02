const socialDropdown = document.querySelector('.social-dropdown');
const socialDropbtn = document.querySelector('.social-dropbtn');

socialDropbtn.addEventListener('click', () => {
  socialDropdown.classList.toggle('active');
});
