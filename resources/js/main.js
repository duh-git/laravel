const contentTab = document.querySelector('.hidden-list__content');
const navTab = document.querySelector('.hidden-list__nav');

contentTab.addEventListener('click', () => {
  try {
    document.querySelector('main .first').focus();
  } catch (error) {
    document.querySelector('main li:first-child a').focus();
  }
});

navTab.addEventListener('click', () => {
  document.querySelector('nav li:first-child a').focus();
});