const navOperator = $( '[data-anchor-operators' );
const navWeapon = $( '[data-anchor-weapons' );
const operatorTab = $('[data-operator' );
const weaponTab = $( '[data-weapon]' );

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
