function setActive(){
    for(let card of $('.education-card')){
      card.classList.remove('active');
    }
      $(this).addClass('active');
  }
  
  $('.education-card').on('click', this.setActive)