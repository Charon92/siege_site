
const navOperator = document.querySelectorAll( '[data-anchor-operators]' );
const navWeapon = document.querySelectorAll( '[data-anchor-weapons]' );
const operatorTab = document.querySelectorAll( '[data-operator]' );
const weaponTab = document.querySelectorAll( '[data-weapon]' );

navOperator.click( () => {
  const offset = 100;

  $('html, body').animate({
    scrollTop: operatorTab.offset().top + offset,
  }, 2000);
});

navWeapon.click( () => {
  const offset = 100;

  $('html, body').animate({
    scrollTop: weaponTab.offset().top + offset,
  }, 2000);
});
