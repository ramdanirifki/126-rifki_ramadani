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
  }
}

export default Function;