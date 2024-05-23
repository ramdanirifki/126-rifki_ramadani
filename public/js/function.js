const Function = {
  date() {
    var currentDate = new Date();
  
    var day = currentDate.getDate();
    var month = currentDate.getMonth() + 1;
    var year = currentDate.getFullYear();
  
    if (day < 10) {
      day = '0' + day;
    }
    if (month < 10) {
      month = '0' + month;
    }
  
    var formattedDate = `${day}/${month}/${year}`;
  
    const container = document.querySelector('.date');
    if (container) {
      container.innerText = formattedDate;
    } else {
      console.error("Element with class 'date' not found.");
    }
  },

  showDrawer() {
    const showButton = document.querySelector('#menu');
    const element = document.querySelector('.container-drawer');

    showButton.addEventListener('click', function() {
      element.classList.add('drawer-active');
    });
  },

  closeDrawer() {
    const closeButton = document.querySelector('#drawer');
    const element = document.querySelector('.container-drawer');

    closeButton.addEventListener('click', function() {
      element.classList.remove('drawer-active');
    });
  },

  hideMenu() {
    const buttonAllMenu = document.querySelector('#all-menu');
    const buttonFoodsMenu = document.querySelector('#foods');
    const buttonDrinksMenu = document.querySelector('#drinks');
    const buttonVegetablesMenu = document.querySelector('#vegetables');
    const buttonMieMenu = document.querySelector('#mie');
    const buttonCakeMenu = document.querySelector('#cake');
    const buttonfruitsMenu = document.querySelector('#fruits');

    const allMenu = document.querySelector('.menu-product.all-menu');
    const foodsMenu = document.querySelector('.menu-product.foods');
    const drinksMenu = document.querySelector('.menu-product.drinks');
    const vegetablesMenu = document.querySelector('.menu-product.vegetables');
    const mieMenu = document.querySelector('.menu-product.mie');
    const cakeMenu = document.querySelector('.menu-product.cake');
    const fruitMenu = document.querySelector('.menu-product.fruits');

    // BUTTON ALL MENU
    buttonAllMenu.addEventListener('click', function() {
      // Display Hidden
      allMenu.classList.remove('hidden');
      foodsMenu.classList.add('hidden');
      drinksMenu.classList.add('hidden');
      vegetablesMenu.classList.add('hidden');
      mieMenu.classList.add('hidden');
      cakeMenu.classList.add('hidden');
      fruitMenu.classList.add('hidden');

      // Link Active
      buttonAllMenu.classList.add('active')
      buttonFoodsMenu.classList.remove('active')
      buttonDrinksMenu.classList.remove('active')
      buttonVegetablesMenu.classList.remove('active')
      buttonMieMenu.classList.remove('active')
      buttonCakeMenu.classList.remove('active')
      buttonfruitsMenu.classList.remove('active')
    });

    // BUTTON FOODS MENU
    buttonFoodsMenu.addEventListener('click', function() {
      // Display Hidden
      allMenu.classList.add('hidden');
      foodsMenu.classList.remove('hidden');
      drinksMenu.classList.add('hidden');
      vegetablesMenu.classList.add('hidden');
      mieMenu.classList.add('hidden');
      cakeMenu.classList.add('hidden');
      fruitMenu.classList.add('hidden');

      // Link Active
      buttonAllMenu.classList.remove('active')
      buttonFoodsMenu.classList.add('active')
      buttonDrinksMenu.classList.remove('active')
      buttonVegetablesMenu.classList.remove('active')
      buttonMieMenu.classList.remove('active')
      buttonCakeMenu.classList.remove('active')
      buttonfruitsMenu.classList.remove('active')
    });

    // Link DRINKS MENU
    buttonDrinksMenu.addEventListener('click', function() {
      // Display Hidden
      allMenu.classList.add('hidden');
      foodsMenu.classList.add('hidden');
      drinksMenu.classList.remove('hidden');
      vegetablesMenu.classList.add('hidden');
      mieMenu.classList.add('hidden');
      cakeMenu.classList.add('hidden');
      fruitMenu.classList.add('hidden');

      // Link Active
      buttonAllMenu.classList.remove('active')
      buttonFoodsMenu.classList.remove('active')
      buttonDrinksMenu.classList.add('active')
      buttonVegetablesMenu.classList.remove('active')
      buttonMieMenu.classList.remove('active')
      buttonCakeMenu.classList.remove('active')
      buttonfruitsMenu.classList.remove('active')
    });

    // BUTTON VEGETABLES MENU
    buttonVegetablesMenu.addEventListener('click', function() {
      // Display Hidden
      allMenu.classList.add('hidden');
      foodsMenu.classList.add('hidden');
      drinksMenu.classList.add('hidden');
      vegetablesMenu.classList.remove('hidden');
      mieMenu.classList.add('hidden');
      cakeMenu.classList.add('hidden');
      fruitMenu.classList.add('hidden');

      // Link Active
      buttonAllMenu.classList.remove('active')
      buttonFoodsMenu.classList.remove('active')
      buttonDrinksMenu.classList.remove('active')
      buttonVegetablesMenu.classList.add('active')
      buttonMieMenu.classList.remove('active')
      buttonCakeMenu.classList.remove('active')
      buttonfruitsMenu.classList.remove('active')
    });

    // BUTTON MEAT MENU
    buttonMieMenu.addEventListener('click', function() {
      // Display Hidden
      allMenu.classList.add('hidden');
      foodsMenu.classList.add('hidden');
      drinksMenu.classList.add('hidden');
      vegetablesMenu.classList.add('hidden');
      mieMenu.classList.remove('hidden');
      cakeMenu.classList.add('hidden');
      fruitMenu.classList.add('hidden');

      // Link Active
      buttonAllMenu.classList.remove('active')
      buttonFoodsMenu.classList.remove('active')
      buttonDrinksMenu.classList.remove('active')
      buttonVegetablesMenu.classList.remove('active')
      buttonMieMenu.classList.add('active')
      buttonCakeMenu.classList.remove('active')
      buttonfruitsMenu.classList.remove('active')
    });

    // BUTTON CAKE MENU
    buttonCakeMenu.addEventListener('click', function() {
      // Display Hidden
      allMenu.classList.add('hidden');
      foodsMenu.classList.add('hidden');
      drinksMenu.classList.add('hidden');
      vegetablesMenu.classList.add('hidden');
      mieMenu.classList.add('hidden');
      cakeMenu.classList.remove('hidden');
      fruitMenu.classList.add('hidden');

      // Link Active
      buttonAllMenu.classList.remove('active')
      buttonFoodsMenu.classList.remove('active')
      buttonDrinksMenu.classList.remove('active')
      buttonVegetablesMenu.classList.remove('active')
      buttonMieMenu.classList.remove('active')
      buttonCakeMenu.classList.add('active')
      buttonfruitsMenu.classList.remove('active')
    });

    // BUTTON FRUIT MENU
    buttonfruitsMenu.addEventListener('click', function() {
      // Display Hidden
      allMenu.classList.add('hidden');
      foodsMenu.classList.add('hidden');
      drinksMenu.classList.add('hidden');
      vegetablesMenu.classList.add('hidden');
      mieMenu.classList.add('hidden');
      cakeMenu.classList.add('hidden');
      fruitMenu.classList.remove('hidden');

      // Link Active
      buttonAllMenu.classList.remove('active')
      buttonFoodsMenu.classList.remove('active')
      buttonDrinksMenu.classList.remove('active')
      buttonVegetablesMenu.classList.remove('active')
      buttonMieMenu.classList.remove('active')
      buttonCakeMenu.classList.remove('active')
      buttonfruitsMenu.classList.add('active')
    });
  }
}

export default Function;