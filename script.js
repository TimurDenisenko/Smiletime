document.addEventListener("DOMContentLoaded", function () {
    //Подсказки для смены языка
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
    [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));

    //Модальное окно для увелечения фотографий сотдруников
    const zoomImageModal = document.getElementById('zoom-image');
    zoomImageModal.addEventListener('show.bs.modal', event => {
        const memberImg = event.relatedTarget.querySelector("img");
        const modalImg = zoomImageModal.querySelector('.modal-image');
        modalImg.src = memberImg.src;
        modalImg.alt = memberImg.alt;
        zoomImageModal.querySelector('.modal-description').textContent = event.relatedTarget.querySelector("span").innerText.toLowerCase();
    })

    //Параллакс эффект для некоторых изображений
    document.querySelectorAll(".parallax-image").forEach(parallaxImage => {
        parallaxImage.style.transform = `translateY(0px)`;
        document.addEventListener("scroll", () => {
            const scrolled = window.scrollY;
          
            const offset = scrolled * 0.5;
            parallaxImage.style.transform = `translateY(${offset}px)`;
          });
    });

    //Счетчик для контейнера с ассортиментом
    const counters = document.querySelectorAll(".counter");
    const duration = 3000;

    const runCounter = (counter) => {
      const target = +counter.getAttribute("data-target");
      const increment = target / (duration / 16);
      let current = 0;

      const updateCount = () => {
        current += increment;

        if (current < target) {
          counter.innerText = Math.ceil(current);
          requestAnimationFrame(updateCount);
        } else {
          counter.innerText = target; 
        }
      };

      updateCount();
    };

    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          runCounter(entry.target);
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.7 });

    counters.forEach(counter => {
      observer.observe(counter);
    });

    // Окрашивание текста предобзора списка если выбран первый элемент
    function handleSelectChange(event) {
        if (event.target.selectedIndex !== 0) {
            event.target.style.color = 'black';
            selectElement.removeEventListener('change', handleSelectChange);
        }
    }
    
    const selectElement = document.getElementById('event-select');
    const options = document.querySelectorAll("#event-select option");
    selectElement.style.color = 'gray';
    options.forEach(option => {
        option.style.color = 'black';
    });
    selectElement.addEventListener('change', handleSelectChange);
});

/*
function delay(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

const animationTriggers = document.querySelectorAll(".animation-triggers");
animationTriggers.forEach(trigger => {
  trigger.addEventListener('click', async function () {
    const activeAnimation = document.querySelector(".carousel-item.active");
    activeAnimation.style.animationPlayState = 'paused';
    await delay(500);
  });
}); 
*/

(() => {
    'use strict'
  
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')
  
    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
      form.addEventListener('submit', event => {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }
  
        form.classList.add('was-validated')
      }, false)
    })
  })()
